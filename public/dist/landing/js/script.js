$(document).ready(function () {
    if (notification && Object.keys(notification).length > 0) {
        displayPopupMessage(notification.message, notification.type);
    }

    $('a[href="#book_now_section"]').on('click', function (e) {
        e.preventDefault();
        const offset = 100;
        const target = $($(this).attr('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - offset
            }, 800);
        }
    });

    $('.appointment-form').on('submit', function (e) {
        e.preventDefault();

        // 🛑 Check if user is logged in
        if (!user) {
            return Swal.fire({
                title: 'Login Required',
                text: 'Please log in or create an account to make an appointment.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }

        // ✅ Continue with your validation and submission logic
        const department = $('select.form-control').val();
        const name = $('#appointment_name').val().trim();
        const email = $('#appointment_email').val().trim();
        const dateStr = $('.appointment_date').val().trim();
        const timeStr = $('.appointment_time').val().trim();
        const phone = $('#phone').val().trim();

        const emailRegex = /^\S+@\S+\.\S+$/;
        const phoneRegex = /^\+?\d{7,15}$/;

        if (!department || department === "Select Department") {
            return Swal.fire('Validation Error', 'Please select a department.', 'warning');
        }
        if (!name) {
            return Swal.fire('Validation Error', 'Name is required.', 'warning');
        }
        if (!email || !emailRegex.test(email)) {
            return Swal.fire('Validation Error', 'Enter a valid email.', 'warning');
        }
        if (!dateStr) {
            return Swal.fire('Validation Error', 'Choose a date.', 'warning');
        }
        if (!timeStr || !/^\d{1,2}:\d{2}(?:\s?[APMapm]{2})?$/.test(timeStr)) {
            return Swal.fire('Validation Error', 'Enter a valid time (e.g. 10:00 AM).', 'warning');
        }
        if (!phone || !phoneRegex.test(phone)) {
            return Swal.fire('Validation Error', 'Enter a valid phone number.', 'warning');
        }

        // Validate Date
        const dateObj = new Date(dateStr);
        const today = new Date();
        const tomorrow = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1);
        if (dateObj < tomorrow) {
            return Swal.fire('Invalid Date', 'Appointments must be scheduled at least one day in advance.', 'warning');
        }

        // Parse and validate time
        let time = timeStr.trim().toUpperCase();
        if (time.includes('AM') || time.includes('PM')) {
            let [h, m] = time.replace(/AM|PM/i, '').trim().split(':');
            h = parseInt(h);
            m = parseInt(m);
            if (time.includes('PM') && h !== 12) h += 12;
            if (time.includes('AM') && h === 12) h = 0;
            time = `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}`;
        }

        const [hourStr, minuteStr] = time.split(':');
        const hour = parseInt(hourStr);
        const minute = parseInt(minuteStr);
        const totalMinutes = hour * 60 + minute;

        const weekday = dateObj.getDay();
        let openMin = 0,
            closeMin = 0;

        if (weekday >= 1 && weekday <= 5) {
            openMin = 8 * 60;
            closeMin = 19 * 60;
        } else if (weekday === 6) {
            openMin = 10 * 60;
            closeMin = 17 * 60;
        } else if (weekday === 0) {
            openMin = 10 * 60;
            closeMin = 16 * 60;
        }

        if (totalMinutes < openMin || totalMinutes > closeMin) {
            return Swal.fire('Invalid Time', 'Selected time is outside working hours.', 'warning');
        }

        // All validations passed
        Swal.fire({
            title: 'Appointment Submitted!',
            icon: 'success',
            html: `
            <p><strong>Department:</strong> ${department}</p>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Date:</strong> ${dateStr}</p>
            <p><strong>Time:</strong> ${timeStr}</p>
            <p><strong>Phone:</strong> ${phone}</p>
        `
        });

        $(this)[0].reset();
    });

    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        const formId = 'loginForm';
        const modalId = 'loginModal';

        if (is_form_loading(formId)) {
            return;
        }

        $('#loginError').addClass('d-none');

        is_form_loading(formId, true);

        const email = $('#loginEmail').val().trim();
        const password = $('#loginPassword').val().trim();
        const rememberMe = $('#rememberMe').is(':checked') ? 1 : 0;

        const formData = new FormData();

        formData.append('email', email);
        formData.append('password', password);
        formData.append('remember', rememberMe);

        $.ajax({
            url: 'login',
            data: formData,
            type: 'POST',
            dataType: 'JSON',
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    if (response.user_type === 'admin') {
                        window.location.href = 'admin/dashboard';
                    } else {
                        window.location.reload();
                    }
                } else {
                    reset_form_loading(formId);

                    $('#loginError').removeClass('d-none');
                }
            },
            error: function (_, _, error) {
                console.error(error);
            }
        });
    });

    $('#registerForm').on('submit', function (e) {
        e.preventDefault();

        const formId = 'registerForm';
        const modalId = 'registerModal';

        if (is_form_loading(formId)) {
            return;
        }

        // Hide all error messages
        $('#registerError').addClass('d-none').text('');
        $('#errorRegisterEmail, #errorRegisterPassword, #errorConfirmPassword').addClass('d-none');

        const name = $('#registerName').val().trim();
        const email = $('#registerEmail').val().trim();
        const password = $('#registerPassword').val().trim();
        const confirmPassword = $('#confirmPassword').val().trim();

        let hasError = false;

        // Email validation (basic regex)
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            $('#errorRegisterEmail').text('Please enter a valid email address.').removeClass('d-none');
            hasError = true;
        }

        // Password validation (min 8 chars, 1 letter, 1 number, 1 special character)
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        if (!passwordRegex.test(password)) {
            $('#errorRegisterPassword').removeClass('d-none');
            hasError = true;
        }

        // Confirm password validation
        if (password !== confirmPassword) {
            $('#errorConfirmPassword').removeClass('d-none');
            hasError = true;
        }

        if (hasError) return;

        is_form_loading(formId, true);

        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('password', password);
        formData.append('confirm_password', confirmPassword);

        $.ajax({
            url: 'register',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    location.reload();
                } else {
                    reset_form_loading(formId);

                    $('#errorRegisterEmail').text('Email already exists.').removeClass('d-none');
                }
            },
            error: function (_, _, error) {
                console.error(error);
                reset_form_loading(formId);
                $('#registerError').text('An unexpected error occurred. Please try again.').removeClass('d-none');
            }
        });
    });

    $('#registerEmail').on('input', function () {
        $('#errorRegisterEmail').addClass('d-none');
    });

    $('#registerPassword').on('input', function () {
        $('#errorRegisterPassword').addClass('d-none');
    });

    $('#confirmPassword').on('input', function () {
        $('#errorConfirmPassword').addClass('d-none');
    });

    $('#registerName').on('input', function () {
        $('#registerError').addClass('d-none'); // If you want general errors hidden too
    });

    $("#logoutBtn").click(function () {
        Swal.fire({
            title: "Are you sure?",
            text: "You will be logged out.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, log out!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'logout',
                    type: 'POST',
                    success: function () {
                        location.reload();
                    },
                    error: function (_, _, error) {
                        console.error(error);
                    }
                });
            }
        });
    });

    $(document).on('click', '#showRegister', function (e) {
        e.preventDefault();
        $('#loginModal').modal('hide');
        $('#registerModal').modal('show');
    });

    $(document).on('click', '#showLogin', function (e) {
        e.preventDefault();
        $('#registerModal').modal('hide');
        $('#loginModal').modal('show');
    });

    function is_form_loading(form_id, set = false) {
        const $form = $('#' + form_id);
        const $submitBtn = $form.find('button[type="submit"]');
        const $modal = $form.closest('.modal');

        if (set) {
            $form.data('loading', true);

            $submitBtn.prop('disabled', true)
                .data('original-text', $submitBtn.html())
                .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please wait...');

            $modal.data('bs.modal')?._config && Object.assign($modal.data('bs.modal')._config, {
                backdrop: 'static',
                keyboard: false
            });

            $modal.find('[data-dismiss="modal"], .close').prop('disabled', true);
        } else {
            return $form.data('loading') === true;
        }
    }

    function reset_form_loading(form_id) {
        const $form = $('#' + form_id);
        const $submitBtn = $form.find('button[type="submit"]');
        const $modal = $form.closest('.modal');

        $form.data('loading', false);

        $submitBtn.prop('disabled', false)
            .html($submitBtn.data('original-text'));

        // Re-enable modal dismiss
        $modal.data('bs.modal')?._config && Object.assign($modal.data('bs.modal')._config, {
            backdrop: true,
            keyboard: true
        });

        // Re-enable close buttons
        $modal.find('[data-dismiss="modal"], .close').prop('disabled', false);
    }

    function displayPopupMessage(message, type = "info") {
        const validTypes = ["success", "error", "warning", "info", "question"];
        const icon = validTypes.includes(type) ? type : "info";

        Swal.fire({
            icon: icon,
            title: message,
            confirmButtonText: 'OK',
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false,
            toast: true,
            position: 'top-end'
        });
    }
})
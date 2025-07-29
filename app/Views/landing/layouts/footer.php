    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">DentalCare+</h2>
                        <p>Your trusted partner for compassionate and expert dental care, committed to your healthy smile.</p>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)" class="py-2 d-block">Home</a></li>
                            <li><a href="javascript:void(0)" class="py-2 d-block">Our Services</a></li>
                            <li><a href="javascript:void(0)" class="py-2 d-block">Patient Reviews</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Office</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Can-avid, Eastern Samar, Philippines</span></li>
                                <li><a href="tel:+639123456789"><span class="icon icon-phone"></span><span class="text">+63 912 345 6789</span></a></li>
                                <li><a href="mailto:dentalcareplus@gmail.com"><span class="icon icon-envelope"></span><span class="text">dentalcareplus@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-sm border-0 rounded">
                <div class="modal-header bg-light border-0">
                    <h5 class="modal-title font-weight-bold" id="loginModalLabel">Welcome Back</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="loginForm">
                    <div class="modal-body px-4">
                        <div class="alert alert-danger text-center d-none" id="loginError">Invalid email or password</div>
                        <div class="form-group">
                            <label for="loginEmail" class="font-weight-bold mb-0">Email</label>
                            <input type="email" class="form-control rounded-pill" id="loginEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword" class="font-weight-bold mb-0">Password</label>
                            <input type="password" class="form-control rounded-pill" id="loginPassword" placeholder="Enter your password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <div class="modal-footer border-0 d-flex flex-column align-items-center gap-2">
                        <button type="submit" class="btn btn-success w-100 rounded-pill py-2 mb-2">Login</button>

                        <div class="text-center w-100 mb-0">
                            <small>Don't have an account?
                                <a href="#" id="showRegister">Register here</a>
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow-sm border-0 rounded">
                <div class="modal-header bg-light border-0">
                    <h5 class="modal-title font-weight-bold" id="registerModalLabel">Create an Account</h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="registerForm">
                    <div class="modal-body px-4">
                        <div class="alert alert-danger text-center d-none" id="registerError">Please correct the errors below</div>
                        <div class="form-group">
                            <label for="registerName" class="font-weight-bold mb-0">Full Name</label>
                            <input type="text" class="form-control rounded-pill" id="registerName" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail" class="font-weight-bold mb-0">Email</label>
                            <input type="email" class="form-control rounded-pill" id="registerEmail" placeholder="Enter your email" required>
                            <small class="text-danger d-none" id="errorRegisterEmail">Email already exists.</small>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword" class="font-weight-bold mb-0">Password</label>
                            <input type="password" class="form-control rounded-pill" id="registerPassword" placeholder="Create a password" required>
                            <small class="text-danger d-none" id="errorRegisterPassword">Minimum 8 characters with letters, numbers & special characters.</small>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="font-weight-bold mb-0">Confirm Password</label>
                            <input type="password" class="form-control rounded-pill" id="confirmPassword" placeholder="Confirm password" required>
                            <small class="text-danger d-none" id="errorConfirmPassword">Passwords do not match.</small>
                        </div>
                    </div>
                    <div class="modal-footer border-0 d-flex flex-column align-items-center gap-2 w-100">
                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 mb-2">Register</button>

                        <div class="text-center w-100 mb-0">
                            <small>Already have an account?
                                <a href="#" id="showLogin">Login here</a>
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const notification = <?= json_encode(session()->getFlashdata()); ?>;
        const user = <?= json_encode(session()->get("user")); ?>;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="public/dist/landing/js/jquery.min.js"></script>
    <script src="public/dist/landing/js/jquery-migrate-3.0.1.min.js?v=1.0"></script>
    <script src="public/dist/landing/js/popper.min.js"></script>
    <script src="public/dist/landing/js/bootstrap.min.js"></script>
    <script src="public/dist/landing/js/jquery.easing.1.3.js"></script>
    <script src="public/dist/landing/js/jquery.waypoints.min.js"></script>
    <script src="public/dist/landing/js/jquery.stellar.min.js"></script>
    <script src="public/dist/landing/js/owl.carousel.min.js"></script>
    <script src="public/dist/landing/js/jquery.magnific-popup.min.js"></script>
    <script src="public/dist/landing/js/jquery.animateNumber.min.js"></script>
    <script src="public/dist/landing/js/bootstrap-datepicker.js"></script>
    <script src="public/dist/landing/js/jquery.timepicker.min.js"></script>
    <script src="public/dist/landing/js/scrollax.min.js"></script>
    <script src="public/dist/landing/js/main.js?v=1.2"></script>
    <script src="public/dist/landing/js/script.js?v=1.2"></script>
</body>

</html>
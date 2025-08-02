<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | DentalCare+</title>

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/admin/fontawesome-free/css/all.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/admin/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/admin/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/admin/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url() ?>public/dist/admin/img/logo.png?v=1.2" alt="Logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">4 Notifications</span>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item text-truncate" style="max-width: 250px;">
                            <i class="fas fa-calendar-check mr-2"></i> 2 New Appointments
                            <span class="float-right text-muted text-sm">10m</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item text-truncate" style="max-width: 250px;">
                            <i class="fas fa-user-injured mr-2"></i> New Patient Registered
                            <span class="float-right text-muted text-sm">30m</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item text-truncate" style="max-width: 250px;">
                            <i class="fas fa-file-invoice-dollar mr-2"></i> 1 Pending Invoice
                            <span class="float-right text-muted text-sm">1h</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item text-truncate" style="max-width: 250px;">
                            <i class="fas fa-cogs mr-2"></i> System update scheduled
                            <span class="float-right text-muted text-sm">3h</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item dropdown-footer">View All</a>
                    </div>
                </li>

                <!-- User Settings Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-circle mr-2"></i> My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-sliders-h mr-2"></i> Clinic Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item logoutBtn">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard" class="brand-link">
                <img src="<?= base_url() ?>public/dist/admin/img/logo.png?v=1.2" alt="DentalCare+" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DentalCare+</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- User Panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>public/dist/admin/img/uploads/default-user-image.webp" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Administrator</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-header">CLINIC OPERATIONS</li>

                        <!-- Appointments -->
                        <li class="nav-item">
                            <a href="appointments" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>Appointments</p>
                            </a>
                        </li>

                        <!-- Patients -->
                        <li class="nav-item">
                            <a href="patients" class="nav-link">
                                <i class="nav-icon fas fa-user-injured"></i>
                                <p>Patients</p>
                            </a>
                        </li>

                        <!-- Services -->
                        <li class="nav-item">
                            <a href="services" class="nav-link">
                                <i class="nav-icon fas fa-tooth"></i>
                                <p>Dental Services</p>
                            </a>
                        </li>

                        <!-- Billing -->
                        <li class="nav-item">
                            <a href="billing" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>Billing & Payments</p>
                            </a>
                        </li>

                        <li class="nav-header">REPORTS & ANALYTICS</li>

                        <!-- Reports -->
                        <li class="nav-item">
                            <a href="reports" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>Reports</p>
                            </a>
                        </li>

                        <!-- Reminders -->
                        <li class="nav-item">
                            <a href="reminders" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>Reminders</p>
                            </a>
                        </li>

                        <li class="nav-header">SYSTEM</li>

                        <!-- Settings -->
                        <li class="nav-item">
                            <a href="settings" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>System Settings</p>
                            </a>
                        </li>

                        <!-- Logout -->
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link logoutBtn">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <!-- Total Appointments Today -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-calendar-check"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Appointments Today</span>
                                    <span class="info-box-number">12</span>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Reminders -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-bell"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Reminders Sent</span>
                                    <span class="info-box-number">8</span>
                                </div>
                            </div>
                        </div>

                        <!-- Digital Payments -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-wallet"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Payments Today</span>
                                    <span class="info-box-number">₱4,800</span>
                                </div>
                            </div>
                        </div>

                        <!-- Canceled Appointments -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-ban"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Cancellations</span>
                                    <span class="info-box-number">2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Utilization Summary with Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Service Utilization Summary</h3>
                        </div>
                        <div class="card-body">
                            <div style="height: 300px;">
                                <canvas id="serviceChart"></canvas>
                            </div>

                            <ul class="mt-4">
                                <li><strong>Most Requested Service:</strong> Teeth Cleaning</li>
                                <li><strong>Top Paying Patient:</strong> Anna Liza (₱5,200 total)</li>
                                <li><strong>Average Appointments per Day:</strong> 15</li>
                                <li><strong>Most Active Day:</strong> Mondays</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Upcoming Appointments -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upcoming Appointments</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Appointment ID</th>
                                        <th>Patient Name</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#APT0001</td>
                                        <td>Maria Santos</td>
                                        <td>Teeth Cleaning</td>
                                        <td>June 2, 2025</td>
                                        <td>10:00 AM</td>
                                        <td><span class="badge badge-success">Confirmed</span></td>
                                    </tr>
                                    <tr>
                                        <td>#APT0002</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>Tooth Extraction</td>
                                        <td>June 2, 2025</td>
                                        <td>11:30 AM</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#APT0003</td>
                                        <td>Joana Reyes</td>
                                        <td>Dental Check-up</td>
                                        <td>June 3, 2025</td>
                                        <td>2:00 PM</td>
                                        <td><span class="badge badge-info">Reminder Sent</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Yesterday's Transactions Table -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Yesterday's Transactions</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Patient</th>
                                        <th>Service</th>
                                        <th>Amount Paid</th>
                                        <th>Payment Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#TX0001</td>
                                        <td>Mark Del Rosario</td>
                                        <td>Tooth Extraction</td>
                                        <td>₱1,800</td>
                                        <td>Cash</td>
                                    </tr>
                                    <tr>
                                        <td>#TX0002</td>
                                        <td>Clarisse Tan</td>
                                        <td>Teeth Whitening</td>
                                        <td>₱3,000</td>
                                        <td>GCash</td>
                                    </tr>
                                    <tr>
                                        <td>#TX0003</td>
                                        <td>Leo Gatchalian</td>
                                        <td>Dental Fillings</td>
                                        <td>₱2,400</td>
                                        <td>Credit Card</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>&copy; 2025 Eastern Goldtrans Tours Inc.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url() ?>public/plugins/admin/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/admin/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/admin/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/admin/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?= base_url() ?>public/dist/admin/js/adminlte.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            // Logout AJAX
            $('.logoutBtn').on('click', function(e) {
                $.ajax({
                    url: '../logout',
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = <?= json_encode(base_url()) ?>;
                    },
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            });

            // Line Chart for Service Utilization
            const chartCanvas = document.getElementById('serviceChart');
            if (chartCanvas) {
                const ctx = chartCanvas.getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Teeth Cleaning', 'Tooth Extraction', 'Check-up', 'Whitening', 'Fillings'],
                        datasets: [{
                            label: 'Number of Appointments',
                            data: [18, 12, 10, 6, 4],
                            backgroundColor: 'rgba(23, 162, 184, 0.2)',
                            borderColor: '#17a2b8',
                            borderWidth: 2,
                            pointBackgroundColor: '#17a2b8',
                            pointBorderColor: '#fff',
                            pointHoverBackgroundColor: '#fff',
                            pointHoverBorderColor: '#17a2b8',
                            fill: true,
                            tension: 0.3
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 2
                                }
                            }
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>
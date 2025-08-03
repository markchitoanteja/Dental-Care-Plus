<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO -->
    <title>DentalCare+ | <?= session()->get('page_title') ?></title>

    <meta name="description" content="DentalCare+ offers trusted and affordable dental services in Can-avid, Eastern Samar. Book an appointment online today.">
    <meta name="author" content="DentalCare+ Web Team">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url("favicon.ico") ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/open-iconic-bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/animate.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/owl.theme.default.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/ionicons.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/bootstrap-datepicker.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/jquery.timepicker.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/flaticon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/icomoon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("public/dist/landing/css/style.css") ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Dental<span>Care+</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                    <li class="nav-item <?= session()->get('current_page') === 'about_us' ? 'active' : '' ?>"><a href="<?= base_url('about_us') ?>" class="nav-link">About Us</a></li>
                    <li class="nav-item <?= session()->get('current_page') === 'services' ? 'active' : '' ?>"><a href="<?= base_url('services') ?>" class="nav-link">Our Services</a></li>
                    <li class="nav-item <?= session()->get('current_page') === 'contact_us' ? 'active' : '' ?>"><a href="<?= base_url('contact_us') ?>" class="nav-link">Contact Us</a></li>
                    <?php if (session()->get("user")): ?>
                        <li class="nav-item dropdown cta">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><?= session()->get("user")["name"] ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item <?= session()->get('current_page') === 'dashboard' ? 'active' : '' ?>" href="<?= base_url('client/dashboard') ?>">
                                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                                </a>
                                <a class="dropdown-item <?= session()->get('current_page') === 'profile' ? 'active' : '' ?>" href="<?= base_url('client/profile') ?>">
                                    <i class="fas fa-user mr-2"></i> Profile
                                </a>
                                <a class="dropdown-item <?= session()->get('current_page') === 'appointments' ? 'active' : '' ?>" href="<?= base_url('client/appointments') ?>">
                                    <i class="fas fa-calendar-check mr-2"></i> Appointments
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center <?= session()->get('current_page') === 'messages' ? 'active' : '' ?>" href="<?= base_url('client/messages') ?>">
                                    <div><i class="fas fa-envelope mr-2"></i> Messages</div>
                                    <span class="badge bg-danger text-white">3</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="javascript:void(0)" id="logoutBtn">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </a>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item cta"><a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#loginModal"><span>Sign In</span></a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('<?= base_url("public/dist/landing/images/bg_1.jpg") ?>');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="<?= base_url() ?>">Home</a></span> <span><?= session()->get('page_title') ?></span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}"><?= session()->get('page_description') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
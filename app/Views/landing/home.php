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
    <link rel="stylesheet" href="public/dist/landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="public/dist/landing/css/animate.css">
    <link rel="stylesheet" href="public/dist/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/dist/landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/dist/landing/css/magnific-popup.css">
    <link rel="stylesheet" href="public/dist/landing/css/ionicons.min.css">
    <link rel="stylesheet" href="public/dist/landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/dist/landing/css/jquery.timepicker.css">
    <link rel="stylesheet" href="public/dist/landing/css/flaticon.css">
    <link rel="stylesheet" href="public/dist/landing/css/icomoon.css">
    <link rel="stylesheet" href="public/dist/landing/css/style.css">
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
                    <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('about_us') ?>" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="<?= base_url('services') ?>" class="nav-link">Our Services</a></li>
                    <li class="nav-item"><a href="<?= base_url('contact_us') ?>" class="nav-link">Contact Us</a></li>
                    <?php if (session()->get("user")): ?>
                        <li class="nav-item dropdown cta">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><?= session()->get("user")["name"] ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('client/dashboard') ?>">
                                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                                </a>
                                <a class="dropdown-item" href="<?= base_url('client/profile') ?>">
                                    <i class="fas fa-user mr-2"></i> Profile
                                </a>
                                <a class="dropdown-item" href="<?= base_url('client/appointments') ?>">
                                    <i class="fas fa-calendar-check mr-2"></i> Appointments
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="<?= base_url('client/messages') ?>">
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

    <section class="home-slider owl-carousel" aria-label="DentalCare+ Main Slider">
        <!-- Slide 1 -->
        <div class="slider-item" style="background-image: url('public/dist/landing/images/bg_1.jpg');" role="group" aria-roledescription="slide" aria-label="Easy Online Booking & Care Management">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Easy Online Booking &amp; Care Management
                        </h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            DentalCare+ makes scheduling your dental visits simple and stress-free with our secure, easy-to-use system.
                        </p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <a href="#book_now_section" class="btn btn-primary px-4 py-3" role="button" aria-label="Book an appointment now">Get Started</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slider-item" style="background-image: url('public/dist/landing/images/bg_2.jpg');" role="group" aria-roledescription="slide" aria-label="Making Your Dental Visits Smooth & Convenient">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Making Your Dental Visits Smooth &amp; Convenient
                        </h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Enjoy real-time appointment scheduling, automatic reminders, easy payments, and hassle-free care every step of the way.
                        </p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <a href="#book_now_section" class="btn btn-primary px-4 py-3" role="button" aria-label="Book an appointment now">Get Started</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slider-item" style="background-image: url('public/dist/landing/images/bg_3.jpg');" role="group" aria-roledescription="slide" aria-label="Trusted Care You Can Rely On">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Trusted Care You Can Rely On
                        </h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            We’re committed to providing reliable, high-quality dental services designed with your comfort and health in mind.
                        </p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <a href="#book_now_section" class="btn btn-primary px-4 py-3" role="button" aria-label="Book an appointment now">Get Started</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" id="book_now_section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 color-1 p-4">
                    <h3 class="mb-4">Who are we?</h3>
                    <p>DentalCare+ offers trusted and affordable dental services in Can-avid, Eastern Samar. Book an appointment online today.</p>
                    <span class="phone-number">(+63) 912 345 6789</span>
                </div>
                <div class="col-md-3 color-2 p-4">
                    <h3 class="mb-4">Opening Hours</h3>
                    <p class="openinghours d-flex">
                        <span>Weekdays</span>
                        <span>8:00 - 7:00 PM</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Saturday</span>
                        <span>10:00 - 5:00 PM</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Sunday</span>
                        <span>10:00 - 4:00 PM</span>
                    </p>
                </div>
                <div class="col-md-6 color-3 p-4">
                    <h3 class="mb-2">Make an Appointment <?= !session("user") ? "<small class='text-light'>(Login Required)</small>" : "" ?></h3>

                    <form action="javascript:void(0)" class="appointment-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select class="form-control" <?= !session("user") ? "disabled" : "" ?>>
                                            <option value="" selected disabled class="text-dark">Select a Service</option>

                                            <optgroup label="General Dentistry" class="text-dark">
                                                <option value="Dental Consultation" class="text-dark">Dental Consultation</option>
                                                <option value="Oral Prophylaxis (Teeth Cleaning)" class="text-dark">Oral Prophylaxis (Teeth Cleaning)</option>
                                                <option value="Tooth Extraction" class="text-dark">Tooth Extraction</option>
                                                <option value="Tooth Filling (Pasta)" class="text-dark">Tooth Filling (Pasta)</option>
                                                <option value="Dental X-ray" class="text-dark">Dental X-ray</option>
                                            </optgroup>

                                            <optgroup label="Cosmetic Dentistry" class="text-dark">
                                                <option value="Teeth Whitening" class="text-dark">Teeth Whitening</option>
                                                <option value="Veneers" class="text-dark">Veneers</option>
                                                <option value="Tooth Crown/Bridge" class="text-dark">Tooth Crown / Bridge</option>
                                            </optgroup>

                                            <optgroup label="Orthodontics" class="text-dark">
                                                <option value="Braces Installation" class="text-dark">Braces Installation</option>
                                                <option value="Retainer Fitting" class="text-dark">Retainer Fitting</option>
                                            </optgroup>

                                            <optgroup label="Specialty Services" class="text-dark">
                                                <option value="Root Canal Treatment" class="text-dark">Root Canal Treatment</option>
                                                <option value="Dentures (Full/Partial)" class="text-dark">Dentures (Full/Partial)</option>
                                                <option value="Dental Implants" class="text-dark">Dental Implants</option>
                                                <option value="Gum Treatment (Deep Cleaning)" class="text-dark">Gum Treatment (Deep Cleaning)</option>
                                                <option value="Pediatric Dentistry (Kids)" class="text-dark">Pediatric Dentistry (Kids)</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-user"></span></div>
                                    <input type="text" class="form-control" id="appointment_name" placeholder="Name" <?= !session("user") ? "disabled" : "readonly" ?> value="<?= session("user") ? session("user")["name"] : "" ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-paper-plane"></span></div>
                                    <input type="email" class="form-control" id="appointment_email" placeholder="Email" <?= !session("user") ? "disabled" : "readonly" ?> value="<?= session("user") ? session("user")["email"] : "" ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date" <?= !session("user") ? "disabled" : "" ?>>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time" <?= !session("user") ? "disabled" : "" ?>>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-phone2"></span></div>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone" <?= !session("user") ? "disabled" : "" ?>>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary" id="make_appointment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Our Services Keep You Smiling</h2>
                    <p>At DentalCare+, we provide gentle, expert care using the latest technology to keep your smile healthy and bright.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-1"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Teeth Whitening</h3>
                            <p>Brighten your smile safely and effectively with our professional teeth whitening treatments tailored just for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Teeth Cleaning</h3>
                            <p>Maintain a healthy smile with our thorough, gentle dental cleanings designed to keep your teeth and gums fresh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-with-braces"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Quality Brackets</h3>
                            <p>We provide comfortable, high-quality orthodontic solutions to help you achieve a beautiful, confident smile.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-anesthesia"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Modern Anesthetic</h3>
                            <p>Experience pain-free dental treatments with our advanced anesthetic techniques focused on your comfort.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image: url(public/dist/landing/images/about-2.jpg);"></div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="heading-section heading-section-white mb-5 ftco-animate">
                            <h2 class="mb-2">DentalCare+ with a Personal Touch</h2>
                            <p>We believe every patient deserves personalized care delivered by experienced dentists using state-of-the-art technology.</p>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Experienced Dentists</h3>
                                <p>Our friendly dental professionals are dedicated to providing gentle and effective treatments tailored to your needs.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Advanced Technology</h3>
                                <p>We use the latest dental technologies to ensure precise diagnosis and comfortable care during every visit.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Comfortable Clinics</h3>
                                <p>Our clinic environment is designed to be welcoming and relaxing to make your dental visits stress-free.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Meet Our Experienced Dentists</h2>
                    <p>Our dental team consists of licensed, highly skilled professionals dedicated to exceptional oral healthcare. With expertise in general and specialized dentistry, they focus on your comfort and long-term dental wellness. Get to know the experts behind your confident smile.</p>
                </div>
            </div>
            <div class="row">
                <!-- Dentist 1 -->
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(public/dist/landing/images/person_5.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="javascript:void(0)">Tom Smith</a></h3>
                            <span class="position">General Dentist</span>
                            <div class="text">
                                <p>Tom has over 10 years of experience in restorative and preventive dental care. He is committed to helping patients maintain healthy, confident smiles through comprehensive treatment.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dentist 2 -->
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(public/dist/landing/images/person_6.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="javascript:void(0)">Mark Wilson</a></h3>
                            <span class="position">Orthodontist</span>
                            <div class="text">
                                <p>Mark specializes in orthodontics, offering customized braces and aligners. He helps patients achieve beautiful, well-aligned smiles with personalized care and ...</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dentist 3 -->
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(public/dist/landing/images/person_7.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="javascript:void(0)">Patrick Jacobson</a></h3>
                            <span class="position">Pediatric Dentist</span>
                            <div class="text">
                                <p>Patrick focuses on pediatric dentistry, creating a fun and comforting environment. He ensures children develop healthy oral habits for a lifetime of strong teeth and gums.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Staff 4 -->
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(public/dist/landing/images/person_8.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="javascript:void(0)">Ivan Dorchsner</a></h3>
                            <span class="position">Dental Hygienist</span>
                            <div class="text">
                                <p>Ivan is skilled in dental hygiene, providing gentle cleanings and education. He supports patients in maintaining strong teeth and healthy gums between visits.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="javascript:void(0)"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-8 ftco-animate">
                    <p>Our dedicated team works closely with you to create personalized treatment plans that promote lasting oral health and beautiful smiles.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(public/dist/landing/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 aside-stretch py-5">
                    <div class="heading-section heading-section-white ftco-animate pr-md-4">
                        <h2 class="mb-3">Our Achievements</h2>
                        <p>Providing compassionate dental care and trusted expertise to our community every day.</p>
                    </div>
                </div>
                <div class="col-md-9 py-5 pl-md-5">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="15">0</strong>
                                    <span>Qualified Dentists</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Happy Smiling Patients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="600">0</strong>
                                    <span>Patients Per Year</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Affordable Dental Packages</h2>
                    <p>Quality dental care made accessible — choose a plan that fits your needs and budget.</p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($packages as $package): ?>
                    <div class="col-md-3 ftco-animate">
                        <div class="pricing-entry pb-5 text-center">
                            <div>
                                <h3 class="mb-4"><?= esc($package['name']) ?></h3>
                                <p>
                                    <span class="price">₱<?= number_format($package['price'], 0) ?></span>
                                    <span class="per">/ <?= esc($package['unit']) ?></span>
                                </p>
                            </div>
                            <ul>
                                <?php foreach (explode("\n", $package['features']) as $feature): ?>
                                    <li><?= esc($feature) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="button text-center">
                                <a href="javascript:void(0)"
                                    class="btn btn-primary btn-outline-primary px-4 py-3 btn-book-package"
                                    data-id="<?= $package['id'] ?>"
                                    data-name="<?= esc($package['name']) ?> Package">
                                    Book Now
                                </a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Testimony</h2>
                    <span class="subheading">Our Happy Customer Says</span>
                </div>
            </div>
            <div class="row justify-content-center ftco-animate">
                <div class="col-md-8">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(public/dist/landing/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">DentalCare+ transformed my dental visits with seamless booking and friendly reminders. The staff’s warmth and professionalism made each visit stress-free and enjoyable.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(public/dist/landing/images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">As a designer, I appreciate DentalCare+’s attention to detail — from their sleek online platform to the personalized care I receive. They truly understand patient needs.</p>
                                    <p class="name">Alicia Turner</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(public/dist/landing/images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">DentalCare+ blends cutting-edge technology with compassionate care, making me confident in every smile I create as a UI designer. Highly recommend their services!</p>
                                    <p class="name">Samuel Lee</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(public/dist/landing/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">The DentalCare+ team supports my busy life as a web developer by providing flexible scheduling and expert care. Their personalized approach makes all the difference.</p>
                                    <p class="name">Karen Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(public/dist/landing/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">DentalCare+’s innovative approach and thorough care make me feel valued as a patient. Their commitment to oral health is inspiring and reassuring for my analytics work-life balance.</p>
                                    <p class="name">Michael Johnson</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.556133073096!2d125.44236388644134!3d11.995616709159993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3309130f0495af71%3A0x78fd50ec1e2ded7d!2sEastern%20Samar%20State%20University%20-%20Can-Avid%20Campus!5e0!3m2!1sen!2sph!4v1748681840619!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
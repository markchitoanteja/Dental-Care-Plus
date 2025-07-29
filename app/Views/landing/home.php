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
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
                                <!-- General -->
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fas fa-user mr-2"></i> Profile
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- Services -->
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fas fa-calendar-check mr-2"></i> Appointments
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fas fa-box mr-2"></i> Packages
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fas fa-receipt mr-2"></i> Billing
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- Communication -->
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    <div><i class="fas fa-envelope mr-2"></i> Messages</div>
                                    <span class="badge bg-danger text-white">3</span> <!-- Example unread badge -->
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- Action -->
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
                    <h3 class="mb-2">Make an Appointment</h3>

                    <form action="javascript:void(0)" class="appointment-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select class="form-control">
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
                                    <input type="text" class="form-control" id="appointment_name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-paper-plane"></span></div>
                                    <input type="email" class="form-control" id="appointment_email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-phone2"></span></div>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary">
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
                            <h3><a href="teacher-single.html">Tom Smith</a></h3>
                            <span class="position">General Dentist</span>
                            <div class="text">
                                <p>Tom has over 10 years of experience in restorative and preventive dental care. He is committed to helping patients maintain healthy, confident smiles through comprehensive treatment.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
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
                            <h3><a href="teacher-single.html">Mark Wilson</a></h3>
                            <span class="position">Orthodontist</span>
                            <div class="text">
                                <p>Mark specializes in orthodontics, offering customized braces and aligners. He helps patients achieve beautiful, well-aligned smiles with personalized care and ...</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
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
                            <h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
                            <span class="position">Pediatric Dentist</span>
                            <div class="text">
                                <p>Patrick focuses on pediatric dentistry, creating a fun and comforting environment. He ensures children develop healthy oral habits for a lifetime of strong teeth and gums.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
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
                            <h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
                            <span class="position">Dental Hygienist</span>
                            <div class="text">
                                <p>Ivan is skilled in dental hygiene, providing gentle cleanings and education. He supports patients in maintaining strong teeth and healthy gums between visits.</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
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
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Basic</h3>
                            <p><span class="price">₱800</span> <span class="per">/ visit</span></p>
                        </div>
                        <ul>
                            <li>Oral Examination</li>
                            <li>Dental Cleaning</li>
                            <li>Consultation</li>
                            <li>Fluoride Application</li>
                            <li>Dental Advice</li>
                        </ul>
                        <p class="button text-center"><a href="javascript:void(0)" class="btn btn-primary btn-outline-primary px-4 py-3">Book Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price">₱1,500</span> <span class="per">/ visit</span></p>
                        </div>
                        <ul>
                            <li>Basic Package Services</li>
                            <li>Tooth Filling (1–2 teeth)</li>
                            <li>X-ray Imaging</li>
                            <li>Gum Care Evaluation</li>
                            <li>Oral Hygiene Kit</li>
                        </ul>
                        <p class="button text-center"><a href="javascript:void(0)" class="btn btn-primary btn-outline-primary px-4 py-3">Book Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Premium</h3>
                            <p><span class="price">₱3,200</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Standard Package Services</li>
                            <li>Tooth Extraction (simple)</li>
                            <li>Teeth Whitening (1 session)</li>
                            <li>Customized Treatment Plan</li>
                            <li>Priority Scheduling</li>
                        </ul>
                        <p class="button text-center"><a href="javascript:void(0)" class="btn btn-primary btn-outline-primary px-4 py-3">Book Now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Platinum</h3>
                            <p><span class="price">₱5,500</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Premium Package Services</li>
                            <li>Tooth Implants (initial consult)</li>
                            <li>Advanced Whitening</li>
                            <li>Restorative Consultation</li>
                            <li>Follow-up Care Included</li>
                        </ul>
                        <p class="button text-center"><a href="javascript:void(0)" class="btn btn-primary btn-outline-primary px-4 py-3">Book Now</a></p>
                    </div>
                </div>
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
        const notification = <?php echo json_encode(session()->getFlashdata()); ?>;
        const user = <?php echo json_encode(session()->get("user")); ?>;
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
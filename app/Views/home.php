<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO -->
    <title>DentalCare+ | Trusted Dental Services in Can-avid, Eastern Samar</title>

    <meta name="description" content="DentalCare+ offers trusted and affordable dental services in Can-avid, Eastern Samar. Book an appointment online today.">
    <meta name="author" content="DentalCare+ Web Team">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="public/dist/home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="public/dist/home/css/animate.css">
    <link rel="stylesheet" href="public/dist/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/dist/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/dist/home/css/magnific-popup.css">
    <link rel="stylesheet" href="public/dist/home/css/ionicons.min.css">
    <link rel="stylesheet" href="public/dist/home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/dist/home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="public/dist/home/css/flaticon.css">
    <link rel="stylesheet" href="public/dist/home/css/icomoon.css">
    <link rel="stylesheet" href="public/dist/home/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Dental<span>Care+</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Our Services</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Patient Reviews</a></li>

                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= session()->get("user") ? session()->get("user")["name"] : "Patient Portal" ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                            <?php if (session()->get("user")): ?>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#profileModal">Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)" id="logoutBtn">Logout</a>
                            <?php else: ?>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">Login</a>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#registerModal">Register</a>
                            <?php endif ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="home-slider owl-carousel" aria-label="DentalCare+ Main Slider">
        <!-- Slide 1 -->
        <div class="slider-item" style="background-image: url('public/dist/home/images/bg_1.jpg');" role="group" aria-roledescription="slide" aria-label="Easy Online Booking & Care Management">
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
        <div class="slider-item" style="background-image: url('public/dist/home/images/bg_2.jpg');" role="group" aria-roledescription="slide" aria-label="Making Your Dental Visits Smooth & Convenient">
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
        <div class="slider-item" style="background-image: url('public/dist/home/images/bg_3.jpg');" role="group" aria-roledescription="slide" aria-label="Trusted Care You Can Rely On">
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
                        <span>Monday - Friday</span>
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
                                            <option value selected disabled>Select Department</option>
                                            <option value="Teeth Whitening" class="text-dark">Teeth Whitening</option>
                                            <option value="Teeth Cleaning" class="text-dark">Teeth Cleaning</option>
                                            <option value="Quality Brackets" class="text-dark">Quality Brackets</option>
                                            <option value="Modern Anesthetic" class="text-dark">Modern Anesthetic</option>
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
                <div class="col-md-6 img" style="background-image: url(public/dist/home/images/about-2.jpg);"></div>
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
                        <div class="img mb-4" style="background-image: url(public/dist/home/images/person_5.jpg);"></div>
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
                        <div class="img mb-4" style="background-image: url(public/dist/home/images/person_6.jpg);"></div>
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
                        <div class="img mb-4" style="background-image: url(public/dist/home/images/person_7.jpg);"></div>
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
                        <div class="img mb-4" style="background-image: url(public/dist/home/images/person_8.jpg);"></div>
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

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(public/dist/home/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
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
                                <div class="user-img mb-5" style="background-image: url(public/dist/home/images/person_1.jpg)">
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
                                <div class="user-img mb-5" style="background-image: url(public/dist/home/images/person_2.jpg)">
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
                                <div class="user-img mb-5" style="background-image: url(public/dist/home/images/person_3.jpg)">
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
                                <div class="user-img mb-5" style="background-image: url(public/dist/home/images/person_1.jpg)">
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
                                <div class="user-img mb-5" style="background-image: url(public/dist/home/images/person_1.jpg)">
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
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="loginForm">
                    <div class="modal-body">
                        <div class="alert alert-danger text-center d-none" id="loginError">Invalid Username or Password</div>
                        <div class="form-group">
                            <label for="loginEmail" class="mb-0">Email address</label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger px-lg-5 px-3" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-lg-5 px-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="javascript:void(0)" id="registerForm">
                    <div class="modal-body">
                        <div class="alert alert-danger text-center d-none" id="registerError">Please check your input and try again</div>
                        <div class="form-group">
                            <label for="registerName" class="mb-0">Full Name</label>
                            <input type="text" class="form-control" id="registerName" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail" class="mb-0">Email Address</label>
                            <input type="email" class="form-control" id="registerEmail" required>
                            <small class="text-danger d-none" id="errorRegisterEmail">Email already exists.</small>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword" class="mb-0">Password</label>
                            <input type="password" class="form-control" id="registerPassword" required>
                            <small class="text-danger d-none" id="errorRegisterPassword">Passwords must be at least 8 characters long and contain a mix of letters, numbers, and special characters.</small>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="mb-0">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                            <small class="text-danger d-none" id="errorConfirmPassword">Passwords do not match.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger px-lg-5 px-3" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success px-lg-5 px-3">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="public/dist/home/js/jquery.min.js"></script>
    <script src="public/dist/home/js/jquery-migrate-3.0.1.min.js?v=1.0"></script>
    <script src="public/dist/home/js/popper.min.js"></script>
    <script src="public/dist/home/js/bootstrap.min.js"></script>
    <script src="public/dist/home/js/jquery.easing.1.3.js"></script>
    <script src="public/dist/home/js/jquery.waypoints.min.js"></script>
    <script src="public/dist/home/js/jquery.stellar.min.js"></script>
    <script src="public/dist/home/js/owl.carousel.min.js"></script>
    <script src="public/dist/home/js/jquery.magnific-popup.min.js"></script>
    <script src="public/dist/home/js/jquery.animateNumber.min.js"></script>
    <script src="public/dist/home/js/bootstrap-datepicker.js"></script>
    <script src="public/dist/home/js/jquery.timepicker.min.js"></script>
    <script src="public/dist/home/js/scrollax.min.js"></script>
    <script src="public/dist/home/js/main.js?v=1.2"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            const notification = <?php echo json_encode(session()->getFlashdata()); ?>;
            const user = <?php echo json_encode(session()->get("user")); ?>;

            if (notification && Object.keys(notification).length > 0) {
                displayPopupMessage(notification.message, notification.type);
            }

            $('a[href="#book_now_section"]').on('click', function(e) {
                e.preventDefault();
                const offset = 100;
                const target = $($(this).attr('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - offset
                    }, 800);
                }
            });

            $('.appointment-form').on('submit', function(e) {
                e.preventDefault();

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

                // Parse time to 24hr format for easier comparison
                let time = timeStr.trim().toUpperCase();
                if (time.includes('AM') || time.includes('PM')) {
                    let [h, m] = time.replace(/AM|PM/, '').trim().split(':');
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

                // Day 0 = Sunday
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

            $('#loginForm').on('submit', function(e) {
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
                    success: function(response) {
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
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            });

            $('#registerForm').on('submit', function(e) {
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
                    success: function(response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            reset_form_loading(formId);

                            $('#errorRegisterEmail').text('Email already exists.').removeClass('d-none');
                        }
                    },
                    error: function(_, _, error) {
                        console.error(error);
                        reset_form_loading(formId);
                        $('#registerError').text('An unexpected error occurred. Please try again.').removeClass('d-none');
                    }
                });
            });

            // Real-time validation error reset
            $('#registerEmail').on('input', function() {
                $('#errorRegisterEmail').addClass('d-none');
            });

            $('#registerPassword').on('input', function() {
                $('#errorRegisterPassword').addClass('d-none');
            });

            $('#confirmPassword').on('input', function() {
                $('#errorConfirmPassword').addClass('d-none');
            });

            $('#registerName').on('input', function() {
                $('#registerError').addClass('d-none'); // If you want general errors hidden too
            });

            $("#logoutBtn").click(function() {
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
                            success: function() {
                                location.reload();
                            },
                            error: function(_, _, error) {
                                console.error(error);
                            }
                        });
                    }
                });
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
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditics</title>

    <!-- libraries CSS -->
    <link rel="stylesheet" href="assets/icon/flaticon_err.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/animate-wow/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/slim-select/slimselect.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index.php">
                    <img src="assets/img/ivy logo.png" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

        <!-- sidebar content -->
        <div>
            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">About Us</span>
                <p class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odio eveniet ex dicta beatae, repellat voluptatibus ratione alias modi maxime, quaerat sed iste nihil molestiae numquam unde fuga qui velit!</p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Location</span>
                <p class="descr"><i class="flaticon-pin"></i><span>123 Main Street, New York, NY 10012</span></p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Contact Us</span>
                <p class="descr"><i class="flaticon-call"></i><a href="tel:1234567890">123-456-7890</a></p>
            </div>
        </div>

        <!-- sidebar footer -->
        <div class="ul-sidebar-footer">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="#"><i class="flaticon-facebook"></i></a>
                <a href="#"><i class="flaticon-twitter"></i></a>
                <a href="#"><i class="flaticon-instagram"></i></a>
                <a href="#"><i class="flaticon-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR SECTION END -->


    <!-- SEARCH MODAL SECTION START -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- SEARCH MODAL SECTION END -->


    <!-- HEADER SECTION START -->
    <header class="ul-header ul-2-header">
        <div class="ul-header-top ul-2-header-top">
            <div class="ul-2-header-container">
                <div class="row row-cols-xxl-3 align-items-center gy-2">
                    <div class="col-xxl col-lg-3 col-sm-5 col-6 col-xxs-12">
                        <div class="ul-header-top-infos">
                            <span class="ul-header-top-info">
                                <i class="flaticon-clock"></i>
                                <span class="txt">
                                    <span class="value">Mon - Fri 8.00 am - 6.00 pm</span>
                                </span>
                            </span>
                        </div>
                    </div>

                    <!-- header top right -->
                    <div class="col-xxl col-5 d-none d-lg-block">
                        <div class="ul-header-top-infos justify-content-center">
                            <span class="ul-header-top-info">Welcome To IVORY DENTAL - Vidyaranyapura, Bangalore</span>
                        </div>
                    </div>

                    <div class="col-xxl col-lg-4 col-sm-7 col-6 d-xxs-none">
                        <div class="ul-header-top-infos justify-content-end">
                            <span class="ul-header-top-info d-none d-sm-inline-flex">
                                <i class="flaticon-envelope"></i>
                                <span class="txt">
                                    <a href="mailto:info@example.com" class="value">info@example.com</a>
                                </span>
                            </span>
                            <span class="ul-header-top-info">
                                <i class="flaticon-call"></i>
                                <span class="txt">
                                    <a href="tel:+208-6666-0112" class="value">+208-6666-0112</a>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-header-bottom ul-2-header-bottom ul-2-header-container to-be-sticky">
            <div class="ul-header-bottom-content">
                <!-- header bottom left -->
                <!-- <div class="col-2"> -->
                <div class="ul-2-header-bottom-logo-container">
                    <a href="index.php"><img src="assets/img/ivy logo.png" alt="logo"></a>
                </div>
                <!-- </div> -->

                <!-- header bottom center -->
                <!-- <div class="col-8"> -->
                <div class="ul-2-header-bottom-center">
                    <div class="ul-header-nav-wrapper">
                        <div class="to-go-to-sidebar-in-mobile">
                            <nav class="ul-header-nav">
                                 
                                <a href="index.php">Home</a>
                                <a href="about.php">About</a>
                                <div class="has-sub-menu">
                                    <a role="button">Services</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="services-2.php">Services Layout 2</a></li>
                                            <li><a href="service-details.php">Service Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="has-sub-menu">
                                    <a role="button">Pages</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="case-studies.php">Case Studies</a></li>
                                            <li><a href="case-study-details.php">Case Study Details</a></li>
                                            <li><a href="team.php">Team</a></li>
                                            <li><a href="team-details.php">Team Member Details</a></li>
                                            <li><a href="testimonials.php">Testimonials</a></li>
                                            <li><a href="appointment.php">Appoinment</a></li>
                                            <li><a href="404.php">404</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="blog.php">Blogs</a>
 
                                <a href="contact.php">Contact</a>
                            </nav>
                        </div>
                    </div>
                    <a href="appointment.php" class="ul-btn d-sm-inline-flex d-none">BOOK A APPOINTMENT <i class="flaticon-arrow-up-right"></i></a>
                </div>
                <!-- </div> -->

                <!-- header bottom right -->
                <!-- <div class="col-2"> -->
                <div class="ul-2-header-bottom-right">
                    
                    <button class="ul-header-sidebar-opener d-inline-flex"><i class="flaticon-menu"></i></button>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->

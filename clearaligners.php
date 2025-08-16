<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditics</title>

    <!-- libraries CSS -->
    <!-- <link rel="stylesheet" href="assets/icon/flaticon_digicom.css"> -->
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
                <a href="index.html">
                    <img src="assets/img/logo.svg" alt="logo" class="logo">
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
                    <div class="col-xxl col-sm col-12">
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
                            <span class="ul-header-top-info">Welcome Mediket hospital and doctors appoinment services</span>
                        </div>
                    </div>

                    <div class="col-xxl col-lg-4 col-sm col-12">
                        <div class="ul-header-top-infos justify-content-sm-end justify-content-center">
                            <span class="ul-header-top-info">
                                <span class="txt">
                                    <a href="mailto:info@example.com" class="value"><i class="flaticon-envelope"></i> info@example.com</a>
                                </span>
                            </span>
                            <span class="ul-header-top-info">
                                <span class="txt">
                                    <a href="tel:+208-6666-0112" class="value"><i class="flaticon-call"></i> +208-6666-0112</a>
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
                    <a href="index.html"><img src="assets/img/logo-white-2.svg" alt="logo"></a>
                </div>
                <!-- </div> -->

                <!-- header bottom center -->
                <!-- <div class="col-8"> -->
                <div class="ul-2-header-bottom-center">
                    <div class="ul-header-nav-wrapper">
                        <div class="to-go-to-sidebar-in-mobile">
                            <nav class="ul-header-nav">
                                <div class="has-sub-menu active">
                                    <a role="button">Home</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="about.html">About</a>
                                <div class="has-sub-menu">
                                    <a role="button">Services</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-2.html">Services Layout 2</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="has-sub-menu">
                                    <a role="button">Pages</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="case-studies.html">Case Studies</a></li>
                                            <li><a href="case-study-details.html">Case Study Details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Member Details</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="appointment.html">Appoinment</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="has-sub-menu">
                                    <a role="button">Blog</a>

                                    <div class="ul-header-submenu">
                                        <ul>
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="blog-2.html">Blogs Layout 2</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="contact.html">Contact</a>
                            </nav>
                        </div>
                    </div>
                    <a href="appointment.html" class="ul-btn d-sm-inline-flex d-none">BOOK A APPOINTMENT <i class="flaticon-arrow-up-right"></i></a>
                </div>
                <!-- </div> -->

                <!-- header bottom right -->
                <!-- <div class="col-2"> -->
                <div class="ul-2-header-bottom-right">
                    <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                    <button class="ul-header-sidebar-opener d-inline-flex"><i class="flaticon-menu"></i></button>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->


    <main>
        <!-- BREADCRUMBS SECTION START -->
        <section class="ul-breadcrumb">
            <div class="ul-2-container">
                <h1 class="ul-breadcrumb-title">Service Details</h1>

                <ul class="ul-breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li class="separator"><i class="flaticon-right-arrow"></i></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </section>
        <!-- BREADCRUMBS SECTION END -->

        <!-- SERVICE DETAILS SECTION START -->
        <section class="ul-service-details ul-section-spacing">
            <div class="ul-container">
                <div class="row g-xl-5 g-4">
                    <div class="col-lg-8 col-md-7">
                        <div>
                            <div class="ul-service-details-img">
                                <img src="assets/img/service-details-img.jpg" alt="Image">
                            </div>
                            <div class="ul-service-details-txt">
                                <h2 class="ul-service-details-title">Clear aligners </h2>
                                <p class="ul-service-details-descr">Clear aligners are transparent, removable trays designed to gradually move your teeth into proper alignment. Unlike traditional braces, they are nearly invisible and comfortable to wear, making them a popular choice for adults and teens. They allow you to eat, brush, and floss without restrictions while improving your smile .</p>
                                <!-- <blockquote>This blog post hits the mark perfectly for our target audience — busy professionals who care about their health but struggle with time. <span class="name"> — John Doe</span></blockquote> -->
                                <div class="ul-service-details-inner-block inner-block-1">



                                    <div class="ul-service-details-inner-block">
                                        <h3 class="ul-service-details-inner-title">Key Features:</h3>
                                        <ul>
                                            <li><span class="title">Invisible Braces :</span> <span class="value">Nearly invisible alternative to metal braces.</span></li>
                                            <li><span class="title">Comfort & Convenience :</span> <span class="value">Smooth, removable, and easy to wear.</span></li>
                                            <li><span class="title">Gradual Correction :</span> <span class="value">Aligns teeth step by step with trays.</span></li>
                                            <li><span class="title">Oral Hygiene Friendly:</span> <span class="value">Easy to brush and floss without hassle.</span></li>

                                            <!-- <li><span class="title">Long-lasting solutionRestores function and prevents extraction</span></li> -->
                                            <!-- <li><span class="title">Mental Wellness Support:</span> <span class="value">Gain tools to improve focus, mood, and overall life satisfaction.</span></li> -->
                                        </ul>
                                    </div>




                                    <!-- <div>
                                        <h3 class="ul-service-details-inner-title">What We Offer:</h3>
                                        <ul>
                                            <li>One-on-one virtual sessions with certified counselors</li>
                                            <li>Stress and anxiety management techniques</li>
                                            <li>Sleep improvement & energy-boosting strategies</li>
                                            <li>Personalized nutrition and wellness plans</li>
                                            <li>Habit-building for a healthier, more balanced life</li>
                                            <li>Confidential, judgment-free care</li>
                                        </ul>
                                    </div> -->

                                    <div class="ul-service-details-inner-block-img">
                                        <img src="assets/img/service-details-inner.jpg" alt="Image">
                                    </div>
                                </div>

                                <!-- <div class="ul-service-details-inner-block">
                                    <h3 class="ul-service-details-inner-title">Key Features:</h3>
                                    <ul>
                                        <li><span class="title">Stress Reduction Coaching:</span> <span class="value">Learn to manage pressure burnout, and daily anxiety with proven techniques</span></li>
                                        <li><span class="title">Personalized Nutrition & Wellness Plans:</span> <span class="value">Build healthier routines that support productivity and rest.</span></li>
                                        <li><span class="title">Lifestyle Planning:</span> <span class="value">Create sustainable habits for nutrition, exercise, and sleep.</span></li>
                                        <li><span class="title">One-on-One Counseling:</span> <span class="value">Talk to licensed professionals in a private, secure online setting.</span></li>
                                        <li><span class="title">Mental Wellness Support:</span> <span class="value">Gain tools to improve focus, mood, and overall life satisfaction.</span></li>
                                    </ul>
                                </div> -->

                                <div class="ul-service-details-inner-block">
                                    <h3 class="ul-service-details-inner-title">Why It Matters:</h3>
                                    <p>Crooked or misaligned teeth affect not only your smile but also your oral health. Clear aligners provide a modern, comfortable, and effective way to achieve a perfectly aligned smile without the hassle of traditional braces.</p>
                                    <div class="ul-accordion ul-service-details-faq">
                                      <!--   <div class="ul-single-accordion-item">
                                            <div class="ul-single-accordion-item__header">
                                                <div class="left">
                                                    <h3 class="ul-single-accordion-item__title">Do I need a diagnosis to book a session?</h3>
                                                </div>
                                                <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                            </div>

                                            <div class="ul-single-accordion-item__body">
                                                <p>Untreated tooth infections can spread, cause severe pain, and even lead to tooth loss or health complications. Root canal treatment not only saves your tooth but also protects your overall oral health, allowing you to eat, speak, and smile confidently without discomfort.</p>
                                            </div>
                                        </div>

                                        <div class="ul-single-accordion-item open">
                                            <div class="ul-single-accordion-item__header">
                                                <div class="left">
                                                    <h3 class="ul-single-accordion-item__title">Why Join Us as a Volunteer?</h3>
                                                </div>
                                                <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                            </div>

                                            <div class="ul-single-accordion-item__body">
                                                <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the. E-learning is suitable for students, professionals, and anyone interested.</p>
                                            </div>
                                        </div>

                                        <div class="ul-single-accordion-item">
                                            <div class="ul-single-accordion-item__header">
                                                <div class="left">
                                                    <h3 class="ul-single-accordion-item__title">Be Part of a Community</h3>
                                                </div>
                                                <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                            </div>

                                            <div class="ul-single-accordion-item__body">
                                                <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae consequat Juisque eget congue velit in cursus leo sodales the turpis euismod quis sapien euismod quis sapien the. E-learning is suitable for students, professionals, and anyone interested.</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <div class="ul-service-details-sidebar">
                            <div class="ul-service-details-sidebar-widget">
                                <span class="ul-service-details-sidebar-widget-title">Our Services</span>
                                <ul class="ul-service-details-sidebar-links">
                                    <li><a href="service-details.html" class="active">General Health Consultation <i class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Chronic Disease Management <i class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Online Video Consultation <i class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Preventive Health Checkups <i class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Women's & Men's Health <i class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Family Health Services <i class="flaticon-arrow-up-right"></i></a></li>
                                </ul>
                            </div>

                            <!-- call to action card -->
                            <div class="ul-service-details-sidebar-widget ul-service-details-sidebar-cta">
                                <span class="ul-service-details-sidebar-widget-title">Need more info?</span>
                                <div class="ul-service-details-sidebar-cta-content">
                                    <p class="contact-info">461, HMT Layout 3rd Block, Vidyaranyapura, Bengaluru, Karnataka 560097</p>
                                    <span class="contact-info number"><a href="tel:+1890123456">+91 7760605222</a></span>
                                    <p class="contact-info"><a href="mailto:support@example.com">support@example.com</a></p>
                                    <a href="contact.html" class="ul-btn">Contact Us <i class="flaticon-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICE DETAILS SECTION END -->
    </main>

    <!-- FOOTER SECTION START -->
    <footer class="ul-footer ul-2-footer">
        <div class="ul-2-container">
            <!-- footer top -->
            <div class="ul-footer-top ul-section-spacing">
                <div class="ul-footer-top-wrapper wow animate__fadeInUp">
                    <div class="ul-footer-about ul-2-footer-about">
                        <a href="index.html" class="logo-wrapper"><img src="assets/img/logo-white.svg" alt="logo"></a>
                        <p class="ul-footer-about-txt">It is a long established fact that a reader will be distracted the road readable content of a page when looking at layout. </p>

                        <div class="ul-2-footer-payment-methods-wrapper">
                            <span class="title">Payment Parners:</span>
                            <div class="ul-footer-bottom-payment-methods justify-content-start">
                                <img src="assets/img/payment-method-1.png" alt="Payment Method Logo">
                                <img src="assets/img/payment-method-2.png" alt="Payment Method Logo">
                                <img src="assets/img/payment-method-3.png" alt="Payment Method Logo">
                                <img src="assets/img/payment-method-4.png" alt="Payment Method Logo">
                                <img src="assets/img/payment-method-5.png" alt="Payment Method Logo">
                            </div>
                        </div>
                    </div>

                    <div class="ul-footer-widget">
                        <h3 class="ul-footer-widget-title">Quick Links</h3>

                        <div class="ul-footer-widget-links">
                            <a href="service-details.html">General Health Check-Ups</a>
                            <a href="service-details.html">Stress & Lifestyle Counseling</a>
                            <a href="service-details.html">Vaccinations & Immunizations</a>
                            <a href="service-details.html">Referral to Specialists</a>
                        </div>
                    </div>

                    <div class="ul-footer-widget ul-2-footer-newsletter-widget">
                        <h3 class="ul-footer-widget-title">Join The Newsletter</h3>
                        <p class="ul-2-footer-newsletter-widget-descr">Want to be notified about our services. Just sign up and we'll send you a notification by email.</p>

                        <form action="#" class="ul-footer-nwsltr-form">
                            <div class="top">
                                <input type="email" name="email" id="nwsltr-email" placeholder="Your Email Address" class="ul-nwsltr-input">
                                <button type="submit">SUBSCRIBE <i class="flaticon-arrow-up-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- footer bottom -->
            <div class="ul-footer-bottom">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 align-items-center gy-4">
                    <div class="col order-1">
                        <p class="copyright-txt">&copy; <span class="colored">Meditics</span>
                            <script>
                                document.write(new Date().getFullYear())
                            </script>. All Rights Reserved.
                        </p>
                    </div>

                    <div class="col-lg col-md-12  order-3 order-lg-2">
                        <div class="ul-footer-socials justify-content-center mt-0">
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-youtube"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                        </div>
                    </div>

                    <!-- links -->
                    <div class="col order-2 order-lg-3">
                        <div class="ul-footer-bottom-links">
                            <a href="#">Terms of use</a>
                            <a href="#">Privacy Environmental Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-2-footer-vectors">
            <img src="assets/img/footer-2-vector.svg" alt="vector" class="vector-1">
        </div>
    </footer>
    <!-- FOOTER SECTION END -->

    <!-- libraries JS -->
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/splide/splide.min.js"></script>
    <script src="assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/animate-wow/wow.min.js"></script>
    <script src="assets/vendor/fslightbox/fslightbox.js"></script>
    <script src="assets/vendor/slim-select/slimselect.min.js"></script>


    <!-- custom JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/progressbar.js"></script>

</body>
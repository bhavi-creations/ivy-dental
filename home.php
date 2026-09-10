<?php include('header.php'); ?>




<main>

    <!-- <section class="only_first">
        <video id="myVideo" width="100%" height="auto" autoplay muted loop playsinline preload="none" poster="assets/img/banner-2-img-11.jpg">
            <source data-src="./assets/img/service/ivy_dental_mainvido.mp4" type="video/mp4">
            <source data-src="./assets/img/service/ivy_dental_mainvido.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </section> -->

<!-- 
    <section class="only_first">
        <div class="video-container">
            <iframe
                src="https://www.youtube.com/embed/MyAXveo6es0?si=JvWvVjdBmsizUEMl"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen>
            </iframe>
        </div>
    </section>


    <style>
        .only_first {
            width: 100%;
            /* min-height: 100vh; */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background: #000;
        }

        @media (min-width:768px) {
            .only_first {
                /* width: 100%; */
                min-height: 50vh;
            }
        }

        @media (max-width:768px) {
            .only_first {
                /* width: 100%; */
                min-height: 25vh;
            }
        }

        .video-container {
            width: 100%;
            max-width: 2000px;
            aspect-ratio: 16 / 9;
            position: relative;
        }

        .video-container iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style> -->

    <section class="only_first">
    <div class="video-container">
        <iframe
            src="https://www.youtube.com/embed/MyAXveo6es0?autoplay=1&mute=1&si=JvWvVjdBmsizUEMl"
            title="YouTube video player"
            frameborder="0"
            allow="autoplay; encrypted-media; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
        </iframe>
    </div>
</section>

<style>
    .only_first {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background: #000;
    }

    @media (min-width: 768px) {
        .only_first {
            min-height: 50vh;
        }
    }

    @media (max-width: 768px) {
        .only_first {
            min-height: 25vh;
        }
    }

    .video-container {
        width: 100%;
        max-width: 2000px;
        aspect-ratio: 16 / 9;
        position: relative;
    }

    .video-container iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>



    <!-- <section class="only_first" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
        <iframe
            style="position: absolute; top: 50%; left: 50%; width: 100vw; height: 100vh; transform: translate(-50%, -50%) scale(1.3); pointer-events: none;"
            src="https://www.youtube.com/embed/9cQ8rPChIC4?si=QD6VQJCB_u-Uius-"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </section> -->


    <!-- <section class="only_first">
        <iframe
            width="100%"
            height="500"
            src="https://www.youtube.com/embed/dbrG6vuC7t0?si=wiqlldAa0Wp7bkYJ1"
            title="YouTube video player"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </section> -->

    <!-- <section class="only_first" style="position: relative; width: 100%; height: 500px; overflow: hidden;">
        <iframe
            style="position: absolute; top: -60px; left: 0; width: 100%; height: calc(100% + 60px); border: none;"
            src="https://www.youtube.com/embed/dbrG6vuC7t0?si=wiqlldAa0Wp7bkYJ1"
            title="YouTube video player"
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </section> -->




    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const video = document.getElementById('myVideo');
            const unmuteButton = document.getElementById('unmuteButton');
            const loadHomeVideo = () => {
                if (!video || video.dataset.loaded === 'true') return;
                video.querySelectorAll('source[data-src]').forEach((source) => {
                    source.src = source.dataset.src;
                });
                video.dataset.loaded = 'true';
                video.load();
                video.play().catch(() => {});
            };

            if ('requestIdleCallback' in window) {
                requestIdleCallback(loadHomeVideo, {
                    timeout: 1800
                });
            } else {
                window.addEventListener('load', loadHomeVideo, {
                    once: true
                });
            }

            // Function to unmute and play the video
            if (unmuteButton) {
                unmuteButton.addEventListener('click', () => {
                    loadHomeVideo();
                    video.muted = false; // Unmute the video
                    video.play(); // Play the video
                    unmuteButton.style.display = 'none'; // Hide the unmute button
                });
            }
        });
    </script>


    <!-- BANNER SECTION START -->
    <!-- <section class="ul-2-banner">
        <div class="ul-2-banner-container">
            <div class="row align-items-end">
                banner txt
                <div class=" col-md-6 ">
                    <div class="ul-2-banner-txt">
                        <span class="ul-2-banner-sub-title ul-section-sub-title ul-2-section-sub-title">ORAL HEALTH TO OVERALL HEALTH</span>
                        <h1 style="font-size: 40px;" class="ul-2-banner-title">Best Dental Clinic in Vidyaranyapura, Bangalore</h1>
                        <p class="ul-2-banner-descr ">Our Dental Hospital places your smile at the heart of everything we do.
                            With advanced technology and gentle care, we deliver complete dental solutions.
                            From preventive check-ups to cosmetic and restorative treatments, we cover it all.
                            Our expert team ensures safe, comfortable, and long-lasting results every time.</p>

                        <p class="ul-2-banner-descr ">At Ivy (Ivory) Dental, we believe every smile deserves expert care, comfort, and confidence. Located in Vidyaranyapura, Bangalore, our dental clinic offers advanced treatments for tooth pain, missing teeth, smile correction, gum problems, teeth whitening, dental implants, root canal treatment, braces, and clear aligners — all under one roof.</p>
                        <p class="ul-2-banner-descr ">With experienced dental specialists, modern technology, and patient-friendly care, we help children, adults, and senior patients achieve healthy and confident smiles with safe and comfortable treatment.</p>
                        <p class="ul-2-banner-descr "> Whether you need a routine dental check-up or complete smile makeover, our team is committed to delivering personalized care with long-lasting results.</p>


                        <p class="ul-2-banner-descr">We connect you with experienced dentists and oral health professionals who care about your smile as much as you do. From routine check-ups and cleanings to advanced cosmetic and restorative treatments, we make dental care easy, comfortable, and reliable.</p>
                        <a href="about-ivy-dental-hospital.php" class="ul-btn">Discover More <i class="flaticon-arrow-up-right"></i></a>
                    </div>





                </div>

                banner image
                <div class="col-md-6 ">
                    <div class="ul-2-banner-imgs indes_secong_section">
                        <img src="assets/img/g7.png" alt="Image" class="img-1 d-none d-md-block">
                        <img src="assets/img/banner-2-img-2.png" alt="Image" class="img-2">



                    </div>
                </div>
            </div>


        </div>


        banner vectors
        <div class="ul-2-banner-vectors  ">
            <img src="assets/img/banner-2-vector-1.svg" alt="vector" class="vector-1">
            <img src="assets/img/banner-2-vector-2.svg" alt="vector" class="vector-2">
            <img src="assets/img/banner-2-vector-3.svg" alt="vector" class="vector-3">
            <img src="assets/img/banner-2-vector-4.svg" alt="vector" class="vector-4">
            <img src="assets/img/banner-2-vector-5.svg" alt="vector" class="vector-5">
        </div>











        banner socials
        <div class="ul-2-banner-socials ul-banner-socials index_page_socialmedia">
            <a href="https://www.facebook.com/Ivydentalbengaluru/" target="_blank"><i class="flaticon-facebook"></i></a>
            <a href="#"><i class="flaticon-twitter"></i></a>
            <a href=" https://www.instagram.com/ivydentalclinicbangalore" target="_blank"><i class="flaticon-instagram"></i></a>
            <a href=" https://www.youtube.com/@ivy.dental.bengaluru " target="_blank"><i class="flaticon-youtube"></i></a>
            <a href="https://www.quora.com/profile/Dr-Chiranjeevi-Reddy-MDS" target="_blank"><i class="bi bi-quora"></i></a>
            <a href="https://www.linkedin.com/company/108682925/admin/dashboard/" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href=" https://in.pinterest.com/ivorydentalbangalore/" target="_blank"><i class="bi bi-pinterest"></i></a>

        </div>
    </section>
    BANNER SECTION END -->



    <!-- ==========================================================
         INDEX FIRST SECTION START new stylings
    =========================================================== -->

    <section class="index_first_section">

        <!-- Premium Background Decorations -->
        <div class="index-first-shade index-first-shade-left"></div>
        <div class="index-first-shade index-first-shade-center"></div>
        <div class="index-first-curve-decoration index-first-curve-left"></div>
        <div class="index-first-curve-decoration index-first-curve-right"></div>
        <div class="index-first-soft-arc"></div>
        <div class="index-first-top-pill"></div>


        <div class="index-first-container">


            <!-- ================= TOP HEADER ================= -->

            <!-- <div class="index-first-top">

                <a href="index.php" class="index-first-logo">

                    <div class="index-first-logo-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>

                    <div class="index-first-logo-content">

                        <h2 class="index-first-logo-title">
                            IVY DENTAL
                        </h2>

                        <span class="index-first-logo-subtitle">
                            Healthier Smiles Brighter Tomorrows
                        </span>

                    </div>

                </a>


                <div class="index-first-top-right">

                    <span>Care</span>

                    <i></i>

                    <span>Comfort</span>

                    <i></i>

                    <span>Confidence</span>

                </div>

            </div> -->


            <!-- ================= HERO ================= -->

            <div class="index-first-main">

                <div class="container-fluid p-0">

                    <div class="row align-items-center g-lg-5">


                        <!-- ==================================================
                             LEFT CONTENT
                        =================================================== -->

                        <div class="col-lg-7">

                            <div class="index-first-content">


                                <!-- EYEBROW -->

                                <div class="index-first-eyebrow">

                                    <span>
                                        Oral Health To Overall Health
                                    </span>

                                    <div class="index-first-eyebrow-line"></div>

                                </div>


                                <!-- HEADING -->

                                <h1 class="index-first-heading">

                                    Best Dental Clinic in

                                    <br>

                                    <span class="gold-text">
                                        Vidyaranyapura, Bangalore
                                    </span>

                                </h1>


                                <!-- DESCRIPTION -->

                                <p class="index-first-description">

                                    At Ivy (Ivory) Dental, we believe every smile
                                    deserves expert care, comfort, and confidence.
                                    Located in Vidyaranyapura, Bangalore, we offer
                                    advanced treatments for tooth pain, missing teeth,
                                    smile correction, gum problems, teeth whitening,
                                    dental implants, root canal treatment, braces,
                                    and clear aligners — all under one roof.

                                </p>


                                <div class="index-first-small-line"></div>


                                <!-- ======================================
                                     FEATURES
                                ======================================= -->

                                <div class="index-first-features">


                                    <!-- Feature 1 -->

                                    <div class="index-first-feature">

                                        <div class="index-first-feature-icon">

                                            <i class="bi bi-people"></i>

                                        </div>

                                        <h4 class="index-first-feature-title">
                                            For All Ages
                                        </h4>

                                        <p class="index-first-feature-subtitle">
                                            Children To Seniors
                                        </p>

                                    </div>


                                    <!-- Feature 2 -->

                                    <div class="index-first-feature">

                                        <div class="index-first-feature-icon">

                                            <i class="bi bi-shield-plus"></i>

                                        </div>

                                        <h4 class="index-first-feature-title">
                                            Advanced Care
                                        </h4>

                                        <p class="index-first-feature-subtitle">
                                            Modern Technology
                                        </p>

                                    </div>


                                    <!-- Feature 3 -->

                                    <div class="index-first-feature">

                                        <div class="index-first-feature-icon">

                                            <i class="bi bi-shield-check"></i>

                                        </div>

                                        <h4 class="index-first-feature-title">
                                            Safe & Comfortable
                                        </h4>

                                        <p class="index-first-feature-subtitle">
                                            Patient-First Approach
                                        </p>

                                    </div>


                                    <!-- Feature 4 -->

                                    <div class="index-first-feature">

                                        <div class="index-first-feature-icon">

                                            <i class="bi bi-feather"></i>

                                        </div>

                                        <h4 class="index-first-feature-title">
                                            Long-Lasting Results
                                        </h4>

                                        <p class="index-first-feature-subtitle">
                                            Healthier, Brighter Smiles
                                        </p>

                                    </div>


                                </div>


                                <!-- ======================================
                                     BOTTOM CTA
                                ======================================= -->

                                <div class="index-first-bottom">

                                    <a href="appointment-ivy-dental-hospital.php"
                                        class="index-first-appointment">

                                        <span>
                                            Book Your Appointment
                                        </span>

                                        <span class="index-first-btn-circle">

                                            <i class="bi bi-chevron-right"></i>

                                        </span>

                                    </a>


                                    <div class="index-first-bottom-caption">

                                        A Healthier Smile

                                        <br>

                                        A Brighter You

                                    </div>

                                </div>


                            </div>

                        </div>


                        <!-- ==================================================
                             RIGHT IMAGE
                        =================================================== -->

                        <div class="col-lg-5">

                            <div class="index-first-visual">


                                <!-- Large faded tooth icon exactly as a background symbol -->

                                <div class="index-first-tooth-outline" aria-hidden="true">

                                    <i class="fa-solid fa-tooth"></i>

                                </div>


                                <!-- IMAGE FRAME -->

                                <div class="index-first-image-frame">


                                    <div class="index-first-image-holder">

                                        <!--
                                          Replace with your actual Ivy Dental image
                                        --> <img src="assets/img/g7.png" alt="Image" class="img-1 d-block d-md-block">

                                        <!-- <img src="assets/img/ivy-dental-clinic.jpg"
                                            alt="Ivy Dental Clinic"> -->

                                    </div>


                                    <!-- Circular Badge -->

                                    <div class="index-first-image-badge">

                                        <div class="index-first-badge-content">

                                            Expert

                                            <br>

                                            Care For

                                            <br>

                                            Brighter

                                            <br>

                                            Tomorrows

                                            <div class="index-first-badge-line"></div>

                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

        <!-- ==========================================================
             RIGHT SIDE PANEL - REFERENCE STYLE
        =========================================================== -->
        <aside class="index-first-side-panel" aria-label="Ivy Dental social links">

            <div class="index-first-quote d-block d-md-none">
                <!-- More
                <br>
                Than
                <br>
                Just Smiles -->
                    Keep Smiling Stay Confident.
            </div>

            <div class="index-first-socials">

                <a href="https://www.facebook.com/Ivydentalbengaluru/" target="_blank"><i class="flaticon-facebook"></i></a>
                <a href=" https://www.instagram.com/ivydentalclinicbangalore" target="_blank"><i class="flaticon-instagram"></i></a>
                <a href=" https://www.youtube.com/@ivy.dental.bengaluru " target="_blank"><i class="flaticon-youtube"></i></a>

                <a href="https://www.linkedin.com/company/108682925/admin/dashboard/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href=" https://in.pinterest.com/ivorydentalbangalore/" target="_blank"><i class="bi bi-pinterest"></i></a>

            </div>

            <div class="index-first-purpose">
                Your
                <br>
                Smile
                <br>
                Our Purpose
            </div>

        </aside>

    </section>

    <!-- ==========================================================
         INDEX FIRST SECTION END
    =========================================================== -->


    <!-- TICKER TEXT AREA START -->
    <!-- <div class="ul-ticker">
        <div class="splide ul-ticker-slider" aria-label="Ticker Slider">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <p>Root Canal</p>
                    </li>
                    <li class="splide__slide">
                        <p>Dental Braces</p>
                    </li>
                    single slide
                    <li class="splide__slide">
                        <p>Dental implants</p>
                    </li>
                    single slide
                    <li class="splide__slide">
                        <p>Crowns & Bridges</p>
                    </li>
                    single slide
                    <li class="splide__slide">
                        <p>Teeth Filling</p>
                    </li>
                    <li class="splide__slide">
                        <p>Dentures</p>
                    </li>
                    <li class="splide__slide">
                        <p>Teeth Scaling</p>
                    </li>
                    <li class="splide__slide">
                        <p>Tooth Extraction</p>
                    </li>
                    <li class="splide__slide">
                        <p>Clear Aligners</p>
                    </li>
                    <li class="splide__slide">
                        <p>Teeth Whitening</p>
                    </li>
                    <li class="splide__slide">
                        <p>Smile Makeover</p>
                    </li>
                    <li class="splide__slide">
                        <p>Full Mouth Rehabilitation</p>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- TICKER TEXT AREA END -->
     <div class="ul-ticker-wrapper">
    <div class="ul-ticker-track">
        
        <!-- Original 4 Items -->
        <div class="ticker-item">
            <img src="./assets/img/root-canal.png" alt="root-canal">
            <span>Root Canal</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/braces.png" alt="Braces">
            <span>Dental Braces</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/dental_implants1.png" alt="Implants">
            <span>Dental implants</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/dental-bridge.png" alt="">
            <span>Crowns & Bridges</span>
        </div>

        <!-- Duplicated Items for Continuous Smooth Loop -->
        <div class="ticker-item">
            <img src="./assets/img/tooth-filling.png" alt="">
            <span>Teeth Filling</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/denture.png" alt="">
            <span>Dentures</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/scaling.png" alt="">
            <span>Teeth Scaling</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/tooth-extraction.png" alt="">
            <span>Tooth Extraction</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/aligners-icon.png" alt="">
            <span>Clear Aligners</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/teeth_whitening.png" alt="">
            <span>Teeth Whitening</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/Smile-Makeover.png" alt="">
            <span>Smile Makeover</span>
        </div>

        <div class="ticker-item">
            <img src="./assets/img/FULL_MOUTH_RESTORATION.png" alt="">
            <span>Full Mouth Rehabilitation</span>
        </div>

    </div>
</div>

    <!-- ABOUT SECTION START -->
    <!-- <section class="ul-2-about ul-section-spacing">
        <div class="ul-2-container">
            <div class="row row-cols-lg-2 row-cols-1 gy-4">
                img
                <div class="col">
                    <div class="ul-2-about-imgs">
                        <div class="img-1-wrapper">
                            <img src="assets/img/g13.png" alt="Image">
                            <span class="txt"><span class="number">25+</span> Y E A R S E X P E R I E N C E</span>
                        </div>
                        <img src="assets/img/about-2-img-2.jpg" alt="Image" class="img-2">
                    </div>
                </div>

                txt
                <div class="col">
                    <div class="ul-2-about-txt">
                        <span class="ul-2-about-sub-title ul-section-sub-title ul-2-section-sub-title">About us</span>
                        <h2 class="ul-section-title">Committed to Your Oral Health</h2>
                        <h2 class="ul-section-title">Trusted Dental Care for Families in Vidyaranyapura</h2>
                        <p class="ul-2-about-descr">At Ivory Dental, Vidyaranyapura, our team of expert dentists and caring support staff is dedicated to delivering compassionate and high-quality dental care that prioritizes your comfort and confidence.</p>
                        <p class="ul-2-about-descr">Ivory Dental is one of the trusted dental clinics in Vidyaranyapura, Bangalore, known for providing high-quality and ethical dental care. Our experienced dentists focus on preventive, restorative, cosmetic, and advanced dental treatments using modern equipment and painless techniques.</p>
                        <ul class="ul-2-about-list">
                            <li><i class="flaticon-right-arrow"></i>Highly Skilled Dental Specialists</li>
                            <li><i class="flaticon-right-arrow"></i>Cutting-Edge Dental Technology</li>
                            <li><i class="flaticon-right-arrow"></i> Hygienic, Comfortable Environment</li>
                            <li><i class="flaticon-right-arrow"></i> Convenient Clinic Hours</li>
                            <li><i class="flaticon-right-arrow"></i> Patient-Centered, Gentle Care</li>
                            <li><i class="flaticon-right-arrow"></i> Affordable & Transparent Treatment Plans</li>
                        </ul>

                        <a href="about-ivy-dental-hospital.php" class="ul-btn">More About <i class="flaticon-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-2-about-vectors">
            <img src="assets/img/about-2-vector.svg" alt="vector" class="vector-1">
        </div>
    </section>
    ABOUT SECTION END -->

    <!-- ==========================================================
         INDEX SECOND SECTION START new stylings
    =========================================================== -->
    <section class="index_second_section" id="about-us">

        <!-- Decorative details matching the reference -->
        <div class="index-second-faded-tooth" aria-hidden="true"></div>
        <div class="index-second-ghost-mark" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <div class="index-second-top-note">
            Quality Care<br>
            For Brighter<br>
            Tomorrows
        </div>

        <div class="index-second-bottom-note">
            <span>
                Exceptional Care<br>
                For Every Smile
            </span>
        </div>

        <div class="index-second-container">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0 index-second-row">

                    <!-- LEFT VISUAL -->
                    <div class="col-lg-5">
                        <div class="index-second-visual-wrap">
                            <div class="index-second-visual-glow"></div>

                            <div class="index-second-visual">
                                <img src="assets/img/g7.png" alt="Image" class="img-2">
                                <!-- <img src="assets/img/about-2-img-2.jpg" alt="Image" class="img-2"> -->
                            </div>

                            <div class="index-second-dots" aria-hidden="true">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-7">
                        <div class="index-second-content">

                            <div class="index-second-eyebrow">
                                <span class="index-second-eyebrow-line"></span>
                                <span>About Us</span>
                            </div>

                            <h2 class="index-second-heading">
                                Trusted Dental Care for<br>
                                <span class="gold-text">Families in Vidyaranyapura</span>
                            </h2>

                            <p class="index-second-description">
                                Ivory Dental is one of the trusted dental clinics in Vidyaranyapura, Bangalore,
                                known for providing high-quality and ethical dental care. Our experienced
                                dentists focus on preventive, restorative, cosmetic, and advanced dental
                                treatments using modern equipment and painless techniques.
                            </p>

                            <div class="index-second-feature-grid">

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="fa-solid fa-user-doctor"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Highly Skilled<br>Dental Specialists
                                    </p>
                                </div>

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="bi bi-gear"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Cutting-Edge<br>Dental Technology
                                    </p>
                                </div>

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="fa-solid fa-tooth"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Hygienic, Comfortable<br>Environment
                                    </p>
                                </div>

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Convenient Clinic Hours
                                    </p>
                                </div>

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Patient-Centered,<br>Gentle Care
                                    </p>
                                </div>

                                <div class="index-second-feature">
                                    <div class="index-second-feature-icon">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <p class="index-second-feature-text">
                                        Affordable &amp; Transparent<br>Treatment Plans
                                    </p>
                                </div>

                            </div>

                            <div class="index-second-more-wrap">
                                <a href="about-ivy-dental-hospital.php" class="index-second-more-btn">
                                    <span>More About</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========================================================
         INDEX SECOND SECTION END
    =========================================================== -->

    <!-- SERVICE SECTION START -->
    <!-- <section class="ul-2-services ul-section-spacing pb-lg-0">
        <div class="ul-2-container">
            section heading
            <div class="ul-section-heading text-center justify-content-center">
                <div class="left">
                    <span class="ul-section-sub-title ul-2-section-sub-title">What We Do Best</span>
                    <h2 class="ul-section-title">Comprehensive Dental Care for Every Smile</h2>
                </div>
            </div>





            <div class="team-content-wrapper">
                <div class="team-content-wrapper">

                    <div class="custom-slide-container swiper">
                        <div class="custom-slide-content   ">
                            <div class="custom-card-wrapper swiper-wrapper py-5">

                                <div class="custom-card custom_card_bg_three swiper-slide">

                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/root canal.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/root-canal-icon.png" alt="">
                                                </div>

                                                <a href="Root-Canal-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Root-Canal-Treatment-In-Bengaluru.php">Root canal</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Relieve pain and save your natural tooth with advanced root
                                                canal treatment</p>
                                        </div>
                                    </div>


                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/teeth filling.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/tooth-filling-icon.png" alt="">

                                                </div>

                                                <a href="Teeth-Filling-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Teeth-Filling-Treatment-In-Bengaluru.php">Teeth Filling</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Restore your tooth’s strength and function with safe and
                                                lasting dental fillings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/clear aligners.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/invisiline aliners.png" alt="">

                                                </div>

                                                <a href="Invisalign-Aligners-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Invisalign-Aligners-In-Bengaluru.php">Clear Aligners</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Straighten your teeth discreetly with advanced clear
                                                aligners.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/Dental braces.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/braces-icon.png" alt="">

                                                </div>

                                                <a href="Dental-Braces-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Dental-Braces-Treatment-In-Bengaluru.php"> Dental braces</a>
                                            </h3>
                                            <p class="ul-service-descr" id="ul_service_title">Achieve a perfect smile with advanced dental braces</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/dentures.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/denture-icon.png" alt="">

                                                </div>

                                                <a href="Dental-Dentures-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Dental-Dentures-Treatment-In-Bengaluru.php">Dentures</a>
                                            </h3>
                                            <p class="ul-service-descr" id="ul_service_title">Restore your smile and confidence with natural-looking
                                                dentures.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/teeth whitning.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/teeth whitning-icon.png" alt="">

                                                </div>

                                                <a href="Teeth-Whitening-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Teeth-Whitening-Treatment-In-Bengaluru.php">Teeth Whitening</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Brighten your smile with safe and effective teeth whitening.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/dental implants.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/dental-implant-icon.png" alt="">

                                                </div>

                                                <a href="Dental-Implants-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Dental-Implants-Treatment-In-Bengaluru.php">Dental Implants</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Replace missing teeth with strong, permanent dental
                                                implants.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/teeth scaling.jpg" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/teeth scaling-icon.png" alt="">

                                                </div>

                                                <a href="Teeth-Scaling-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Teeth-Scaling-Treatment-In-Bengaluru.php">Teeth Scaling</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Keep your gums healthy with professional teeth scaling and
                                                cleaning.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/smile makeover.jpg" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/smile-make over-icon.png" alt="">

                                                </div>

                                                <a href="Smile-Makeover-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Smile-Makeover-Treatment-In-Bengaluru.php">Smile Makeover</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Transform your smile with a customized smile makeover.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/crown-bridg.jpg" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/crown-icon.png" alt="">

                                                </div>

                                                <a href="Dental-Crown-Bridge-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Dental-Crown-Bridge-Treatment-In-Bengaluru.php">Crowns & Bridges</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Restore damaged or missing teeth with durable crowns and bridges.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/tooth extration.jpg" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/tooth-extraction-icon.png" alt="">

                                                </div>

                                                <a href="Tooth-Extraction-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Tooth-Extraction-Treatment-In-Bengaluru.php">Tooth Extraction</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Safe and gentle tooth extraction for a healthier smile.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-card custom_card_bg_three swiper-slide">
                                    <div class="ul-inner-service-2">
                                        <div class="ul-inner-service-2-img">
                                            <img src="assets/img/service/full_mouth_restoration.png" alt="Service Image">
                                            <div class="ul-inner-service-2-btn-wrapper">
                                                <div class="ul-service-icon">
                                                    <img src="assets/img/Full mouth restoration-icon.png" alt="">

                                                </div>

                                                <a href="Full-Mouth-Restoration-Treatment-In-Bengaluru.php" class="ul-inner-service-2-btn ul-btn"><span>Read
                                                        More</span> <i class="flaticon-arrow-up-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="ul-inner-service-2-txt">
                                            <h3 class="ul-service-title" id="ul_service_title"><a href="Full-Mouth-Restoration-Treatment-In-Bengaluru.php">Full Mouth Restoration</a></h3>
                                            <p class="ul-service-descr" id="ul_service_title">Rebuild your smile and oral health with full mouth restoration.</p>
                                        </div>
                                    </div>
                                </div>











                            </div>
                        </div>










                    </div>
                </div>
            </div>


            <div class=" index_service_button text-center pb-3">
                <a href="services-ivy-dental-hospital.php" class="ul-btn flex-shrink-0 d-inline-block ">View More <i class="flaticon-arrow-up-right"></i></a>

            </div>

        </div>

    </section>
    SERVICE SECTION END -->

    <!-- ==========================================================
         INDEX THIRD SECTION START
    =========================================================== -->
    <section class="index_third_section">

        <div class="index-third-orb" aria-hidden="true"></div>
        <div class="index-third-orb-right" aria-hidden="true"></div>
        <div class="index-third-faded-tooth" aria-hidden="true">
            <i class="fa-solid fa-tooth"></i>
        </div>

        <div class="index-third-container">

            <div class="index-third-left-note">
                Expert<br>
                Care<br>
                Beautiful<br>
                Smiles
            </div>

            <div class="index-third-right-note">
                Your<br>
                Smile<br>
                Our<br>
                Priority
            </div>

            <!-- <div class="index-third-topbar">
                <a href="index.php" class="index-third-logo">
                    <span class="index-third-logo-icon"><i class="fa-solid fa-tooth"></i></span>
                    <span>
                        <span class="index-third-logo-title">IVY DENTAL</span>
                        <span class="index-third-logo-subtitle">Healthier Smiles Brighter Tomorrows</span>
                    </span>
                </a>

                <div class="index-third-top-right">
                    <span>Care</span>
                    <i></i>
                    <span>Comfort</span>
                    <i></i>
                    <span>Confidence</span>
                </div>
            </div> -->

            <div class="index-third-header-center">
                <div class="index-third-eyebrow">
                    <span class="index-third-eyebrow-line"></span>
                    <span>What We Do Best</span>
                    <span class="index-third-eyebrow-line"></span>
                </div>

                <h2 class="index-third-heading">
                    Comprehensive Dental Care for <span class="gold-text">Every Smile</span>
                </h2>

                <div class="index-third-subheading">
                    Healthier Smiles &nbsp;&bull;&nbsp; Brighter Tomorrows
                </div>
            </div>

            <div class="index-third-cards-row">

                <article class="index-third-card">
                    <div class="index-third-card-image">
                        <!-- <img src="assets/img/teeth-filling.jpg" alt="Teeth filling treatment"> -->
                        <img src="assets/img/service/teeth filling.png" alt="Service Image">
                    </div>
                    <div class="index-third-card-content">
                        <div class="index-third-card-icon"><img src="./assets/img/tooth-filling.png" class="img-fluid" alt="" style="width:40px;height:40px;object-fit:contain;
         filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;
         -webkit-filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;"></div>
                        <h3 class="index-third-card-title">Teeth Filling</h3>
                        <p class="index-third-card-text">
                            Restore damaged teeth with natural-looking, long-lasting fillings that bring
                            back your smile.
                        </p>
                        <a href="Teeth-Filling-Treatment-In-Bengaluru.php" class="index-third-card-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="index-third-card">
                    <div class="index-third-card-image">
                        <!-- <img src="assets/img/clear-aligners.jpg" alt="Clear aligners treatment"> -->
                        <img src="assets/img/service/clear aligners.png" alt="">

                    </div>
                    <div class="index-third-card-content">
                        <div class="index-third-card-icon"><img src="./assets/img/aligners-icon.png" class="img-fluid" alt="" style="width:40px;height:40px;object-fit:contain;
         filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;
         -webkit-filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;"></div>
                        <h3 class="index-third-card-title">Clear Aligners</h3>
                        <p class="index-third-card-text">
                            Discreet, comfortable, and effective aligners to straighten your teeth
                            and boost your confidence.
                        </p>
                        <a href="Invisalign-Aligners-In-Bengaluru.php" class="index-third-card-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="index-third-card">
                    <div class="index-third-card-image">
                        <!-- <img src="assets/img/dental-braces.jpg" alt="Dental braces treatment"> -->
                        <img src="assets/img/service/Dental braces.png" alt="Service Image">
                    </div>
                    <div class="index-third-card-content">
                        <div class="index-third-card-icon"><img src="./assets/img/braces.png" class="img-fluid" alt="" style="width:40px;height:40px;object-fit:contain;
         filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;
         -webkit-filter:brightness(0) saturate(100%) invert(49%) sepia(81%) saturate(211%) hue-rotate(5deg) brightness(141%) contrast(85%) !important;"></div>
                        <h3 class="index-third-card-title">Dental Braces</h3>
                        <p class="index-third-card-text">
                            Proven orthodontic solutions for healthier, well-aligned smiles
                            at any age.
                        </p>
                        <a href="Dental-Braces-Treatment-In-Bengaluru.php" class="index-third-card-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>


            </div>
            <div class=" index_service_button text-center pb-3 text-center" style="display: flex; justify-content: center;">
                <a href="services-ivy-dental-hospital.php" class="ul-btn flex-shrink-0 d-inline-block ">View More Services<i class="flaticon-arrow-up-right"></i></a>

            </div>

            <div class="index-third-strip">
                <div class="index-third-strip-row">

                    <div class="index-third-strip-item">
                        <div class="index-third-strip-icon"><i class="bi bi-people"></i></div>
                        <div>
                            <p class="index-third-strip-title">Families We Care For</p>
                            <p class="index-third-strip-subtitle">All Ages Welcome</p>
                        </div>
                    </div>

                    <div class="index-third-strip-item">
                        <div class="index-third-strip-icon"><i class="fa-solid fa-tooth"></i></div>
                        <div>
                            <p class="index-third-strip-title">Modern Dental Care</p>
                            <p class="index-third-strip-subtitle">Advanced Technology</p>
                        </div>
                    </div>

                    <div class="index-third-strip-item">
                        <div class="index-third-strip-icon"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <p class="index-third-strip-title">A Healthier Tomorrow</p>
                            <p class="index-third-strip-subtitle">Brighter Smiles Ahead</p>
                        </div>
                    </div>

                    <div class="index-third-strip-item">
                        <div class="index-third-strip-icon"><i class="bi bi-person-check"></i></div>
                        <div>
                            <p class="index-third-strip-title">Trusted Experts</p>
                            <p class="index-third-strip-subtitle">Compassionate &amp; Experienced</p>
                        </div>
                    </div>

                    <a href="index.php" class="index-third-strip-logo">
                        <i class="fa-solid fa-tooth"></i>
                        <span>
                            <span class="index-third-strip-logo-title">IVY DENTAL</span>
                            <span class="index-third-strip-logo-subtitle">Healthier Smiles Brighter Tomorrows</span>
                        </span>
                    </a>

                </div>
            </div>

        </div>
    </section>
    <!-- ==========================================================
         INDEX THIRD SECTION END
    =========================================================== -->


    <!-- WHY CHOOSE US SECTION START -->
    <!-- <section class="ul-why-choose-us ul-section-spacing">
        <div class="ul-2-container">
            <div class="row row-cols-lg-2 row-cols-1 gy-4 align-items-center">
                img
                <div class="col">
                    <div class="ul-why-choose-us-imgs">
                        <div class="ul-why-choose-us-img">
                            <img src="assets/img/g8.png" alt="Image" class="img-1">
                        </div>
                        <div class="ul-why-choose-us-img ul-why-choose-us-video-cover">
                            <img src="assets/img/why-choose-img-2.jpg" alt="Image" class="img-2">
                        </div>
                        <img src="assets/img/why-choose-img-vector.svg" alt="vector" class="ul-why-choose-us-imgs-vector">
                    </div>
                </div>

                txt
                <div class="col">
                    <div class="ul-why-choose-us-txt">
                        <span class="ul-section-sub-title  choose_us ul-2-section-sub-title" id="choose_us">Why Choose Us</span>
                        <span class="ul-section-sub-title ul-2-section-sub-title">Why Choose Us</span>
                        <h2 class="ul-section-title text-white">Where Compassion Meets Excellence in Dental Care</h2>
                        <p class="ul-why-choose-us-descr">At Ivory Dental, Vidyaranyapura, we are committed to delivering top-quality dental care with compassion, innovation, and integrity — putting your smile and comfort first.</p>

                        <div class="ul-why-choose-us-points">
                            single point
                            <div class="ul-why-choose-us-point">
                                <div>
                                    <h3 class="ul-why-choose-us-point-title">Personalized Dental Care</h3>
                                    <p class="ul-why-choose-us-point-descr">Every patient is unique. We listen carefully and create customized treatment plans to suit your needs.</p>
                                </div>
                            </div>
                            single point
                            <div class="ul-why-choose-us-point">
                                <div>
                                    <h3 class="ul-why-choose-us-point-title">Experienced Dental Specialists </h3>
                                    <p class="ul-why-choose-us-point-descr">Our team of skilled dentists and oral health professionals bring years of expertise across all dental specialties.</p>
                                </div>
                            </div>
                            single point
                            <div class="ul-why-choose-us-point">
                                <div>
                                    <h3 class="ul-why-choose-us-point-title">Advanced Technology & Modern Facilities</h3>
                                    <p class="ul-why-choose-us-point-descr">From digital X-rays to painless treatments, we use the latest equipment to ensure safe, precise, and comfortable care.</p>
                                </div>
                            </div>
                        </div>

                        <a href="appointment-ivy-dental-hospital.php" class="ul-btn">APPOINMENT NOW <i class="flaticon-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-why-choose-us-vectors">
            <img src="assets/img/why-choose-vector-1.svg" alt="vector" class="vector-1">
            <img src="assets/img/why-choose-vector-2.svg" alt="vector" class="vector-2">
        </div>
    </section>
    WHY CHOOSE US SECTION END -->


    <!-- ==========================================================
         INDEX FOURTH SECTION START
    =========================================================== -->
    <section class="index_fourth_section">

        <!-- premium background lighting curves -->
        <div class="index-fourth-curve index-fourth-curve-left-a"></div>
        <div class="index-fourth-curve index-fourth-curve-left-b"></div>
        <div class="index-fourth-curve index-fourth-curve-left-c"></div>
        <div class="index-fourth-curve index-fourth-curve-bottom"></div>
        <div class="index-fourth-left-shade"></div>
        <div class="index-fourth-vertical-panel"></div>

        <!-- faded dental symbol -->
        <div class="index-fourth-faded-tooth" aria-hidden="true">
            <i class="fa-solid fa-tooth"></i>
        </div>

        <div class="index-fourth-container">

            <!-- left vertical note -->
            <div class="index-fourth-left-note">
                Care<br>
                Expertise<br>
                Technology<br>
                Your Smile<br>
                Our Priority
            </div>

            <!-- top right note -->
            <!-- <div class="index-fourth-top-note">
                A Healthier<br>
                Brighter You
            </div> -->

            <div class="row index-fourth-row g-lg-5">

                <!-- LEFT VISUAL -->
                <div class="col-lg-6">
                    <div class="index-fourth-visual-wrap">
                        <div class="index-fourth-visual">
                            <!-- <img src="assets/img/why-choose-visual.png"
                                alt="Premium Ivy Dental clinic interior with dental chair and modern dental care visual"
                                loading="lazy" decoding="async"> -->
                            <img src="assets/img/g8.png" alt="Image" class="img-1">

                        </div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-6">
                    <div class="index-fourth-content">

                        <div class="index-fourth-eyebrow">
                            <span class="index-fourth-eyebrow-line"></span>
                            <span>Why Choose Us</span>
                            <span class="index-fourth-eyebrow-line"></span>
                        </div>

                        <h2 class="index-fourth-heading">
                            Where Compassion Meets<br>
                            <span class="gold-text">Excellence in Dental Care</span>
                        </h2>

                        <p class="index-fourth-description">
                            At Ivory Dental, Vidyaranyapura, we are committed to delivering top-quality dental care
                            with compassion, innovation, and integrity — putting your smile and comfort first.
                        </p>

                        <div class="index-fourth-reasons">

                            <div class="index-fourth-reason">
                                <div class="index-fourth-number"><i class="bi bi-person-check"></i></div>
                                <div class="index-fourth-reason-icon">
                                    
                                </div>
                                <div>
                                    <h3 class="index-fourth-reason-title">Personalized Dental Care</h3>
                                    <p class="index-fourth-reason-text">
                                        Every patient is unique. We listen carefully and create customized
                                        treatment plans to suit your needs.
                                    </p>
                                </div>
                            </div>

                            <div class="index-fourth-reason">
                                <div class="index-fourth-number"><i class="fa-solid fa-tooth"></i></div>
                                <div class="index-fourth-reason-icon">
                                    
                                </div>
                                <div>
                                    <h3 class="index-fourth-reason-title">Experienced Dental Specialists</h3>
                                    <p class="index-fourth-reason-text">
                                        Our team of skilled dentists and oral health professionals bring years of
                                        expertise across all dental specialties.
                                    </p>
                                </div>
                            </div>

                            <div class="index-fourth-reason">
                                <div class="index-fourth-number">  <i class="bi bi-gear"></i></div>
                                <div class="index-fourth-reason-icon">
                                  
                                </div>
                                <div>
                                    <h3 class="index-fourth-reason-title">Advanced Technology &amp; Modern Facilities</h3>
                                    <p class="index-fourth-reason-text">
                                        From digital X-rays to painless treatments, we use the latest equipment
                                        to ensure safe, precise, and comfortable care.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <a href="appointment-ivy-dental-hospital.php" class="index-fourth-appointment">
                            <span>Appointment Now</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>
                </div>

            </div>

            <!-- <div class="index-fourth-bottom-left">
                <span>Gentle Care</span>
                <span class="dot"></span>
                <span>Modern Dentistry</span>
                <span class="dot"></span>
                <span>Brighter Tomorrows</span>
            </div> -->

            <div class="index-fourth-script-note">
                Smile<br>with Confidence
            </div>

        </div>
    </section>
    <!-- ==========================================================
         INDEX FOURTH SECTION END
    =========================================================== -->

    <!-- TEAM SECTION START -->
    <!-- <section class="ul-team ul-section-spacing">
        <div class="ul-2-container">
        
            <div class="ul-section-heading text-center justify-content-center">
                <div class="left">
                    <span class="ul-section-sub-title ul-2-section-sub-title">OUR CARE TEAM</span>
                    <h2 class="ul-section-title">The Heart Behind Every Smile</h2>
                </div>
            </div>


            <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-team-row justify-content-center gy-4">
               
                <div class="col">
                    <div class="ul-team-member">
                        <div class="">
                            <img src="assets/img/service/chiranjeevi.png" alt="Member Image">
                        </div>
                        <div class="ul-team-member-txt mt-2">
                            <span class="ul-team-member-name"> <a href="about-ivy-dental-hospital.php">Dr. (Prof)Chiranjeevi Reddy BDS.MDS</a></span>
                            <span class="ul-team-member-role">Prosthodontist and Implantologist</span>
                             <div class="ul-team-member-socials">


                                 <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                                <a href="#"><i class="flaticon-youtube"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="col">
                    <div class="ul-team-member">
                        <div class="">
                            <img src="assets/img/service/divya.png" alt="Member Image">
                        </div>
                        <div class="ul-team-member-txt mt-2">
                            <span class="ul-team-member-name"><a href="about-ivy-dental-hospital.php">Dr (Prof)Divya Reddy. BDS.MDS</a></span>
                            <span class="ul-team-member-role">Paediatric Dentist</span>
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                                <a href="#"><i class="flaticon-youtube"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                single team member
                <div class="col">
                    <div class="ul-team-member">
                        <div class="">
                            <img src="assets/img/service/sridevi.png" alt="Member Image">
                        </div>
                        <div class="ul-team-member-txt mt-2">
                            <span class="ul-team-member-name"><a href="about-ivy-dental-hospital.php">Dr .Sridevi </a></span>
                            <span class="ul-team-member-role">Resident Senior Dentist</span>
                            <div class="ul-team-member-socials">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                                <a href="#"><i class="flaticon-youtube"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-team-vectors">
            <img src="assets/img/team-vector.svg" alt="Vector" class="vector-1">
            <img src="assets/img/team-vector-2.svg" alt="Vector" class="vector-2">
        </div>
    </section> -->
    <!-- TEAM SECTION END -->


    <!-- FEEDBACK SECTION START -->
    <!-- <section class="ul-2-feedbacks ul-section-spacing">
        <div class="ul-2-container">
            <div class="row row-cols-lg-2 gy-3">
              
                <div class="col-lg col-md-5">
                    <div class="ul-2-feedbacks-heading">
                        <div>
                            <span class="ul-section-sub-title ul-2-section-sub-title" id="patient_section">Patient Stories </span>
                            <h2 class="ul-section-title" id="doc_note">Doctor’s Note:</h2>
                            <p class="ul-section-descr" id="doc_note">“At Ivy Dental, our patients are at the center of everything we do. Every smile we restore, every treatment we provide, and every patient we comfort inspires us to keep raising the standard of dental care. Seeing our patients leave with brighter smiles and renewed confidence is the greatest reward for our team.”</p>
                        </div>

                        <div class="ul-2-feedbacks-slider-nav ul-feedbacks-slider-nav ul-slider-nav mt-0" id="ul-2-feedbacks-slider-nav">
                            <button class="prev"><i class="flaticon-arrow-up-right"></i></button>
                            <button class="next"><i class="flaticon-arrow-up-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md-7">
                 
                    <div class="swiper ul-2-feedbacks-slider">
                        <div class="swiper-wrapper">
                           
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">It was great experience. Procedure was neatly done by Dr Chiranjeevi and team. Treatment and follow up was taken care diligently. Thank you.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Shailaja.R gowda</h3>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                          
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Successfull implant done , doctor explained the whole process and overall a great experience. Thank you Doctor and all service staff.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Vasu R </h3>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>







                        
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Had a really good experience at Ivory Dental.
                                        Dr.Chiranjeevi and his staff were welcoming and very much professional in their work.
                                        Completely happy about the dental work they did.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Saiesh Arun kumar</h3>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>





                          
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">I had root canal done at Ivory, all the doctors are extremely supportive and very good treatment. My pain is reduced significantly. Thank you</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Johnson Bellary </h3>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>






                          
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Thank you Dr. Chiranjivi and team I had very good experience for my root canal treatment. The entire team is awesome, took care of me well everytime I Visited.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Balakrishna.S </h3>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>




                       
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Amazing doctor, strongly recommend Dr Reddy. Treats wonderfully. Had a great experience with ivory dental.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Somesh </h3>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>




                         
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Very professional and experienced doctor. Treatments and recommendations are specific and personalized.
                                        Courteous Staff.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Anuragg </h3>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>



                          
                            <div class="swiper-slide">
                                <div class="ul-2-feedback">
                                    <span class="ul-2-feedback-icon"><i class="flaticon-quotation"></i></span>
                                    <p class="ul-2-feedback-txt">Dr. Reddy was very responsive while attending me and didn't waste any time on unnecessary tests or treatments.</p>
                                    <div class="ul-2-feedback-reviewer">
                                        <div class="ul-2-feedback-reviewer-img">
                                            <img src="assets/img/reviewer-1.jpg" alt="Reviewer Image">
                                        </div>

                                        <div class="ul-2-feedback-reviewer-info">
                                            <h3 class="ul-2-feedback-reviewer-name">Piyush Vinayaraj </h3>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="ul-2-feedbacks-vectors">
            <img src="assets/img/feedback-2-vector-1.svg" alt="Vector" class="vector-1">
            <img src="assets/img/feedback-2-vector-2.svg" alt="Vector" class="vector-2">
        </div>
    </section> -->
    <!-- FEEDBACK SECTION END -->

    <!-- BLOG SECTION START -->
    <!-- <section class="ul-2-blogs ul-section-spacing">
        <div class="ul-2-container">

            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title ul-2-section-sub-title">LATES BLOG</span>
                    <h2 class="ul-section-title">Latest Tips for a Healthy Dental</h2>
                </div>

            </div>


            <div class="ul-2-blog-grid">
                <div class="row row-cols-sm-2 row-cols-1 g-lg-4 g-3">

                    <div class="col">
                        <div class="ul-2-blog">
                            <div class="ul-2-blog-img">
                                <img src="assets/img/blog-1.jpg" alt="Blog Image">
                                <span class="ul-2-blog-category">Health</span>
                            </div>

                            <div class="ul-2-blog-txt">
                                <div class="ul-2-blog-infos">
                                    <span>By Admin</span>
                                    <span>11 March 2025</span>
                                </div>
                                <h3 class="ul-2-blog-title"><a href="#">Blogs will presented here</a></h3>

                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="ul-2-blog">
                            <div class="ul-2-blog-img">
                                <img src="assets/img/blog-1.jpg" alt="Blog Image">
                                <span class="ul-2-blog-category">Health</span>
                            </div>

                            <div class="ul-2-blog-txt">
                                <div class="ul-2-blog-infos">
                                    <span>By Admin</span>
                                    <span>11 March 2025</span>
                                </div>
                                <h3 class="ul-2-blog-title"><a href="#">Blogs will presented here</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ul-2-blogs-vectors">
            <img src="assets/img/blogs-2-vector.svg" alt="vector" class="vector-1">
        </div>
    </section> -->
    <!-- <section class="blog_section ">
        <div class="container">
            <div class="section-title text-center">

                <h2 class="ask_heading mb-5">Blogs & articles </h2>

            </div>
        </div>

        <div class="container">
            <div class="row">

                <?php /*
                Old hidden blog query preserved, but disabled because PHP still executes inside HTML comments
                and was slowing the first page response.
                include './db.connection/db_connection.php';

                // Fetch latest 3 blogs with video
                $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='row'>"; // Start row for card layout

                    while ($row = $result->fetch_assoc()) {
                        $blog_id = $row['id'];
                        $title = $row['title'];
                        $main_content = $row['main_content'];
                        $main_image = $row['main_image'];
                        $video = $row['video'];

                        echo "<div class='col-md-4 mb-4'>"; // Create 3 equal-width columns for medium devices
                        echo "<div class='card h-100'>"; // Start card

                        // Display the blog title
                        echo "<div class='card-body'>";


                        // Display video if available
                        if (!empty($video)) {
                            $video_path = "./admin/uploads/videos/{$video}";
                            echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
                        }
                        // If no video, display main image
                        elseif (!empty($main_image)) {
                            $main_image_path = "./admin/uploads/photos/{$main_image}";
                            echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
                        }
                        echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
                        // Display a short portion of the blog content
                        echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

                        // Link to full blog post
                        echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

                        echo "</div>"; // End card body
                        echo "</div>"; // End card
                        echo "</div>"; // End column
                    }

                    echo "</div>"; // End row
                } else {
                    echo "No blog posts found.";
                }

                $conn->close();
                */ ?>



                <div class="mt-5 d-none d-md-block">
                    <a href="blogs.php" style="text-decoration: none;">
                        <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More<i
                                class="fa-solid fa-arrow-right mt-1"></i></p>
                    </a>
                </div>

                <div class="d-flex flex-row justify-content-center mt-4">
                    <a href="blogs.php" style="text-decoration: none;">
                        <p class="view_more_btn d-md-none">View More<i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div>

            </div>
        </div>

    </section> -->

    <!-- ==========================================================
     TOP TEAM SECTION
     ========================================================== -->
    <section class="index_fifth_section">
        <div class="ifs-clinic-blur"></div>

        <div class="container-fluid px-3 px-md-4 px-xl-5 ifs-container">

            <div class="ifs-left-copy">
                Experts<br>
                In Every<br>
                Smile
            </div>

            <div class="ifs-heading-wrap">
                <div class="ifs-kicker">
                    <i class="fa-solid fa-heart"></i>
                    Our Care Team
                    <i class="fa-solid fa-heart"></i>
                </div>

                <h2 class="ifs-title">
                    The Heart Behind <span class="gold">Every Smile</span>
                </h2>

                <div class="ifs-subtitle">
                    Skilled Hands &nbsp; • &nbsp; Caring Hearts &nbsp; • &nbsp; Healthier Tomorrows
                </div>
            </div>

            <!-- <div class="ifs-script">
                Same<br>
                Care<br>
                Brighter<br>
                Smiles
            </div> -->

            <div class="row g-4 ifs-team-row mt-5 pt-5">

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="assets/img/service/chiranjeevi.png" alt="Dr. Chiranjeevi Reddy">
                        </div>

                        <h3 class="ifs-name mt-3">Dr. (Prof) Chiranjeevi Reddy BDS.MDS</h3>
                        <p class="ifs-role">Prosthodontist and Implantologist</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="assets/img/service/divya.png" alt="Dr. Divya Reddy">
                        </div>

                        <h3 class="ifs-name mt-3">Dr (Prof) Divya Reddy, BDS.MDS</h3>
                        <p class="ifs-role">Paediatric Dentist</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="assets/img/service/sridevi.png" alt="Dr. Sridevi">
                        </div>

                        <h3 class="ifs-name mt-3">Dr. Sridevi</h3>
                        <p class="ifs-role">Resident Senior Dentist</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ==========================================================
     BOTTOM PATIENT STORY SECTION
     ========================================================== -->
    <section class="index_sixth_section">
        <div class="container-fluid px-3 px-md-4 px-xl-5 iss-container">
            <div class="row g-4 align-items-center">

                <div class="col-12 col-lg-5 iss-left">
                    <div class="iss-kicker">
                        <i class="fa-solid fa-heart"></i>
                        Patient Stories
                    </div>

                    <h2 class="iss-title">
                        Doctor’s <span class="gold">Note:</span>
                    </h2>

                    <p class="iss-copy">
                        “At Ivy Dental, our patients are at the center of everything we do.
                        Every smile we restore, every treatment we provide, and every patient
                        we comfort inspires us to keep raising the standard of dental care.
                        Seeing our patients leave with brighter smiles and renewed confidence
                        is the greatest reward for our team.”
                    </p>

                    <!-- <div class="iss-arrows">
                        <a href="#" class="iss-arrow" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></a>
                        <span class="iss-arrow-line"></span>
                        <a href="#" class="iss-arrow" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></a>
                    </div> -->

                    <div class="iss-meta">
                        <span>Real Patients</span><i></i>
                        <span>Real Smiles</span><i></i>
                        <span>Real Confidence</span>
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-0">
                    <div class="iss-testimonial">
                        <div class="iss-quote">“</div>

                        <div class="iss-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p class="iss-review">
                            I had had very good experience with ivy dental.the doctors are professional,patient and take time to explain the problem and treatment options clearly with out rushing you into any procedure.
                        </p>

                        <div class="iss-divider"></div>

                        <div class="iss-user">
                            <div class="iss-user-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="iss-user-name">Rekha Rekha</div>
                        </div>
                    </div>
                </div>
                <div class=" index_service_button text-center pb-3 text-center" style="display: flex; justify-content: center;">
                <a href="testimonials-ivy-dental-hospital.php" class="ul-btn flex-shrink-0 d-inline-block ">View More<i class="flaticon-arrow-up-right"></i></a>

            </div>

            </div>

            <!-- <div class="iss-side-copy">
                Healthy<br>
                Smiles<br>
                Happier<br>
                Lives
            </div> -->

            <div class="iss-tooth">
                <img src="testimonial-tooth.jpg" alt="">
            </div>

            <div class="iss-bottom-note">
                Care Beyond Treatment
            </div>
        </div>
    </section>


















    <section class="ul-2-blogs ul-section-spacing">
        <div class="ul-2-container">

            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title ul-2-section-sub-title">LATEST BLOG</span>
                    <h2 class="ul-section-title">Latest Tips for a Healthy Dental</h2>
                </div>
            </div>

            <div class="ul-2-blog-grid">
                <div class="row row-cols-sm-2 row-cols-1 g-lg-4 g-3" id="home-latest-blogs">
                    <p>Latest blogs are loading...</p>
                </div>
                <script>
                    window.addEventListener('load', function() {
                        var loadBlogs = function() {
                            var target = document.getElementById('home-latest-blogs');
                            if (!target) return;

                            fetch('home_blogs.php', {
                                    cache: 'no-store',
                                    credentials: 'same-origin'
                                })
                                .then(function(response) {
                                    return response.ok ? response.text() : '';
                                })
                                .then(function(html) {
                                    if (html.trim()) {
                                        target.innerHTML = html;
                                    }
                                })
                                .catch(function() {});
                        };

                        if ('requestIdleCallback' in window) {
                            requestIdleCallback(loadBlogs, {
                                timeout: 2500
                            });
                        } else {
                            setTimeout(loadBlogs, 1200);
                        }
                    });
                </script>
            </div>
        </div>

        <div class="ul-2-blogs-vectors">
            <img src="assets/img/blogs-2-vector.svg" alt="vector" class="vector-1">
        </div>
    </section>

    <!-- BLOG SECTION END -->


    <!-- APPOINTMENT SECTION START -->
    <!-- <section class="ul-appointment ul-2-appointment ul-section-spacing">
        <div class="ul-2-container">
            <div class="row g-4 g-xl-5">
              


                <div class="col-md-5">



                   
                    <img src="assets/img/g10.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 d-flex flex-direction-column justify-content-center">
                    <div class="ul-2-appointment-form-wrapper">
                      
                        <h2 class="ul-section-title index_appointment ">Apply for Appointment</h2>

                        <form class="ul-appointment-form" action="appointmentform.php" method="post" role="form" class="php-email-form"
                            data-aos-delay="100">
                            <div class="row ul-bs-row row-cols-2 row-cols-xxs-1">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-name">Your Name</label>
                                        <input type="text" name="name" id="ul-appointment-name" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-email">Your Email</label>
                                        <input type="email" name="email" id="ul-appointment-email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-phone">Your Phone</label>
                                        <input type="tel" name="phone" id="ul-appointment-phone" placeholder="Your Number">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-date">Selct Date</label>
                                        <input type="date" name="date" id="ul-appointment-date">
                                    </div>
                                </div>

                              

                                <div class="col">
                                    <div class="form-group select-wrapper">
                                        <label for="ul-appointment-treatment">Select Treatment</label>
                                        <select name="treatment" id="ul-appointment-treatment">
                                            <option value="none" data-placeholder="true">Select Treatment</option>
                                            <option value="Root canal">Root canal</option>
                                            <option value="Teeth Filling">Teeth Filling</option>
                                            <option value="Clear Aligners">Clear Aligners</option>
                                            <option value="Dental braces">Dental braces</option>
                                            <option value="Dentures">Dentures</option>
                                            <option value="Teeth Whitening">Teeth Whitening</option>
                                            <option value="Dental Implants">Dental Implants</option>
                                            <option value="Teeth Scaling ">Teeth Scaling</option>
                                            <option value="Smile Makeover">Smile Makeover</option>
                                            <option value="Crowns & Bridges">Crowns & Bridges</option>
                                            <option value="Tooth Extraction">Tooth Extraction</option>
                                            <option value="Full Mouth Restoration">Full Mouth Restoration</option>

                                        </select>
                                        <div id="ul-appointment-treatment-select-wrapper" class="position-relative"></div>
                                    </div>
                                </div>




                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="ul-btn w-100 justify-content-center">Appointment Now </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

             

            </div>
        </div>



    </section> -->




    <section class="index_last_section">
        <div class="ils-line-1"></div>
        <div class="ils-line-2"></div>
        <div class="ils-line-3"></div>

        <div class="container-fluid px-3 px-md-4 px-xl-5 index_last_container">
            <div class="row g-4 align-items-stretch">

                <div class="col-12 col-lg-6">
                    <div class="ils-left-card h-60">
                        <img src="assets/img/g10.png" alt="Ivy Dental reception">

                        <div class="ils-left-note">
                            <div class="big">A Healthier Smile</div>
                            <div class="small">Starts Here</div>
                        </div>

                        <div class="ils-benefits">
                            <div class="ils-benefit">
                                <div class="ils-benefit-icon"><i class="fa-regular fa-calendar-days"></i></div>
                                <div class="ils-benefit-text">Easy<br>Booking</div>
                            </div>

                            <div class="ils-benefit">
                                <div class="ils-benefit-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="ils-benefit-text">Confidential<br>&amp; Secure</div>
                            </div>

                            <div class="ils-benefit">
                                <div class="ils-benefit-icon"><i class="fa-regular fa-clock"></i></div>
                                <div class="ils-benefit-text">Quick<br>Response</div>
                            </div>
                        </div>
                    </div>

                    <div class="ils-bottom-words">
                        <span>Care</span><i></i>
                        <span>Comfort</span><i></i>
                        <span>Confidence</span>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="ils-form-card h-100">

                        <div class="ils-priority">Your Smile Our Priority</div>

                        <h2 class="ils-title">
                            Apply for<br>
                            <span class="gold">Appointment</span>
                        </h2>

                        <div class="ils-side-copy">
                            Expert<br>
                            Care For A<br>
                            Brighter<br>
                            Tomorrow
                        </div>

                        <div class="ils-tooth-watermark">
                            <i class="fa-solid fa-tooth"></i>
                        </div>

                        <!-- <form action="#" method="post" class="position-relative z-2">
                            <div class="row g-3">

                                <div class="col-12 col-md-6">
                                    <label class="form-label">Your Name</label>
                                    <div class="ils-field">
                                        <i class="fa-regular fa-user icon-left"></i>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label">Your Email</label>
                                    <div class="ils-field">
                                        <i class="fa-regular fa-envelope icon-left"></i>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label">Your Phone</label>
                                    <div class="ils-field">
                                        <i class="fa-solid fa-phone icon-left"></i>
                                        <input type="tel" name="phone" class="form-control" placeholder="Your Number">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label">Select Date</label>
                                    <div class="ils-field">
                                        <i class="fa-regular fa-calendar-days icon-left"></i>
                                        <input type="text" name="date" class="form-control" placeholder="dd-mm-yyyy">
                                        <i class="fa-regular fa-calendar icon-right"></i>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8">
                                    <label class="form-label">Select Treatment</label>
                                    <div class="ils-field">
                                        <i class="fa-solid fa-tooth icon-left"></i>
                                        <select class="form-select" name="treatment">
                                            <option selected>Select Treatment</option>
                                            <option>Root Canal</option>
                                            <option>Dental Implants</option>
                                            <option>Clear Aligners</option>
                                            <option>Dental Braces</option>
                                            <option>Teeth Whitening</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="ils-submit" type="submit">
                                        Appointment
                                        
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->

                         <form class="ul-appointment-form" action="appointmentform.php" method="post" role="form" class="php-email-form"
                            data-aos-delay="100">
                            <div class="row ul-bs-row row-cols-2 row-cols-xxs-1">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-name">Your Name</label>
                                        <input type="text" name="name" id="ul-appointment-name" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-email">Your Email</label>
                                        <input type="email" name="email" id="ul-appointment-email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-phone">Your Phone</label>
                                        <input type="tel" name="phone" id="ul-appointment-phone" placeholder="Your Number">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="ul-appointment-date">Selct Date</label>
                                        <input type="date" name="date" id="ul-appointment-date">
                                    </div>
                                </div>

                              

                                <div class="col">
                                    <div class="form-group select-wrapper">
                                        <label for="ul-appointment-treatment">Select Treatment</label>
                                        <select name="treatment" id="ul-appointment-treatment">
                                            <option value="none" data-placeholder="true">Select Treatment</option>
                                            <option value="Root canal">Root canal</option>
                                            <option value="Teeth Filling">Teeth Filling</option>
                                            <option value="Clear Aligners">Clear Aligners</option>
                                            <option value="Dental braces">Dental braces</option>
                                            <option value="Dentures">Dentures</option>
                                            <option value="Teeth Whitening">Teeth Whitening</option>
                                            <option value="Dental Implants">Dental Implants</option>
                                            <option value="Teeth Scaling ">Teeth Scaling</option>
                                            <option value="Smile Makeover">Smile Makeover</option>
                                            <option value="Crowns & Bridges">Crowns & Bridges</option>
                                            <option value="Tooth Extraction">Tooth Extraction</option>
                                            <option value="Full Mouth Restoration">Full Mouth Restoration</option>

                                        </select>
                                        <div id="ul-appointment-treatment-select-wrapper" class="position-relative"></div>
                                    </div>
                                </div>




                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="ul-btn w-100 justify-content-center">Appointment Now </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="ils-footer-note">
                            A Healthier Smile<br>
                            A Brighter You
                        </div>

                        <div class="ils-tooth-art">
                            <img src="appointment-tooth.png" alt="">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>








    <!-- APPOINTMENT SECTION END -->
</main>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper === 'undefined' || !document.querySelector('.custom-slide-content')) return;

        var swiper = new Swiper(".custom-slide-content", {
            slidesPerView: 4,
            spaceBetween: 25,
            loop: true,
            centerslide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".custom-swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            autoplay: {
                delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
                disableOnInteraction: false, // Keeps autoplay active even after manual swiping
            },
            navigation: {
                nextEl: ".swiper-button-next.custom-swiper-navBtn",
                prevEl: ".swiper-button-prev.custom-swiper-navBtn",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>

<?php include('footer.php'); ?>
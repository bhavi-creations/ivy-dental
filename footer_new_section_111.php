<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivy Dental Footer</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=DM+Sans:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --fn-green: #034b36;
            --fn-green-dark: #043b2d;
            --fn-green-deep: #022f25;
            --fn-green-soft: #0b5f45;
            --fn-gold: #c59a4f;
            --fn-gold-soft: #d8bd7e;
            --fn-cream: #fffdf3;
            --fn-line: rgba(255, 255, 255, .15);
            --fn-text: #f8f8f2;
            --fn-muted: #d8dfda;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: #fff;
            font-family: "DM Sans", Arial, sans-serif;
        }

        .footer_new_section {
            position: relative;
            overflow: hidden;
            color: var(--fn-text);
            background:
                radial-gradient(circle at 18% 8%, rgba(29, 117, 77, .38), transparent 23%),
                radial-gradient(circle at 73% 34%, rgba(16, 93, 63, .25), transparent 28%),
                linear-gradient(100deg, var(--fn-green-deep) 0%, var(--fn-green) 46%, #07523d 100%);
            padding: 42px 0 0;
            isolation: isolate;
        }

        /* thin gold top-left sweeping line */
        .footer_new_section::before {
            content: "";
            position: absolute;
            width: 620px;
            height: 620px;
            left: -385px;
            top: -315px;
            border: 1.5px solid rgba(205, 169, 91, .68);
            border-radius: 50%;
            z-index: -1;
            pointer-events: none;
        }

        /* soft lower left golden arc */
        .footer_new_section::after {
            content: "";
            position: absolute;
            width: 520px;
            height: 300px;
            left: -115px;
            bottom: -215px;
            border: 1.5px solid rgba(205, 169, 91, .55);
            border-radius: 50%;
            transform: rotate(8deg);
            z-index: -1;
            pointer-events: none;
        }

        .footer_new_section .footer_new_bg_right {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 25%;
            background:
                linear-gradient(90deg, rgba(3, 75, 54, .95), rgba(3, 75, 54, .34)),
                url("footer-clinic-bg.jpg") center/cover no-repeat;
            opacity: .42;
            filter: saturate(.85);
            z-index: -2;
        }

        .footer_new_section .footer_new_container {
            position: relative;
            z-index: 3;
            max-width: 1460px;
        }

        .footer_new_section .footer_new_partner {
            position: absolute;
            left: 15px;
            top: 10px;
            text-transform: uppercase;
            letter-spacing: .34em;
            font-size: 11px;
            line-height: 1.45;
            color: #eef3ef;
        }

        .footer_new_section .footer_new_partner::after {
            content: "";
            display: block;
            width: 44px;
            height: 1px;
            margin-top: 10px;
            background: var(--fn-gold-soft);
        }

        .footer_new_section .footer_new_main {
            padding-top: 54px;
            padding-bottom: 26px;
        }

        /* BRAND COLUMN */
        .footer_new_section .footer_new_brand {
            padding-left: 90px;
        }

        .footer_new_section .footer_new_logo_card {
            width: 100%;
            max-width: 325px;
            border-radius: 18px;
            overflow: hidden;
            background: #fffdf4;
            box-shadow: 0 18px 35px rgba(0, 0, 0, .12);
        }

        .footer_new_section .footer_new_logo_card img {
            width: 100%;
            display: block;
        }

        .footer_new_section .footer_new_contact {
            margin-top: 20px;
        }

        .footer_new_section .footer_new_contact_item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 9px 0;
            color: #f4f5ef;
            font-size: 14px;
            line-height: 1.45;
        }

        .footer_new_section .footer_new_contact_item i {
            width: 23px;
            color: #f1dfae;
            font-size: 17px;
            margin-top: 2px;
        }

        .footer_new_section .footer_new_script {
            position: absolute;
            left: -82px;
            bottom: 4px;
            font-family: "Allura", cursive;
            font-size: 2.65rem;
            line-height: .72;
            color: #d6b366;
            transform: rotate(-7deg);
            white-space: nowrap;
        }

        .footer_new_section .footer_new_tooth {
            position: absolute;
            left: -82px;
            bottom: -128px;
            width: 175px;
            z-index: 4;
        }

        .footer_new_section .footer_new_tooth img {
            width: 100%;
            display: block;
        }

        /* LINK COLUMNS */
        .footer_new_section .footer_new_link_col {
            position: relative;
            padding-left: 36px;
            border-left: 1px solid rgba(255, 255, 255, .12);
            min-height: 390px;
        }

        .footer_new_section .footer_new_heading {
            font-family: "Playfair Display", serif;
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 18px;
            color: #fffdf6;
            line-height: 1;
        }

        .footer_new_section .footer_new_heading::after {
            content: "";
            display: block;
            width: 50px;
            height: 2px;
            background: var(--fn-gold-soft);
            margin-top: 12px;
        }

        .footer_new_section .footer_new_links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer_new_section .footer_new_links li {
            margin: 0 0 17px;
        }

        .footer_new_section .footer_new_links a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #f4f5ef;
            text-decoration: none;
            font-size: 14px;
            transition: .22s ease;
        }

        .footer_new_section .footer_new_links a i {
            width: 16px;
            color: #fff;
            font-size: 12px;
        }

        .footer_new_section .footer_new_links a:hover {
            color: #efd59a;
            transform: translateX(3px);
        }

        /* RIGHT SIDE SLOGANS */
        .footer_new_section .footer_new_right_words {
            position: absolute;
            right: 40px;
            top: 120px;
            text-transform: uppercase;
            color: #f2f2ec;
            letter-spacing: .28em;
            font-size: 11px;
            line-height: 1.5;
        }

        .footer_new_section .footer_new_right_words::after {
            content: "";
            display: block;
            width: 45px;
            height: 1px;
            margin-top: 10px;
            background: #d7bc7c;
        }

        .footer_new_section .footer_new_glass_tag {
            position: absolute;
            right: 32px;
            bottom: 72px;
            width: 150px;
            min-height: 175px;
            border-radius: 22px;
            padding: 36px 20px 20px;
            background: linear-gradient(145deg, rgba(255, 255, 255, .12), rgba(255, 255, 255, .035));
            border: 1px solid rgba(219, 191, 122, .70);
            box-shadow: inset 0 0 24px rgba(255, 255, 255, .04), 0 14px 28px rgba(0, 0, 0, .08);
            backdrop-filter: blur(5px);
            text-transform: uppercase;
            letter-spacing: .25em;
            font-size: 10px;
            line-height: 1.55;
            color: #f8f7ef;
        }

        .footer_new_section .footer_new_glass_tag::before {
            content: "";
            display: block;
            width: 34px;
            height: 2px;
            background: #d8bd7e;
            margin-bottom: 13px;
        }

        /* BOTTOM BAR */
        .footer_new_section .footer_new_bottom {
            position: relative;
            border-top: 1px dashed rgba(255, 255, 255, .28);
            margin-top: 10px;
            padding: 22px 0 24px;
        }

        .footer_new_section .footer_new_bottom_inner {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            gap: 24px;
            padding-left: 175px;
            padding-right: 190px;
        }

        .footer_new_section .footer_new_legal {
            display: flex;
            align-items: center;
            gap: 28px;
            white-space: nowrap;
        }

        .footer_new_section .footer_new_legal a {
            color: #f4f2e8;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: .18em;
            font-size: 10px;
        }

        .footer_new_section .footer_new_separator {
            width: 1px;
            height: 30px;
            background: #bfa36b;
            opacity: .72;
        }

        .footer_new_section .footer_new_social {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .footer_new_section .footer_new_social a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid rgba(216, 189, 126, .8);
            color: #f5e6bc;
            text-decoration: none;
            transition: .25s ease;
        }

        .footer_new_section .footer_new_social a:hover {
            background: #f0d79c;
            color: #0a5139;
            transform: translateY(-2px);
        }

        .footer_new_section .footer_new_copy {
            text-transform: uppercase;
            letter-spacing: .10em;
            font-size: 9px;
            color: #edece5;
            white-space: nowrap;
        }

        /* decorative fine lines */
        .footer_new_section .footer_new_line_one,
        .footer_new_section .footer_new_line_two {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(216, 189, 126, .6), transparent);
            pointer-events: none;
        }

        .footer_new_section .footer_new_line_one {
            width: 210px;
            left: 0;
            top: 10px;
            transform: rotate(-36deg);
        }

        .footer_new_section .footer_new_line_two {
            width: 160px;
            right: 130px;
            bottom: 8px;
            transform: rotate(22deg);
            opacity: .45;
        }

        /* RESPONSIVE */
        @media (max-width:1199.98px) {
            .footer_new_section .footer_new_brand {
                padding-left: 20px
            }

            .footer_new_section .footer_new_partner {
                position: static;
                margin-bottom: 22px;
            }

            .footer_new_section .footer_new_main {
                padding-top: 0
            }

            .footer_new_section .footer_new_script,
            .footer_new_section .footer_new_tooth {
                display: none;
            }

            .footer_new_section .footer_new_right_words,
            .footer_new_section .footer_new_glass_tag {
                display: none;
            }

            .footer_new_section .footer_new_bg_right {
                width: 32%;
                opacity: .18;
            }

            .footer_new_section .footer_new_bottom_inner {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        @media (max-width:991.98px) {
            .footer_new_section {
                padding-top: 30px
            }

            .footer_new_section .footer_new_link_col {
                min-height: auto;
                border-left: 0;
                padding-left: 0;
                padding-top: 20px;
            }

            .footer_new_section .footer_new_brand {
                padding-left: 0;
            }

            .footer_new_section .footer_new_logo_card {
                max-width: 340px;
            }

            .footer_new_section .footer_new_bottom_inner {
                grid-template-columns: 1fr;
                text-align: center;
                justify-items: center;
            }

            .footer_new_section .footer_new_legal {
                flex-wrap: wrap;
                justify-content: center;
            }

            .footer_new_section .footer_new_separator {
                display: none;
            }
        }

        @media (max-width:767.98px) {
            .footer_new_section {
                padding-top: 24px;
            }

            .footer_new_section::before {
                width: 420px;
                height: 420px;
                left: -310px;
                top: -210px;
            }

            .footer_new_section .footer_new_bg_right {
                display: none;
            }

            .footer_new_section .footer_new_partner {
                font-size: 9px;
                letter-spacing: .26em;
            }

            .footer_new_section .footer_new_main {
                padding-bottom: 14px;
            }

            .footer_new_section .footer_new_link_col {
                margin-top: 8px;
            }

            .footer_new_section .footer_new_heading {
                font-size: 22px;
            }

            .footer_new_section .footer_new_links li {
                margin-bottom: 13px;
            }

            .footer_new_section .footer_new_links a {
                font-size: 13px;
            }

            .footer_new_section .footer_new_contact_item {
                font-size: 13px;
            }

            .footer_new_section .footer_new_bottom {
                margin-top: 0;
                padding-top: 20px;
            }

            .footer_new_section .footer_new_bottom_inner {
                padding-left: 0;
                padding-right: 0;
            }

            .footer_new_section .footer_new_legal {
                gap: 15px;
            }

            .footer_new_section .footer_new_copy {
                white-space: normal;
                line-height: 1.5;
            }
        }

        @media (max-width:575.98px) {
            .footer_new_section .footer_new_logo_card {
                max-width: 100%;
            }

            .footer_new_section .footer_new_social {
                gap: 10px;
                flex-wrap: wrap;
            }

            .footer_new_section .footer_new_social a {
                width: 36px;
                height: 36px;
            }

            .footer_new_section .footer_new_legal a {
                font-size: 9px;
            }
        }
    </style>
</head>

<body>

    <footer class="footer_new_section">
        <div class="footer_new_bg_right"></div>
        <div class="footer_new_line_one"></div>
        <div class="footer_new_line_two"></div>

        <div class="container-fluid px-3 px-md-4 px-xl-5 footer_new_container">

            <div class="footer_new_partner">
                Your<br>
                Family's<br>
                Dental<br>
                Partner
            </div>

            <div class="row g-4 footer_new_main">

                <!-- BRAND / CONTACT -->
                <div class="col-12 col-lg-4 col-xl-4 footer_new_brand position-relative">

                    <div class="footer_new_logo_card">
                        <img src="ivy-dental-logo-card.jpg" alt="Ivy Dental Bangalore">
                    </div>

                    <div class="footer_new_contact">
                        <div class="footer_new_contact_item">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                461, HMT Layout 3rd Block,<br>
                                Vidyaranyapura, Bengaluru,<br>
                                Karnataka 560097
                            </div>
                        </div>

                        <div class="footer_new_contact_item">
                            <i class="fa-solid fa-phone"></i>
                            <div>7760605222</div>
                        </div>

                        <div class="footer_new_contact_item">
                            <i class="fa-solid fa-phone"></i>
                            <div>9740805222</div>
                        </div>
                    </div>

                    <div class="footer_new_script">
                        Healthy<br>
                        Smiles<br>
                        Brighter<br>
                        Tomorrows
                    </div>

                    <div class="footer_new_tooth">
                        <img src="footer-tooth.png" alt="">
                    </div>

                </div>

                <!-- HELPFUL LINK -->
                <div class="col-6 col-md-4 col-lg-2 col-xl-2 footer_new_link_col">
                    <h3 class="footer_new_heading">Helpful Link</h3>

                    <ul class="footer_new_links">
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Home</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>About</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Services</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Testimonials</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Gallery</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Blog</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Contact</a></li>
                    </ul>
                </div>

                <!-- QUICK LINKS 1 -->
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 footer_new_link_col">
                    <h3 class="footer_new_heading">Quick Links</h3>

                    <ul class="footer_new_links">
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Book an Appointment</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Find a Doctor</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Dental Pricing</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Patient Forms</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Insurance</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- QUICK LINKS 2 -->
                <div class="col-12 col-md-4 col-lg-3 col-xl-3 footer_new_link_col">
                    <h3 class="footer_new_heading">Quick Links</h3>

                    <ul class="footer_new_links">
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>General Dentistry</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Teeth Whitening</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Dental Implants</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Orthodontics (Braces)</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Cosmetic Dentistry</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Root Canal Treatment</a></li>
                        <li><a href="#"><i class="fa-solid fa-chevron-right"></i>Pediatric Dental Care</a></li>
                    </ul>
                </div>

            </div>

            <div class="footer_new_right_words">
                Care<br>
                Comfort<br>
                Confidence
            </div>

            <div class="footer_new_glass_tag">
                A<br>
                Healthier<br>
                Smile<br>
                A Brighter<br>
                You
            </div>

            <!-- BOTTOM BAR -->
            <div class="footer_new_bottom">
                <div class="footer_new_bottom_inner">

                    <div class="footer_new_legal">
                        <a href="#">Terms &amp; Conditions</a>
                        <span class="footer_new_separator"></span>
                        <a href="#">Privacy Policy</a>
                    </div>

                    <div class="footer_new_social">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>

                    <div class="footer_new_copy">
                        © Ivy Dental Bangalore. All Rights Reserved 2025
                    </div>

                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
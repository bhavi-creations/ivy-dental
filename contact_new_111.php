<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Section - Ivy Dental</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --contact-green: #064b34;
            --contact-green-2: #0a5d3f;
            --contact-green-3: #0d6846;
            --contact-ink: #173e31;
            --contact-gold: #b57b20;
            --contact-gold-soft: #d8bb71;
            --contact-cream: #fffdf6;
            --contact-sage: #dfe8d7;
            --contact-line: #e2c47e;
            --contact-muted: #5a6662;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: #fff;
            font-family: "DM Sans", Arial, sans-serif;
            color: var(--contact-ink);
        }

        .contact_new_section {
            position: relative;
            overflow: hidden;
            padding: 26px 0 18px;
            background:
                radial-gradient(circle at 8% 2%, rgba(221, 232, 214, .70), transparent 17%),
                radial-gradient(circle at 91% 19%, rgba(231, 236, 224, .75), transparent 18%),
                linear-gradient(135deg, #fffef9 0%, #fcfdf9 52%, #f4f8f0 100%);
            min-height: 100vh;
            isolation: isolate;
        }

        /* Background curved line on upper-left */
        .contact_new_section::before {
            content: "";
            position: absolute;
            width: 560px;
            height: 260px;
            left: -185px;
            top: -135px;
            border: 1.5px solid rgba(181, 123, 32, .62);
            border-radius: 50%;
            transform: rotate(-8deg);
            z-index: -2;
            pointer-events: none;
        }

        /* faint bottom wave */
        .contact_new_section::after {
            content: "";
            position: absolute;
            width: 780px;
            height: 220px;
            right: -140px;
            bottom: -160px;
            border-radius: 50%;
            background: rgba(222, 232, 216, .48);
            z-index: -2;
            pointer-events: none;
        }

        .contact_new_section .contact_new_container {
            position: relative;
            max-width: 1460px;
            z-index: 2;
        }

        /* top right fine gold line */
        .contact_new_section .contact_new_top_line {
            position: absolute;
            right: 18px;
            top: 5px;
            width: 190px;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(181, 123, 32, .55), transparent);
            transform: rotate(-6deg);
            opacity: .75;
            pointer-events: none;
        }

        .contact_new_section .contact_new_kicker {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 18px;
            text-transform: uppercase;
            letter-spacing: .40em;
            font-size: 12px;
            font-weight: 700;
            color: #0d6042;
            margin: 4px 0 8px;
        }

        .contact_new_section .contact_new_kicker::before,
        .contact_new_section .contact_new_kicker::after {
            content: "";
            width: 38px;
            height: 1px;
            background: var(--contact-gold);
            display: block;
        }

        .contact_new_section .contact_new_title {
            margin: 0;
            text-align: center;
            font-family: "Playfair Display", serif;
            font-size: clamp(2.7rem, 4.1vw, 4.55rem);
            font-weight: 700;
            line-height: 1.02;
            color: #0a3d2d;
            letter-spacing: -.02em;
        }

        .contact_new_section .contact_new_title .gold {
            color: #ad7928;
        }

        .contact_new_section .contact_new_subtitle {
            text-align: center;
            margin: 8px 0 30px;
            color: #43564f;
            text-transform: uppercase;
            letter-spacing: .36em;
            font-size: 11px;
            font-weight: 600;
        }

        .contact_new_section .contact_new_script {
            position: absolute;
            right: 8.5%;
            top: 36px;
            font-family: "Allura", cursive;
            color: #a8782a;
            font-size: 2.6rem;
            line-height: .75;
            transform: rotate(-5deg);
            text-align: left;
            white-space: nowrap;
        }

        .contact_new_section .contact_new_script span {
            display: block;
        }

        .contact_new_section .contact_new_script::after {
            content: "";
            display: block;
            width: 94px;
            height: 3px;
            background: #a8782a;
            margin: 8px 0 0 44px;
            transform: rotate(-8deg);
            border-radius: 20px;
        }

        .contact_new_section .contact_new_info_row {
            margin-bottom: 28px;
        }

        .contact_new_section .contact_new_info_card {
            position: relative;
            min-height: 235px;
            height: 100%;
            padding: 64px 28px 26px;
            background: rgba(255, 254, 248, .87);
            border: 1px solid rgba(224, 191, 111, .90);
            border-radius: 18px;
            box-shadow: 0 14px 34px rgba(30, 76, 54, .08);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        .contact_new_section .contact_new_info_card::after {
            content: "";
            position: absolute;
            inset: auto 18px 15px 18px;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(181, 123, 32, .12), transparent);
        }

        .contact_new_section .contact_new_info_icon {
            position: absolute;
            top: 20px;
            width: 82px;
            height: 82px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #f5d995;
            font-size: 32px;
            background: linear-gradient(145deg, #0e6747, #06432f);
            border: 2px solid #d3b060;
            box-shadow:
                0 0 0 5px rgba(221, 230, 213, .50),
                0 6px 20px rgba(14, 82, 55, .14),
                inset 0 0 0 1px rgba(255, 255, 255, .15);
        }

        .contact_new_section .contact_new_info_label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin: 42px 0 13px;
            font-size: 11px;
            font-weight: 700;
            color: #173f31;
            text-transform: uppercase;
            letter-spacing: .35em;
        }

        .contact_new_section .contact_new_info_label::before,
        .contact_new_section .contact_new_info_label::after {
            content: "";
            width: 22px;
            height: 1px;
            background: var(--contact-gold);
        }

        .contact_new_section .contact_new_info_text {
            margin: 0;
            max-width: 330px;
            color: #40544d;
            font-size: 16px;
            line-height: 1.42;
            font-weight: 500;
        }

        .contact_new_section .contact_new_tooth_outline {
            position: absolute;
            right: -8px;
            bottom: -12px;
            font-size: 138px;
            color: rgba(55, 101, 77, .07);
            transform: rotate(-6deg);
            pointer-events: none;
        }

        .contact_new_section .contact_new_lower_wrap {
            border: 1px solid rgba(224, 191, 111, .9);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(30, 76, 54, .08);
            background: #fff;
        }

        .contact_new_section .contact_new_map_col {
            position: relative;
            min-height: 555px;
            background: #eef1ea;
        }

        .contact_new_section .contact_new_map_image {
            width: 100%;
            height: 100%;
            min-height: 555px;
            object-fit: cover;
            display: block;
        }

        .contact_new_section .contact_new_map_btn {
            position: absolute;
            left: 28px;
            bottom: 23px;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 11px 18px 11px 12px;
            background: rgba(255, 254, 248, .96);
            color: #0b3f2e;
            border: 1px solid #caa55b;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
        }

        .contact_new_section .contact_new_map_btn_icon {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: 50%;
            background: #0a563a;
            color: #f3d891;
            display: grid;
            place-items: center;
        }

        .contact_new_section .contact_new_form_col {
            position: relative;
            min-height: 555px;
            padding: 32px 38px 22px;
            color: #fff;
            background:
                radial-gradient(circle at 88% 14%, rgba(33, 123, 85, .27), transparent 26%),
                linear-gradient(145deg, #0b5b3e 0%, #06442f 55%, #063d2b 100%);
            overflow: hidden;
        }

        /* exact-style thin diagonal/curved line work behind form */
        .contact_new_section .contact_new_form_col::before {
            content: "";
            position: absolute;
            width: 470px;
            height: 470px;
            top: -290px;
            right: -245px;
            border: 1px solid rgba(220, 192, 112, .30);
            border-radius: 50%;
            transform: rotate(8deg);
            box-shadow:
                0 0 0 44px rgba(255, 255, 255, .015),
                0 0 0 88px rgba(255, 255, 255, .010);
            pointer-events: none;
        }

        .contact_new_section .contact_new_form_col::after {
            content: "";
            position: absolute;
            width: 580px;
            height: 1px;
            left: -120px;
            bottom: 90px;
            background: linear-gradient(90deg, transparent, rgba(208, 185, 110, .34), transparent);
            transform: rotate(43deg);
            pointer-events: none;
        }

        .contact_new_section .contact_new_message_kicker {
            display: flex;
            align-items: center;
            gap: 14px;
            text-transform: uppercase;
            letter-spacing: .38em;
            font-size: 10px;
            font-weight: 700;
            color: #f0eee5;
            margin-bottom: 5px;
        }

        .contact_new_section .contact_new_message_kicker::before,
        .contact_new_section .contact_new_message_kicker::after {
            content: "";
            width: 26px;
            height: 1px;
            background: #d2b66a;
        }

        .contact_new_section .contact_new_form_title {
            font-family: "Playfair Display", serif;
            font-size: clamp(3rem, 4.2vw, 5rem);
            line-height: .95;
            margin: 0 0 8px;
            color: #fffdf6;
            font-weight: 700;
            letter-spacing: -.035em;
        }

        .contact_new_section .contact_new_form_title span {
            color: #d5a94b;
        }

        .contact_new_section .contact_new_form_intro {
            margin: 0 0 15px;
            color: #eef3ef;
            font-size: 15px;
            line-height: 1.35;
            max-width: 600px;
        }

        .contact_new_section .contact_new_form_side {
            position: absolute;
            right: 38px;
            top: 50px;
            text-align: left;
            color: #fff;
        }

        .contact_new_section .contact_new_form_side i {
            display: block;
            font-size: 56px;
            color: #d9bc6d;
            margin-bottom: 8px;
        }

        .contact_new_section .contact_new_form_side span {
            display: block;
            text-transform: uppercase;
            font-size: 10px;
            line-height: 1.42;
            letter-spacing: .28em;
        }

        .contact_new_section .contact_new_form_side::after {
            content: "";
            display: block;
            width: 42px;
            height: 2px;
            background: #d0aa4f;
            margin-top: 9px;
            transform: rotate(-9deg);
        }

        .contact_new_section .form-label {
            color: #fff;
            font-size: 13px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .contact_new_section .contact_new_input_wrap {
            position: relative;
        }

        .contact_new_section .contact_new_input_wrap .field-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #68756f;
            z-index: 3;
            font-size: 14px;
        }

        .contact_new_section .contact_new_input_wrap.textarea-wrap .field-icon {
            top: 17px;
            transform: none;
        }

        .contact_new_section .form-control {
            height: 44px;
            border: 0;
            border-radius: 5px;
            box-shadow: none;
            background: #fff;
            padding-left: 42px;
            font-size: 13px;
            color: #213b32;
        }

        .contact_new_section textarea.form-control {
            min-height: 78px;
            height: 78px;
            resize: vertical;
            padding-top: 12px;
        }

        .contact_new_section .form-control:focus {
            box-shadow: 0 0 0 2px rgba(224, 191, 111, .35);
        }

        .contact_new_section .contact_new_submit {
            width: 305px;
            max-width: 100%;
            height: 48px;
            margin: 15px auto 0;
            border: 1px solid #d0ab5a;
            border-radius: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            color: #173e31;
            font-weight: 700;
            font-family: "Playfair Display", serif;
            background: linear-gradient(180deg, #ecd48f 0%, #d6ac4e 100%);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .6), 0 8px 20px rgba(0, 0, 0, .12);
            transition: .25s ease;
        }

        .contact_new_section .contact_new_submit:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        .contact_new_section .contact_new_footer_note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            margin-top: 14px;
            color: #e8eee9;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: .32em;
            white-space: nowrap;
        }

        .contact_new_section .contact_new_footer_note::before,
        .contact_new_section .contact_new_footer_note::after {
            content: "";
            width: 42px;
            height: 1px;
            background: #c9a754;
        }

        @media (max-width:1199.98px) {
            .contact_new_section .contact_new_script {
                position: static;
                margin: -8px auto 18px;
                width: max-content;
            }

            .contact_new_section .contact_new_info_card {
                min-height: 225px;
            }

            .contact_new_section .contact_new_form_side {
                display: none;
            }

            .contact_new_section .contact_new_form_col {
                padding-right: 30px;
            }
        }

        @media (max-width:991.98px) {
            .contact_new_section {
                padding-top: 18px;
            }

            .contact_new_section .contact_new_info_row {
                row-gap: 18px;
            }

            .contact_new_section .contact_new_info_card {
                min-height: 215px;
            }

            .contact_new_section .contact_new_map_col,
            .contact_new_section .contact_new_map_image {
                min-height: 440px;
            }

            .contact_new_section .contact_new_form_col {
                min-height: auto;
                padding: 30px 26px 28px;
            }
        }

        @media (max-width:767.98px) {
            .contact_new_section .contact_new_title {
                font-size: 3rem;
            }

            .contact_new_section .contact_new_subtitle {
                letter-spacing: .24em;
                margin-bottom: 22px;
            }

            .contact_new_section .contact_new_script {
                font-size: 2.15rem;
            }

            .contact_new_section .contact_new_info_card {
                padding-left: 18px;
                padding-right: 18px;
            }

            .contact_new_section .contact_new_info_text {
                font-size: 14px;
            }

            .contact_new_section .contact_new_map_col,
            .contact_new_section .contact_new_map_image {
                min-height: 370px;
            }

            .contact_new_section .contact_new_form_title {
                font-size: 3.2rem;
            }
        }

        @media (max-width:575.98px) {
            .contact_new_section {
                padding-top: 14px;
            }

            .contact_new_section .contact_new_kicker {
                gap: 10px;
                letter-spacing: .24em;
                font-size: 10px;
            }

            .contact_new_section .contact_new_kicker::before,
            .contact_new_section .contact_new_kicker::after {
                width: 24px;
            }

            .contact_new_section .contact_new_title {
                font-size: 2.45rem;
            }

            .contact_new_section .contact_new_subtitle {
                font-size: 9px;
                letter-spacing: .18em;
            }

            .contact_new_section .contact_new_info_card {
                min-height: 205px;
            }

            .contact_new_section .contact_new_form_col {
                padding: 24px 18px;
            }

            .contact_new_section .contact_new_message_kicker {
                letter-spacing: .25em;
            }

            .contact_new_section .contact_new_form_title {
                font-size: 2.85rem;
            }

            .contact_new_section .contact_new_footer_note {
                font-size: 8px;
                letter-spacing: .20em;
                gap: 10px;
            }

            .contact_new_section .contact_new_footer_note::before,
            .contact_new_section .contact_new_footer_note::after {
                width: 22px;
            }

            .contact_new_section .contact_new_map_btn {
                left: 16px;
                bottom: 16px;
                padding-right: 15px;
            }
        }
    </style>
</head>

<body>

    <section class="contact_new_section">
        <span class="contact_new_top_line"></span>

        <div class="container-fluid px-3 px-md-4 px-xl-5 contact_new_container">

            <!-- Heading -->
            <div class="contact_new_kicker">Get In Touch</div>

            <h2 class="contact_new_title">
                We’re Here for <span class="gold">Your Smile</span>
            </h2>

            <div class="contact_new_subtitle">
                Visit &nbsp; • &nbsp; Consult &nbsp; • &nbsp; Smile Brighter
            </div>

            <!-- <div class="contact_new_script">
                <span>More Than Dentistry</span>
                <span>A Healthier You</span>
            </div> -->

            <!-- Top contact cards -->
            <div class="row g-4 contact_new_info_row">

                <div class="col-12 col-lg-4">
                    <div class="contact_new_info_card">
                        <div class="contact_new_info_icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="contact_new_info_label">Our Address</div>

                        <p class="contact_new_info_text">
                            1st Floor, IVY DENTAL, JSR Arcade, 592, 13th Cross Rd, HMT Layout 4th Block,
                            Vidyaranyapura, Bengaluru, Karnataka 560097
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="contact_new_info_card">
                        <div class="contact_new_info_icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div class="contact_new_info_label">Email Us</div>

                        <p class="contact_new_info_text">
                            dr.chiranjeejevi@gmail.com
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="contact_new_info_card">
                        <div class="contact_new_info_icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="contact_new_info_label">Call Us</div>

                        <p class="contact_new_info_text">
                            +91 77606 05222
                        </p>

                        <div class="contact_new_tooth_outline">
                            <i class="fa-solid fa-tooth"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Lower Map + Contact form -->
            <div class="contact_new_lower_wrap">
                <div class="row g-0">

                    <!-- Map -->
                    <div class="col-12 col-lg-6 contact_new_map_col">
                        <img
                            src="ivy-dental-map.png"
                            class="contact_new_map_image"
                            alt="Ivy Dental location map">

                        <a
                            href="https://www.google.com/maps"
                            target="_blank"
                            rel="noopener"
                            class="contact_new_map_btn">
                            <span class="contact_new_map_btn_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>

                            <span>Get Directions</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Form -->
                    <div class="col-12 col-lg-6 contact_new_form_col">

                        <div class="contact_new_message_kicker">Send Us A Message</div>

                        <h3 class="contact_new_form_title">
                            Let’s Talk<span>...</span>
                        </h3>

                        <p class="contact_new_form_intro">
                            We’re always happy to help you take the next step<br class="d-none d-md-block">
                            towards a healthier, brighter smile.
                        </p>

                        <div class="contact_new_form_side">
                            <i class="fa-regular fa-tooth"></i>
                            <span>Your</span>
                            <span>Smile</span>
                            <span>Our</span>
                            <span>Priority</span>
                        </div>

                        <form action="#" method="post">

                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label">Your Name*</label>
                                    <div class="contact_new_input_wrap">
                                        <i class="fa-regular fa-user field-icon"></i>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            placeholder="Full Name"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label class="form-label">Your Email*</label>
                                    <div class="contact_new_input_wrap">
                                        <i class="fa-regular fa-envelope field-icon"></i>
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            placeholder="Email Address"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Number</label>
                                    <div class="contact_new_input_wrap">
                                        <i class="fa-solid fa-phone field-icon"></i>
                                        <input
                                            type="tel"
                                            class="form-control"
                                            name="number"
                                            placeholder="Number">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <div class="contact_new_input_wrap textarea-wrap">
                                        <i class="fa-regular fa-comment field-icon"></i>
                                        <textarea
                                            class="form-control"
                                            name="message"
                                            placeholder="Messages"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="contact_new_submit">
                                <span>Submit Now</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>

                        </form>

                        <div class="contact_new_footer_note">
                            We Look Forward To Hearing From You
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
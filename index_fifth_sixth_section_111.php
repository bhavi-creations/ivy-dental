<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ivy Dental Team & Testimonial Sections</title>

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
            --ifs-green: #064a34;
            --ifs-green-2: #0b5b3f;
            --ifs-green-3: #0d6544;
            --ifs-cream: #fbfaf2;
            --ifs-ivory: #fffdf7;
            --ifs-gold: #b88834;
            --ifs-gold-soft: #d8b96f;
            --ifs-text: #163e31;
            --ifs-muted: #55645c;
            --ifs-line: rgba(255, 255, 255, .16);
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: #fff;
            color: var(--ifs-text);
            font-family: "DM Sans", Arial, sans-serif;
        }

        /* ==========================================================
       SECTION 1 : index_fifth_section
       ========================================================== */
        .index_fifth_section {
            position: relative;
            overflow: hidden;
            padding: 42px 0 38px;
            background:
                radial-gradient(circle at 20% 5%, rgba(38, 112, 78, .28), transparent 24%),
                radial-gradient(circle at 78% 14%, rgba(45, 121, 85, .20), transparent 22%),
                linear-gradient(115deg, #0b5a3e 0%, #064832 48%, #0a563d 100%);
            color: #fff;
            isolation: isolate;
        }

        .index_fifth_section::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(255, 255, 255, .035) 1px, transparent 1px);
            background-size: 110px 100%;
            opacity: .18;
            z-index: -2;
        }

        .index_fifth_section::after {
            content: "";
            position: absolute;
            right: -120px;
            top: -80px;
            width: 430px;
            height: 430px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, .07), transparent 66%);
            z-index: -3;
        }

        .index_fifth_section .ifs-container {
            position: relative;
            max-width: 1460px;
            z-index: 3;
        }

        .index_fifth_section .ifs-left-copy {
            position: absolute;
            left: 15px;
            top: 6px;
            text-transform: uppercase;
            letter-spacing: .33em;
            font-size: 10px;
            line-height: 1.5;
            color: #eef1ec;
        }

        .index_fifth_section .ifs-left-copy::after {
            content: "";
            display: block;
            width: 38px;
            height: 1px;
            background: var(--ifs-gold-soft);
            margin-top: 10px;
        }

        .index_fifth_section .ifs-heading-wrap {
            text-align: center;
            margin-bottom: 34px;
        }

        .index_fifth_section .ifs-kicker {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            color: #f5e8bd;
            text-transform: uppercase;
            letter-spacing: .36em;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .index_fifth_section .ifs-kicker::before,
        .index_fifth_section .ifs-kicker::after {
            content: "";
            width: 58px;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d4b267);
        }

        .index_fifth_section .ifs-kicker::after {
            background: linear-gradient(90deg, #d4b267, transparent);
        }

        .index_fifth_section .ifs-title {
            margin: 0;
            font-family: "Playfair Display", serif;
            font-size: clamp(2.7rem, 4.5vw, 4.8rem);
            line-height: 1;
            font-weight: 700;
            letter-spacing: -.03em;
            color: #fffdf6;
        }

        .index_fifth_section .ifs-title .gold {
            color: #d4ae60;
        }

        .index_fifth_section .ifs-subtitle {
            margin-top: 12px;
            text-transform: uppercase;
            letter-spacing: .34em;
            font-size: 10px;
            color: #e8ece8;
        }

        .index_fifth_section .ifs-script {
            position: absolute;
            right: 3.5%;
            top: 70px;
            font-family: "Allura", cursive;
            font-size: 2.7rem;
            line-height: .78;
            color: #e1c37f;
            transform: rotate(-8deg);
            white-space: nowrap;
        }

        .index_fifth_section .ifs-script::after {
            content: "";
            display: block;
            width: 64px;
            height: 2px;
            background: #d6b364;
            margin: 9px 0 0 38px;
            transform: rotate(-7deg);
        }

        .index_fifth_section .ifs-team-row {
            position: relative;
            margin-top: 6px;
        }

        .index_fifth_section .ifs-card {
            position: relative;
            margin: 0 auto;
            max-width: 390px;
            min-height: 300px;
            border-radius: 20px;
            background: linear-gradient(180deg, #fffef7 0%, #f5f2e6 100%);
            border: 1px solid rgba(216, 184, 113, .70);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .13);
            overflow: visible;
            padding: 140px 26px 24px;
            text-align: center;
            color: var(--ifs-text);
        }

        .index_fifth_section .ifs-photo {
            position: absolute;
            width: 230px;
            height: 205px;
            left: 50%;
            top: -64px;
            transform: translateX(-50%);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(213, 181, 104, .72);
            box-shadow: 0 10px 24px rgba(20, 62, 44, .10);
            background: #fff;
        }

        .index_fifth_section .ifs-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .index_fifth_section .ifs-name {
            margin: 0 0 6px;
            font-size: 17px;
            font-weight: 700;
            color: #123e31;
            line-height: 1.25;
        }

        .index_fifth_section .ifs-role {
            margin: 0;
            font-size: 14px;
            color: #36544a;
            line-height: 1.35;
        }

        .index_fifth_section .ifs-role::after {
            content: "";
            display: block;
            width: 44px;
            height: 1px;
            margin: 12px auto 0;
            background: #d1b16a;
        }

        .index_fifth_section .ifs-clinic-blur {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 8% 55%, rgba(255, 255, 255, .06), transparent 24%),
                radial-gradient(circle at 92% 48%, rgba(255, 255, 255, .05), transparent 22%);
            pointer-events: none;
            z-index: -1;
        }

        @media(max-width:1199.98px) {
            .index_fifth_section .ifs-script {
                display: none
            }

            .index_fifth_section .ifs-card {
                max-width: 100%
            }

            .index_fifth_section .ifs-photo {
                width: 210px;
                height: 188px
            }
        }

        @media(max-width:991.98px) {
            .index_fifth_section {
                padding-top: 34px;
            }

            .index_fifth_section .ifs-left-copy {
                position: static;
                display: inline-block;
                margin-bottom: 22px;
            }

            .index_fifth_section .ifs-heading-wrap {
                margin-bottom: 74px;
            }

            .index_fifth_section .ifs-card {
                margin-bottom: 74px;
            }
        }

        @media(max-width:767.98px) {
            .index_fifth_section {
                padding: 28px 0 16px;
            }

            .index_fifth_section .ifs-title {
                font-size: 2.7rem;
            }

            .index_fifth_section .ifs-subtitle {
                letter-spacing: .22em;
                font-size: 9px;
            }

            .index_fifth_section .ifs-kicker {
                letter-spacing: .24em;
                font-size: 9px;
                gap: 10px;
            }

            .index_fifth_section .ifs-kicker::before,
            .index_fifth_section .ifs-kicker::after {
                width: 32px;
            }

            .index_fifth_section .ifs-card {
                padding-top: 128px;
                min-height: 280px;
            }

            .index_fifth_section .ifs-photo {
                width: 200px;
                height: 178px;
            }
        }

        /* ==========================================================
       SECTION 2 : index_sixth_section
       ========================================================== */
        .index_sixth_section {
            position: relative;
            overflow: hidden;
            padding: 46px 0 44px;
            background:
                radial-gradient(circle at 8% 10%, rgba(224, 234, 218, .72), transparent 20%),
                radial-gradient(circle at 90% 40%, rgba(239, 241, 232, .80), transparent 22%),
                linear-gradient(120deg, #f5f7ef 0%, #fffef8 48%, #edf3e9 100%);
            isolation: isolate;
        }

        .index_sixth_section::before {
            content: "";
            position: absolute;
            left: -120px;
            bottom: -95px;
            width: 520px;
            height: 220px;
            border-radius: 50%;
            background: rgba(220, 230, 214, .52);
            z-index: -3;
        }

        .index_sixth_section::after {
            content: "";
            position: absolute;
            width: 880px;
            height: 2px;
            left: 20%;
            bottom: 58px;
            background: linear-gradient(90deg, transparent, #caa252, transparent);
            transform: rotate(-8deg);
            opacity: .72;
            z-index: -2;
        }

        .index_sixth_section .iss-container {
            position: relative;
            max-width: 1460px;
            z-index: 3;
        }

        .index_sixth_section .iss-left {
            position: relative;
            padding-right: 30px;
        }

        .index_sixth_section .iss-kicker {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #164536;
            text-transform: uppercase;
            letter-spacing: .26em;
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .index_sixth_section .iss-kicker i {
            color: #1f6c4c;
            font-size: 10px;
        }

        .index_sixth_section .iss-title {
            margin: 0 0 12px;
            font-family: "Playfair Display", serif;
            font-size: clamp(2.8rem, 4.2vw, 4.4rem);
            line-height: 1;
            color: #0b4533;
            font-weight: 700;
            letter-spacing: -.03em;
        }

        .index_sixth_section .iss-title .gold {
            color: #b88731;
        }

        .index_sixth_section .iss-copy {
            margin: 0;
            color: #4d5a55;
            font-size: 14px;
            line-height: 1.55;
            max-width: 585px;
        }

        .index_sixth_section .iss-arrows {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 26px;
        }

        .index_sixth_section .iss-arrow {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1px solid #184737;
            background: transparent;
            color: #184737;
            display: grid;
            place-items: center;
            text-decoration: none;
            transition: .25s ease;
        }

        .index_sixth_section .iss-arrow:hover {
            background: #184737;
            color: #fff;
        }

        .index_sixth_section .iss-arrow-line {
            width: 58px;
            height: 1px;
            background: #ad9a70;
        }

        .index_sixth_section .iss-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 34px;
            text-transform: uppercase;
            letter-spacing: .26em;
            font-size: 9px;
            color: #4f665d;
            white-space: nowrap;
        }

        .index_sixth_section .iss-meta i {
            width: 1px;
            height: 16px;
            background: #ae9972;
            display: block;
        }

        .index_sixth_section .iss-testimonial {
            position: relative;
            min-height: 260px;
            padding: 34px 40px 28px;
            border-radius: 20px;
            color: #fff;
            background:
                radial-gradient(circle at 80% 25%, rgba(21, 111, 74, .22), transparent 25%),
                linear-gradient(145deg, #0b5b3e 0%, #074a34 60%, #063d2c 100%);
            box-shadow: 0 18px 38px rgba(18, 65, 45, .12);
            overflow: hidden;
        }

        .index_sixth_section .iss-quote {
            font-family: "Playfair Display", serif;
            font-size: 72px;
            line-height: .65;
            color: #fffdf6;
            margin-bottom: 8px;
        }

        .index_sixth_section .iss-stars {
            position: absolute;
            top: 34px;
            right: 38px;
            color: #e7bc61;
            letter-spacing: .06em;
            font-size: 16px;
        }

        .index_sixth_section .iss-review {
            color: #f4f4ed;
            font-size: 14px;
            line-height: 1.55;
            font-style: italic;
            max-width: 680px;
            margin: 0 0 22px;
        }

        .index_sixth_section .iss-divider {
            height: 1px;
            background: rgba(255, 255, 255, .22);
            margin-bottom: 18px;
        }

        .index_sixth_section .iss-user {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .index_sixth_section .iss-user-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255, 255, 255, .86);
            color: #fff;
            font-size: 23px;
        }

        .index_sixth_section .iss-user-name {
            font-size: 16px;
            font-weight: 700;
            color: #fff;
        }

        .index_sixth_section .iss-side-copy {
            position: absolute;
            right: 105px;
            top: 20px;
            text-transform: uppercase;
            letter-spacing: .31em;
            font-size: 10px;
            line-height: 1.55;
            color: #56695f;
        }

        .index_sixth_section .iss-side-copy::after {
            content: "";
            display: block;
            width: 34px;
            height: 1px;
            margin-top: 10px;
            background: #b8934f;
        }

        .index_sixth_section .iss-tooth {
            position: absolute;
            right: -45px;
            bottom: -70px;
            width: 330px;
            z-index: 2;
            pointer-events: none;
        }

        .index_sixth_section .iss-tooth img {
            width: 100%;
            display: block;
            mix-blend-mode: multiply;
        }

        .index_sixth_section .iss-bottom-note {
            position: absolute;
            right: 23%;
            bottom: 8px;
            text-transform: uppercase;
            letter-spacing: .32em;
            font-size: 9px;
            color: #2f5748;
            z-index: 4;
        }

        @media(max-width:1199.98px) {
            .index_sixth_section .iss-side-copy {
                display: none
            }

            .index_sixth_section .iss-tooth {
                width: 260px;
                right: -55px
            }

            .index_sixth_section .iss-bottom-note {
                right: 16%
            }
        }

        @media(max-width:991.98px) {
            .index_sixth_section {
                padding: 36px 0 34px;
            }

            .index_sixth_section .iss-left {
                padding-right: 0;
                margin-bottom: 28px;
            }

            .index_sixth_section .iss-bottom-note {
                position: static;
                margin-top: 24px;
                text-align: center;
            }

            .index_sixth_section .iss-tooth {
                width: 210px;
                opacity: .4;
            }
        }

        @media(max-width:767.98px) {
            .index_sixth_section {
                padding: 28px 0 26px;
            }

            .index_sixth_section .iss-title {
                font-size: 2.7rem;
            }

            .index_sixth_section .iss-copy {
                font-size: 13px;
            }

            .index_sixth_section .iss-meta {
                flex-wrap: wrap;
                justify-content: flex-start;
                white-space: normal;
                gap: 10px 14px;
            }

            .index_sixth_section .iss-testimonial {
                min-height: 240px;
                padding: 28px 24px 24px;
            }

            .index_sixth_section .iss-stars {
                position: static;
                margin-bottom: 12px;
            }

            .index_sixth_section .iss-quote {
                font-size: 60px;
            }

            .index_sixth_section .iss-review {
                font-size: 13px;
            }

            .index_sixth_section .iss-tooth {
                width: 170px;
                opacity: .28;
            }
        }

        @media(max-width:575.98px) {
            .index_fifth_section .ifs-card {
                padding-left: 18px;
                padding-right: 18px;
            }

            .index_fifth_section .ifs-name {
                font-size: 16px;
            }

            .index_sixth_section .iss-title {
                font-size: 2.45rem;
            }

            .index_sixth_section .iss-testimonial {
                border-radius: 16px;
            }
        }
    </style>
</head>

<body>

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

            <div class="ifs-script">
                Same<br>
                Care<br>
                Brighter<br>
                Smiles
            </div>

            <div class="row g-4 ifs-team-row">

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="doctor-1.jpg" alt="Dr. Chiranjeevi Reddy">
                        </div>

                        <h3 class="ifs-name">Dr. (Prof) Chiranjeevi Reddy BDS.MDS</h3>
                        <p class="ifs-role">Prosthodontist and Implantologist</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="doctor-2.jpg" alt="Dr. Divya Reddy">
                        </div>

                        <h3 class="ifs-name">Dr (Prof) Divya Reddy, BDS.MDS</h3>
                        <p class="ifs-role">Paediatric Dentist</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="ifs-card">
                        <div class="ifs-photo">
                            <img src="doctor-3.jpg" alt="Dr. Sridevi">
                        </div>

                        <h3 class="ifs-name">Dr. Sridevi</h3>
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

                    <div class="iss-arrows">
                        <a href="#" class="iss-arrow" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></a>
                        <span class="iss-arrow-line"></span>
                        <a href="#" class="iss-arrow" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>

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
                            Very professional and experienced doctor. Treatments and recommendations
                            are specific and personalized. Courteous Staff.
                        </p>

                        <div class="iss-divider"></div>

                        <div class="iss-user">
                            <div class="iss-user-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="iss-user-name">Anurag</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="iss-side-copy">
                Healthy<br>
                Smiles<br>
                Happier<br>
                Lives
            </div>

            <div class="iss-tooth">
                <img src="testimonial-tooth.jpg" alt="">
            </div>

            <div class="iss-bottom-note">
                Care Beyond Treatment
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
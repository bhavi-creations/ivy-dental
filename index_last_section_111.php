<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ivy Dental Appointment Section</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --ils-green: #084932;
            --ils-green2: #0b5b3c;
            --ils-green3: #0d6644;
            --ils-cream: #fbfaf3;
            --ils-ivory: #fffdf7;
            --ils-gold: #b98731;
            --ils-gold2: #d4b267;
            --ils-text: #173e31;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: #fff;
            font-family: "DM Sans", Arial, sans-serif;
            color: var(--ils-text);
        }

        .index_last_section {
            position: relative;
            overflow: hidden;
            padding: 54px 0 46px;
            background:
                radial-gradient(circle at 15% 8%, rgba(28, 81, 59, .17), transparent 18%),
                radial-gradient(circle at 84% 12%, rgba(236, 238, 227, .72), transparent 22%),
                linear-gradient(135deg, #f3f1e7 0%, #fbfaf3 43%, #f0f2e9 100%);
            isolation: isolate;
        }

        .index_last_section::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 330px;
            left: -175px;
            top: -180px;
            background:
                radial-gradient(circle at 75% 78%, rgba(33, 91, 67, .88), rgba(5, 56, 42, .98) 68%, #033226 100%);
            border-radius: 48% 52% 60% 40% / 58% 38% 62% 42%;
            transform: rotate(-8deg);
            z-index: -3;
        }

        .index_last_section::after {
            content: "";
            position: absolute;
            right: -170px;
            bottom: -95px;
            width: 500px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .58);
            transform: rotate(-12deg);
            z-index: -3;
        }

        .index_last_section .index_last_container {
            position: relative;
            z-index: 3;
            max-width: 1450px;
        }

        .index_last_section .ils-line-1,
        .index_last_section .ils-line-2,
        .index_last_section .ils-line-3 {
            position: absolute;
            height: 1.5px;
            background: linear-gradient(90deg, transparent, rgba(185, 135, 49, .68), transparent);
            pointer-events: none;
            z-index: -1;
        }

        .index_last_section .ils-line-1 {
            width: 320px;
            left: -15px;
            top: 67px;
            transform: rotate(12deg);
        }

        .index_last_section .ils-line-2 {
            width: 260px;
            left: 44px;
            bottom: 18px;
            transform: rotate(5deg);
            opacity: .45;
        }

        .index_last_section .ils-line-3 {
            width: 230px;
            right: 0;
            bottom: 40px;
            transform: rotate(-18deg);
            opacity: .35;
        }

        .index_last_section .ils-left-card {
            position: relative;
            border-radius: 28px;
            overflow: hidden;
            border: 1.5px solid rgba(207, 170, 85, .78);
            box-shadow: 0 18px 40px rgba(29, 64, 48, .10);
            min-height: 725px;
            background: #ece8dc;
        }

        .index_last_section .ils-left-card img {
            width: 100%;
            height: 100%;
            min-height: 725px;
            object-fit: cover;
            display: block;
        }

        .index_last_section .ils-left-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 28px;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .45);
            pointer-events: none;
            z-index: 3;
        }

        .index_last_section .ils-left-note {
            position: absolute;
            left: 28px;
            top: 48%;
            transform: translateY(-50%);
            width: 165px;
            min-height: 216px;
            padding: 36px 25px 24px;
            border-radius: 24px;
            color: #fff;
            background: linear-gradient(145deg, rgba(255, 255, 255, .20), rgba(255, 255, 255, .07));
            border: 1px solid rgba(220, 207, 172, .68);
            backdrop-filter: blur(12px);
            box-shadow: 0 18px 32px rgba(42, 56, 47, .12);
            z-index: 5;
        }

        .index_last_section .ils-left-note .big {
            font-family: "Playfair Display", serif;
            font-size: 27px;
            line-height: 1.05;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .index_last_section .ils-left-note .small {
            font-size: 14px;
            line-height: 1.3;
            opacity: .95;
        }

        .index_last_section .ils-left-note::after {
            content: "";
            display: block;
            width: 38px;
            height: 1px;
            margin-top: 18px;
            background: #fff1be;
        }

        .index_last_section .ils-benefits {
            position: absolute;
            left: 42px;
            right: 42px;
            bottom: 16px;
            min-height: 102px;
            padding: 18px 26px;
            border-radius: 22px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
            background: rgba(250, 248, 239, .95);
            border: 1px solid rgba(226, 218, 198, .95);
            box-shadow: 0 12px 28px rgba(31, 64, 49, .08);
            z-index: 5;
        }

        .index_last_section .ils-benefit {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0 16px;
            min-height: 62px;
        }

        .index_last_section .ils-benefit+.ils-benefit {
            border-left: 1px solid #c9c2b4;
        }

        .index_last_section .ils-benefit-icon {
            width: 42px;
            height: 42px;
            min-width: 42px;
            display: grid;
            place-items: center;
            color: #173e31;
            font-size: 26px;
        }

        .index_last_section .ils-benefit-text {
            font-size: 14px;
            line-height: 1.3;
            color: #263f36;
            font-weight: 600;
        }

        .index_last_section .ils-bottom-words {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 18px 18px 0 16px;
            color: #29483c;
            text-transform: uppercase;
            letter-spacing: .27em;
            font-size: 10px;
            white-space: nowrap;
        }

        .index_last_section .ils-bottom-words i {
            width: 1px;
            height: 18px;
            background: #a98c58;
            display: block;
            opacity: .7;
        }

        .index_last_section .ils-form-card {
            position: relative;
            min-height: 725px;
            padding: 44px 48px 36px;
            border-radius: 30px;
            overflow: hidden;
            color: #fff;
            background:
                radial-gradient(circle at 75% 22%, rgba(24, 114, 75, .30), transparent 28%),
                linear-gradient(145deg, #0b5a3d 0%, #06462f 58%, #073d2c 100%);
            border: 1px solid rgba(255, 255, 255, .08);
            box-shadow: 0 20px 42px rgba(19, 65, 46, .16);
        }

        .index_last_section .ils-form-card::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            right: -95px;
            top: -40px;
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 50%;
            pointer-events: none;
        }

        .index_last_section .ils-form-card::after {
            content: "";
            position: absolute;
            width: 360px;
            height: 1px;
            left: -60px;
            bottom: 90px;
            background: linear-gradient(90deg, transparent, rgba(205, 178, 104, .28), transparent);
            transform: rotate(42deg);
            pointer-events: none;
        }

        .index_last_section .ils-priority {
            color: #e6e8df;
            text-transform: uppercase;
            letter-spacing: .28em;
            font-size: 11px;
            margin-bottom: 18px;
        }

        .index_last_section .ils-priority::after {
            content: "";
            display: inline-block;
            width: 70px;
            height: 1px;
            background: rgba(216, 189, 126, .55);
            margin-left: 18px;
            vertical-align: middle;
        }

        .index_last_section .ils-title {
            margin: 0 0 28px;
            font-family: "Playfair Display", serif;
            font-size: clamp(3.4rem, 4.8vw, 5.7rem);
            line-height: .92;
            font-weight: 700;
            letter-spacing: -.045em;
            color: #fffdf6;
        }

        .index_last_section .ils-title .gold {
            color: #d5b064;
        }

        .index_last_section .ils-side-copy {
            position: absolute;
            right: 34px;
            top: 72px;
            text-transform: uppercase;
            font-size: 10px;
            line-height: 1.5;
            letter-spacing: .28em;
            color: #e6e8df;
            z-index: 3;
        }

        .index_last_section .ils-side-copy::after {
            content: "";
            display: block;
            width: 42px;
            height: 1px;
            margin-top: 12px;
            background: #d0b06d;
        }

        .index_last_section .ils-tooth-watermark {
            position: absolute;
            right: 150px;
            top: 42px;
            font-size: 120px;
            color: rgba(255, 255, 255, .07);
            z-index: 1;
        }

        .index_last_section .form-label {
            color: #fff;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .index_last_section .ils-field {
            position: relative;
        }

        .index_last_section .ils-field .icon-left {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #304a3f;
            font-size: 16px;
            z-index: 2;
        }

        .index_last_section .ils-field .icon-right {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #304a3f;
            font-size: 14px;
            z-index: 2;
        }

        .index_last_section .form-control,
        .index_last_section .form-select {
            height: 56px;
            border: 0;
            border-radius: 6px;
            background: #fffef9;
            color: #2b463b;
            padding-left: 52px;
            padding-right: 42px;
            font-size: 14px;
            box-shadow: none;
        }

        .index_last_section .form-control:focus,
        .index_last_section .form-select:focus {
            box-shadow: 0 0 0 2px rgba(211, 177, 99, .32);
        }

        .index_last_section .ils-submit {
            position: relative;
            height: 74px;
            border: 0;
            width: 100%;
            margin-top: 12px;
            border-radius: 40px;
            background: #fffdf6;
            color: #173e31;
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            overflow: hidden;
            box-shadow: 0 12px 24px rgba(0, 0, 0, .13);
        }

        .index_last_section .ils-submit::after {
            content: "";
            position: absolute;
            width: 66px;
            height: 66px;
            right: 5px;
            top: 4px;
            border-radius: 50%;
            background: linear-gradient(145deg, #0d5e40, #063e2c);
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .08);
        }

        .index_last_section .ils-submit i {
            position: absolute;
            right: 26px;
            z-index: 2;
            color: #fff8e6;
            font-size: 19px;
        }

        .index_last_section .ils-footer-note {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 20px;
            color: #e9ece7;
            text-transform: uppercase;
            letter-spacing: .28em;
            font-size: 9px;
        }

        .index_last_section .ils-footer-note::before {
            content: "";
            width: 42px;
            height: 1px;
            background: #c9aa64;
        }

        .index_last_section .ils-tooth-art {
            position: absolute;
            right: 2px;
            bottom: 18px;
            width: 220px;
            z-index: 2;
            pointer-events: none;
        }

        .index_last_section .ils-tooth-art img {
            width: 100%;
            display: block;
            filter: drop-shadow(0 12px 15px rgba(0, 0, 0, .12));
        }

        @media(max-width:1199.98px) {

            .index_last_section .ils-left-card,
            .index_last_section .ils-left-card img,
            .index_last_section .ils-form-card {
                min-height: 650px;
            }

            .index_last_section .ils-left-note {
                width: 150px;
                min-height: 198px;
            }

            .index_last_section .ils-benefits {
                left: 24px;
                right: 24px;
                padding: 16px 18px;
            }

            .index_last_section .ils-form-card {
                padding: 38px 34px 32px;
            }

            .index_last_section .ils-side-copy {
                right: 22px;
            }

            .index_last_section .ils-tooth-art {
                width: 185px;
            }
        }

        @media(max-width:991.98px) {
            .index_last_section {
                padding: 34px 0 32px;
            }

            .index_last_section .ils-left-card,
            .index_last_section .ils-left-card img {
                min-height: 620px;
            }

            .index_last_section .ils-form-card {
                min-height: auto;
            }

            .index_last_section .ils-side-copy,
            .index_last_section .ils-tooth-watermark {
                display: none;
            }

            .index_last_section .ils-tooth-art {
                width: 170px;
                opacity: .92;
            }

            .index_last_section .ils-submit {
                width: 75%;
            }
        }

        @media(max-width:767.98px) {
            .index_last_section {
                padding: 24px 0;
            }

            .index_last_section .ils-left-card,
            .index_last_section .ils-left-card img {
                min-height: 530px;
            }

            .index_last_section .ils-left-note {
                left: 16px;
                width: 136px;
                min-height: 178px;
                padding: 28px 20px 20px;
            }

            .index_last_section .ils-left-note .big {
                font-size: 23px;
            }

            .index_last_section .ils-benefits {
                left: 14px;
                right: 14px;
                bottom: 14px;
                grid-template-columns: 1fr;
                padding: 12px 16px;
                gap: 6px;
            }

            .index_last_section .ils-benefit {
                min-height: 44px;
                padding: 4px 0;
            }

            .index_last_section .ils-benefit+.ils-benefit {
                border-left: 0;
                border-top: 1px solid #d2cbbb;
                padding-top: 10px;
            }

            .index_last_section .ils-benefit-text {
                font-size: 13px;
            }

            .index_last_section .ils-bottom-words {
                flex-wrap: wrap;
                justify-content: center;
                font-size: 9px;
                gap: 10px 13px;
            }

            .index_last_section .ils-form-card {
                padding: 30px 20px 26px;
                border-radius: 24px;
            }

            .index_last_section .ils-title {
                font-size: 3.2rem;
            }

            .index_last_section .ils-priority {
                font-size: 9px;
                letter-spacing: .22em;
            }

            .index_last_section .ils-submit {
                width: 100%;
                height: 66px;
                font-size: 18px;
            }

            .index_last_section .ils-tooth-art {
                width: 135px;
                right: -18px;
                bottom: 8px;
                opacity: .5;
            }

            .index_last_section .ils-footer-note {
                max-width: 62%;
                line-height: 1.45;
            }
        }

        @media(max-width:575.98px) {

            .index_last_section .ils-left-card,
            .index_last_section .ils-left-card img {
                min-height: 500px;
            }

            .index_last_section .ils-left-note {
                width: 122px;
                min-height: 162px;
                top: 42%;
            }

            .index_last_section .ils-left-note .big {
                font-size: 20px;
            }

            .index_last_section .ils-left-note .small {
                font-size: 12px;
            }

            .index_last_section .ils-benefit-icon {
                width: 34px;
                height: 34px;
                min-width: 34px;
                font-size: 21px;
            }

            .index_last_section .ils-title {
                font-size: 2.8rem;
            }

            .index_last_section .form-control,
            .index_last_section .form-select {
                height: 52px;
            }
        }
    </style>
</head>

<body>

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

                        <form action="#" method="post" class="position-relative z-2">
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
                                        <!-- Appointment Now -->
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Root Canal | Ivy Dental</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Allura&family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        :root {
            --ivory-bg: #fbfcf7;
            --ivory: #fffdf6;
            --green: #073f2a;
            --green-2: #0a5a3a;
            --green-3: #126645;
            --sage: #dfe9d7;
            --sage-2: #edf3e9;
            --gold: #b78025;
            --gold-soft: #d8c18a;
            --ink: #17352c;
            --muted: #4f5b57;
            --line: #d8ded7;
            --peach: #f3dfc8;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            color: var(--ink);
            font-family: "DM Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #fff;
        }

        .root_canal_section {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at 8% 4%, rgba(211, 229, 207, .65), transparent 18%),
                radial-gradient(circle at 89% 50%, rgba(222, 235, 214, .58), transparent 19%),
                linear-gradient(115deg, #fffef9 0%, #fbfcf7 50%, #f3f8ee 100%);
            padding: 36px 0 42px;
            min-height: 100vh;
        }

        /* decorative reference-style curves */
        .root_canal_section:before {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            border: 1.5px solid rgba(18, 102, 69, .16);
            border-radius: 50%;
            top: -245px;
            left: -170px;
            box-shadow:
                0 0 0 24px rgba(18, 102, 69, .03),
                0 0 0 48px rgba(18, 102, 69, .02);
            pointer-events: none;
        }

        .root_canal_section:after {
            content: "";
            position: absolute;
            width: 560px;
            height: 210px;
            left: -100px;
            bottom: -135px;
            border-radius: 50%;
            background: rgba(225, 236, 219, .58);
            filter: blur(.2px);
            pointer-events: none;
        }

        .root_canal_container {
            position: relative;
            z-index: 2;
            max-width: 1460px;
        }

        .service-kicker {
            display: flex;
            align-items: center;
            gap: 14px;
            color: #0d6042;
            font-size: 12px;
            letter-spacing: .34em;
            font-weight: 700;
            text-transform: uppercase;
            margin: 48px 0 14px;
        }

        .service-kicker:before,
        .service-kicker:after {
            content: "";
            width: 33px;
            height: 1px;
            background: var(--gold);
            display: block;
            opacity: .85;
        }

        .root-title {
            font-family: "Playfair Display", serif;
            color: #073b29;
            font-size: clamp(3.2rem, 4.9vw, 5.45rem);
            line-height: .95;
            letter-spacing: -.035em;
            margin: 0;
            font-weight: 700;
        }

        @media (min-width:1500px) {
                   .root-title {
          
            font-size: 70px;
                   }
        }

        .root-subtitle {
            font-family: "Playfair Display", serif;
            color: #b07a27;
            /* font-size: clamp(1.65rem, 2.45vw, 2.35rem); */
            line-height: 1.15;
            margin: 14px 0 22px;
            font-weight: 600;
        }
        @media (min-width: 1201px) and  (max-width: 1400px) {
            .root-subtitle {
                font-size:21PX;
            }
        }
          @media (min-width: 1401px) {
            .root-subtitle {
                font-size:21PX;
            }
        }


        .root-copy {
            font-size: 16px;
            line-height: 1.48;
            color: #43514c;
            max-width: 410px;
            margin: 0;
        }

        .signature {
            font-family: "Allura", cursive;
            font-size: 3.55rem;
            line-height: .8;
            color: #183e32;
            margin-top: 18px;
            transform: rotate(-3deg);
            display: inline-block;
            position: relative;
            padding-bottom: 8px;
        }

        .signature:after {
            content: "";
            position: absolute;
            width: 94px;
            height: 4px;
            background: #b07810;
            bottom: -5px;
            right: -2px;
            transform: rotate(-12deg);
            border-radius: 10px;
        }

        .hero-wrap {
            position: relative;
            width: 100%;
            max-width: 650px;
            margin: 8px auto 0;
        }

        .hero-img {
            display: block;
            width: 100%;
            border-radius: 34px;
            box-shadow: 0 18px 35px rgba(20, 67, 47, .08);
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 26px 0 16px;
            font-weight: 700;
            font-size: 20px;
            color: #083e2c;
        }

        .section-heading:after {
            content: "";
            width: 34px;
            height: 1px;
            background: #c38a2b;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px 18px;
            max-width: 680px;
        }

        .feature-card {
            display: flex;
            align-items: center;
            gap: 14px;
            min-height: 102px;
            padding: 14px 18px;
            border-radius: 16px;
            background: linear-gradient(145deg, rgba(250, 252, 246, .94), rgba(241, 246, 236, .94));
            border: 1px solid rgba(218, 226, 214, .8);
            box-shadow: 0 8px 25px rgba(22, 68, 48, .035);
        }

        .feature-icon {
            width: 62px;
            height: 62px;
            min-width: 62px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(145deg, #0f6746, #07402b);
            color: #fff;
            font-size: 24px;
            box-shadow: 0 0 0 6px rgba(223, 233, 215, .85), inset 0 0 0 1px rgba(255, 255, 255, .16);
        }

        .feature-title {
            font-weight: 700;
            font-size: 16px;
            color: #0a3d2c;
            margin: 0 0 3px;
        }

        .feature-text {
            color: #56615d;
            font-size: 14px;
            line-height: 1.35;
            margin: 0;
        }

        .why-block {
            margin-top: 26px;
            max-width: 680px;
        }

        .why-title {
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 700;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .why-title:after {
            content: "";
            width: 34px;
            height: 1px;
            background: #c38a2b;
        }

        .why-copy {
            margin: 0;
            max-width: 640px;
            color: #4d5a55;
            font-size: 14px;
            line-height: 1.55;
        }

        .tooth-card {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 335px;
            margin-top: 22px;
            border-radius: 28px;
            background: linear-gradient(145deg, #f8faf4, #f6f8f1);
            border: 1px solid #edf0e7;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(22, 68, 48, .025);
        }

        .tooth-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .services-panel {
            background: linear-gradient(145deg, #0d5e3f 0%, #07402d 100%);
            color: #fff;
            border-radius: 17px;
            padding: 26px 30px 18px;
            box-shadow: 0 18px 42px rgba(9, 63, 43, .12);
        }

        .services-panel-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, .35);
        }

        .services-title {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            line-height: 1;
            margin: 0;
            font-weight: 700;
        }

        .services-small {
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: .28em;
            text-align: right;
            line-height: 1.35;
            opacity: .95;
        }

        .services-list {
            list-style: none;
            padding: 8px 0 0;
            margin: 0;
        }

        .services-list li {
            display: flex;
            align-items: center;
            gap: 13px;
            min-height: 41px;
            border-bottom: 1px solid rgba(255, 255, 255, .25);
            font-size: 14px;
            font-weight: 500;
        }

        .services-list li:last-child {
            border-bottom: 0
        }

        .services-list .s-icon {
            width: 24px;
            text-align: center;
            font-size: 18px;
            opacity: .95;
        }

        .services-list .s-text {
            flex: 1
        }

        .services-list .s-arrow {
            font-size: 14px;
            opacity: .95;
        }

        .contact-panel {
            margin-top: 10px;
            border-radius: 18px;
            padding: 18px 30px 22px;
            background: linear-gradient(150deg, #fffaf0, #f5e5d1);
            border: 1px solid #e8c891;
            box-shadow: 0 14px 35px rgba(38, 69, 52, .05);
        }

        .contact-panel h3 {
            font-family: "Playfair Display", serif;
            font-size: 27px;
            color: #093c2b;
            margin: 0 0 4px;
            font-weight: 700;
        }

        .contact-panel .lead-copy {
            font-size: 13px;
            color: #3f4f49;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .contact-line {
            height: 1px;
            background: #cfb48c;
            opacity: .8;
            margin: 6px 0 12px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 10px 0;
            color: #354842;
            font-size: 13px;
            line-height: 1.45;
        }

        .contact-item .round {
            width: 30px;
            height: 30px;
            min-width: 30px;
            border-radius: 50%;
            background: #0a5639;
            color: #fff;
            display: grid;
            place-items: center;
            margin-top: 1px;
        }

        .contact-btn {
            width: 100%;
            height: 50px;
            border: 0;
            border-radius: 8px;
            background: #075137;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            font-weight: 600;
            margin-top: 12px;
            transition: .25s ease;
            text-decoration: none;
        }

        .contact-btn:hover {
            background: #063d2b;
            color: #fff;
            transform: translateY(-1px)
        }

        /* subtle dot decoration */
        .dot-grid {
            position: absolute;
            width: 86px;
            height: 86px;
            right: 31%;
            top: 31%;
            opacity: .28;
            background-image: radial-gradient(circle, #6aa17d 1.4px, transparent 1.4px);
            background-size: 10px 10px;
            pointer-events: none;
        }

        @media (max-width:1199.98px) {
            .root_canal_section {
                padding-top: 18px
            }

            .service-kicker {
                margin-top: 20px
            }

            .root-copy {
                max-width: none
            }

            .signature {
                font-size: 3rem
            }

            .hero-wrap {
                max-width: 700px
            }

            .feature-grid {
                max-width: none
            }

            .why-block {
                max-width: none
            }

            .dot-grid {
                display: none
            }

            .services-panel {
                margin-top: 22px
            }
        }

        @media (max-width:767.98px) {
            .root_canal_section {
                padding: 18px 0 28px
            }

            .service-kicker {
                margin-top: 12px;
                font-size: 10px;
                letter-spacing: .24em;
            }

            .root-title {
                font-size: 3.25rem
            }

            .root-subtitle {
                font-size: 1.8rem
            }

            .root-copy {
                font-size: 15px
            }

            .signature {
                font-size: 2.85rem;
                margin-bottom: 12px
            }

            .hero-wrap {
                margin-top: 8px
            }

            .feature-grid {
                grid-template-columns: 1fr
            }

            .feature-card {
                min-height: 92px
            }

            .tooth-card {
                min-height: 280px
            }

            .services-panel {
                padding: 22px 20px 16px
            }

            .contact-panel {
                padding: 20px
            }
        }

        @media (max-width:575.98px) {
            .root-title {
                font-size: 2.8rem
            }

            .root-subtitle {
                font-size: 1.55rem
            }

            .services-title {
                font-size: 24px
            }

            .services-small {
                font-size: 8px
            }

            .services-list li {
                font-size: 13px
            }

            .contact-panel h3 {
                font-size: 24px
            }
        }
    </style>
</head>

<body>
    <section class="root_canal_section">
        <div class="dot-grid"></div>

        <div class="container-fluid px-3 px-md-4 px-xl-5 root_canal_container">
            <div class="row g-4 align-items-start">

                <!-- LEFT + CENTER CONTENT -->
                <div class="col-12 col-xl-8">
                    <div class="row g-4">

                        <!-- INTRO -->
                        <div class="col-12 col-lg-5">
                            <div class="service-kicker">Our Services</div>
                            <h1 class="root-title">Root Canal</h1>
                            <h2 class="root-subtitle">Relieve Pain, Save Your Smile</h2>

                            <p class="root-copy">
                                A root canal is a dental procedure that treats infection inside a tooth by removing the
                                infected pulp,
                                cleaning the canals, and sealing them to prevent reinfection. It helps preserve your
                                natural tooth,
                                restores function, and eliminates pain. Modern techniques make the treatment safe,
                                effective, and virtually painless.
                            </p>

                            <div class="signature">Pain Free<br>Healthy Smiles</div>
                        </div>

                        <!-- HERO IMAGE -->
                        <div class="col-12 col-lg-7 d-flex flex-column align-items-center justify-content-center">
                            <div class="hero-wrap ">
                                <img src="assets/img/service/rootcanal.png" class="hero-img img-fluid"
                                    alt="Root canal treatment">

                            </div>
                        </div>

                        <!-- FEATURES -->
                        <div class="col-12 col-lg-7">
                            <div class="section-heading">Key Features:</div>

                            <div class="feature-grid">
                                <div class="feature-card">
                                    <div class="feature-icon"><i class="fa-solid fa-tooth"></i></div>
                                    <div>
                                        <p class="feature-title">Painless Treatment</p>
                                        <p class="feature-text">Advanced techniques ensure maximum comfort.</p>
                                    </div>
                                </div>

                                <div class="feature-card">
                                    <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                    <div>
                                        <p class="feature-title">Save Natural Tooth</p>
                                        <p class="feature-text">Retains your original tooth structure.</p>
                                    </div>
                                </div>

                                <div class="feature-card">
                                    <div class="feature-icon"><i class="fa-solid fa-bacteria"></i></div>
                                    <div>
                                        <p class="feature-title">Eliminates Infection</p>
                                        <p class="feature-text">Removes bacteria and prevents spread.</p>
                                    </div>
                                </div>

                                <div class="feature-card">
                                    <div class="feature-icon"><i class="fa-regular fa-clock"></i></div>
                                    <div>
                                        <p class="feature-title">Long-Lasting Solution</p>
                                        <p class="feature-text">Restores function and prevents future problems.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="why-block">
                                <div class="why-title">Why It Matters?</div>
                                <p class="why-copy">
                                    Improving your lifestyle isn’t just about avoiding illness — it’s about living
                                    better,
                                    feeling stronger, and thinking clearer every day.
                                </p>
                            </div>
                        </div>

                        <!-- TOOTH ILLUSTRATION -->
                        <div class="col-12 col-lg-5">
                            <div class="tooth-card">
                                <!-- <img src="root-canal-illustration.png" alt="Root canal illustration" class="img-fluid"> -->
                                <img src="assets/img/home/root canal.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-12 col-xl-4">
                    
                    </div>
                    <aside class="services-panel">
                        <div class="services-panel-head">
                            <h2 class="services-title">Our Services</h2>
                            <div class="services-small">Complete Dental Care<br>Under One Roof</div>
                        </div>

                        <ul class="services-list">
                            <li><span class="s-icon"> <i class="fa-regular fa-tooth"></i></span><span
                                    class="s-text">Root
                                    canal</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-tooth"></i></span><span class="s-text">Teeth
                                    Filling</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-teeth-open"></i></span><span
                                    class="s-text">Clear Aligners</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-teeth"></i></span><span class="s-text">Dental
                                    braces</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-tooth"></i></span><span
                                    class="s-text">Dentures</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-regular fa-star"></i></span><span class="s-text">Teeth
                                    Whitening</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-screwdriver-wrench"></i></span><span
                                    class="s-text">Dental Implants</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-tooth"></i></span><span class="s-text">Teeth
                                    Scaling</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-regular fa-face-smile"></i></span><span
                                    class="s-text">Smile Makeover</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-crown"></i></span><span class="s-text">Crowns
                                    &amp; Bridges</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-tooth"></i></span><span class="s-text">Tooth
                                    Extraction</span><span class="s-arrow">→</span></li>
                            <li><span class="s-icon"><i class="fa-solid fa-tooth"></i></span><span class="s-text">Full
                                    Mouth Restoration</span><span class="s-arrow">→</span></li>
                        </ul>
                    </aside>

                    <aside class="contact-panel">
                        <h3>Need more info?</h3>
                        <p class="lead-copy">Our team is here to help you with expert advice and personalized care.</p>
                        <div class="contact-line"></div>

                        <div class="contact-item">
                            <div class="round"><i class="fa-solid fa-location-dot"></i></div>
                            <div>1st floor, IVY DENTAL, JSR Arcade, 592, 13th Cross Rd, HMT Layout 4th
                                Block,<br>Vidyaranyapura, Bengaluru, Karnataka 560097</div>
                        </div>

                        <div class="contact-item">
                            <div class="round"><i class="fa-solid fa-phone"></i></div>
                            <div>+91 77606 05222</div>
                        </div>

                        <div class="contact-item">
                            <div class="round"><i class="fa-solid fa-envelope"></i></div>
                            <div>dr.chiranjeejevi@gmail.com</div>
                        </div>

                        <a href="contact.php" class="contact-btn">
                            <span>CONTACT US</span>
                            <span>→</span>
                        </a>
                    </aside>

                    <?php include 'sub_service.php'; ?>`
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
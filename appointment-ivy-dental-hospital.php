<?php
include './db.connection/db_connection.php';

$selected_date = date('Y-m-d');

$slots = [
    "10:00 AM - 11:00 AM",
    "11:00 AM - 12:00 PM",
    "12:00 PM - 01:00 PM",
    "01:00 PM - 02:00 PM",
    "02:00 PM - 03:00 PM",
    "03:00 PM - 04:00 PM",
    "04:00 PM - 05:00 PM",
    "05:00 PM - 06:00 PM",
    "06:00 PM - 07:00 PM",
    "07:00 PM - 08:00 PM"
];
?>

<?php include('header.php'); ?>

<main>

    <!-- ==========================================================
     APPOINTMENT SECTION START
=========================================================== -->

    <section class="appointment_section" id="appointment">

        <!-- BACKGROUND DECORATIONS -->

        <div class="appointment_section_bg_shape appointment_section_bg_shape_1"></div>
        <div class="appointment_section_bg_shape appointment_section_bg_shape_2"></div>


        <div class="container-fluid appointment_section_container">

            <div class="appointment_section_card">


                <!-- =====================================================
                 LEFT PREMIUM BRANDING PANEL
            ====================================================== -->

                <div class="appointment_section_left">


                    <!-- Decorative Leaves -->

                    <!-- <div class="appointment_section_leaf_group appointment_section_leaf_top">

                    <i class="fa-solid fa-leaf"></i>
                    <i class="fa-solid fa-leaf"></i>
                    <i class="fa-solid fa-leaf"></i>

                </div>


                <div class="appointment_section_leaf_group appointment_section_leaf_bottom">

                    <i class="fa-solid fa-leaf"></i>
                    <i class="fa-solid fa-leaf"></i>
                    <i class="fa-solid fa-leaf"></i>
                    <i class="fa-solid fa-leaf"></i>

                </div> -->



                    <!-- =================================================
                     LOGO
                ================================================== -->

                    <div class="appointment_section_logo">

                        <img
                            src="assets/img/ivy logo.png"
                            alt="Ivy Dental Bangalore"
                            class="appointment_section_logo_img">

                    </div>



                    <!-- =================================================
                     HANDWRITTEN TEXT
                ================================================== -->

                    <div class="appointment_section_script d-none d-lg-block">

                        Healthy<br>
                        Smiles<br>
                        Happier<br>
                        Lives

                        <span></span>

                    </div>



                    <!-- =================================================
                     FEATURES
                ================================================== -->

                    <div class="appointment_section_left_features mt-5">


                        <!-- EASY BOOKING -->

                        <div class="appointment_section_left_feature">

                            <div class="appointment_section_feature_icon">

                                <i class="bi bi-calendar3"></i>

                            </div>


                            <div class="appointment_section_feature_text">

                                Easy<br>
                                Booking

                            </div>

                        </div>



                        <!-- SAFE -->

                        <div class="appointment_section_left_feature">

                            <div class="appointment_section_feature_icon">

                                <i class="bi bi-shield-check"></i>

                            </div>


                            <div class="appointment_section_feature_text">

                                Safe &amp;<br>
                                Confidential

                            </div>

                        </div>



                        <!-- QUICK RESPONSE -->

                        <div class="appointment_section_left_feature">

                            <div class="appointment_section_feature_icon">

                                <i class="bi bi-headset"></i>

                            </div>


                            <div class="appointment_section_feature_text">

                                Quick<br>
                                Response

                            </div>

                        </div>


                    </div>



                    <!-- =================================================
                     LARGE TOOTH VISUAL
                ================================================== -->

                    <div class="appointment_section_tooth_visual">

                        <div class="appointment_section_tooth">
                            <i class="fa-solid fa-tooth"></i>
                        </div>


                        <div class="appointment_section_tooth_shadow"></div>


                        <div class="appointment_section_pedestal">

                            <span></span>

                        </div>

                    </div>



                    <!-- =================================================
                     BOTTOM TEXT
                ================================================== -->

                    <div class="appointment_section_left_bottom">

                        <span>Care</span>

                        <i></i>

                        <span>Comfort</span>

                        <i></i>

                        <span>Confidence</span>

                    </div>


                </div>



                <!-- =====================================================
                 RIGHT APPOINTMENT FORM
            ====================================================== -->

                <div class="appointment_section_right">


                    <!-- TOP HEADING AREA -->

                    <div class="appointment_section_heading_area">


                        <div class="appointment_section_eyebrow">

                            <span>
                                Your Smile Our Priority
                            </span>

                            <i></i>

                        </div>



                        <h2 class="appointment_section_title">

                            Apply For

                            <span>
                                Appointment
                            </span>

                        </h2>


                    </div>



                    <!-- =================================================
                     RIGHT TOP DECORATION
                ================================================== -->

                    <div class="appointment_section_expert d-none d-md-block">


                        <div class="appointment_section_outline_tooth">

                            <i class="fa-solid fa-tooth"></i>

                        </div>


                        <div class="appointment_section_expert_text">

                            Expert<br>
                            Care For A<br>
                            Brighter<br>
                            Tomorrow

                            <span></span>

                        </div>


                    </div>



                    <!-- =================================================
                     FORM
                ================================================== -->

                    <form
                        action="save_appointment.php"
                        method="POST"
                        id="appointmentForm"
                        class="appointment_section_form">


                        <div class="row g-3 g-xl-4">


                            <!-- =========================================
                             NAME
                        ========================================== -->

                            <div class="col-md-6">

                                <div class="appointment_section_form_group">

                                    <label for="appointment_name">
                                        Name
                                    </label>


                                    <div class="appointment_section_input_wrap">

                                        <i class="bi bi-person-fill"></i>


                                        <input
                                            type="text"
                                            id="appointment_name"
                                            name="name"
                                            class="form-control"
                                            placeholder="Enter Your Name"
                                            required>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             EMAIL
                        ========================================== -->

                            <div class="col-md-6">

                                <div class="appointment_section_form_group">

                                    <label for="appointment_email">
                                        Email
                                    </label>


                                    <div class="appointment_section_input_wrap">

                                        <i class="bi bi-envelope-fill"></i>


                                        <input
                                            type="email"
                                            id="appointment_email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Email"
                                            required>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             PHONE
                        ========================================== -->

                            <div class="col-md-6">

                                <div class="appointment_section_form_group">

                                    <label for="appointment_phone">
                                        Contact Number
                                    </label>


                                    <div class="appointment_section_input_wrap">

                                        <i class="bi bi-telephone-fill"></i>


                                        <input
                                            type="tel"
                                            id="appointment_phone"
                                            name="phone"
                                            class="form-control"
                                            placeholder="Number"
                                            required>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             DATE
                        ========================================== -->

                            <div class="col-md-6">

                                <div class="appointment_section_form_group">

                                    <label for="appointment_date">
                                        Select Date
                                    </label>


                                    <div class="appointment_section_input_wrap appointment_section_date">

                                        <i class="bi bi-calendar3"></i>


                                        <input
                                            type="date"
                                            id="appointment_date"
                                            name="appointment_date"
                                            min="<?= date('Y-m-d') ?>"
                                            class="form-control"
                                            required>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             TIME SLOT
                        ========================================== -->

                            <div id="slotContainer" class="col-12">

                                <div class="appointment_section_form_group">

                                    <label for="time_slot">
                                        Select Time Slot
                                    </label>


                                    <div class="appointment_section_input_wrap appointment_section_select_wrap">

                                        <i class="bi bi-clock"></i>


                                        <select
                                            id="time_slot"
                                            name="time_slot"
                                            class="form-select"
                                            required>

                                            <option value="">
                                                -- First Select Date --
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             MESSAGE
                        ========================================== -->

                            <div class="col-12">

                                <div class="appointment_section_form_group">

                                    <label for="appointment_message">
                                        Message
                                    </label>


                                    <div class="appointment_section_input_wrap appointment_section_message">

                                        <i class="bi bi-chat-left-text"></i>


                                        <textarea
                                            id="appointment_message"
                                            name="message"
                                            class="form-control"
                                            placeholder="Message"
                                            rows="3"></textarea>

                                    </div>

                                </div>

                            </div>



                            <!-- =========================================
                             SUBMIT
                        ========================================== -->

                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="appointment_section_submit">

                                    <span>
                                        Book Appointment
                                    </span>


                                    <i class="bi bi-arrow-right"></i>

                                </button>

                            </div>


                        </div>


                    </form>


                </div>


            </div>

        </div>

    </section>

    <!-- ==========================================================
     APPOINTMENT SECTION END
=========================================================== -->

    <style>
        /* =========================================================
   APPOINTMENT SECTION MAIN
========================================================= */

        .appointment_section {

            position: relative;

            width: 100%;

            padding:
                75px 28px;

            overflow: hidden;

            font-family:
                "Montserrat",
                sans-serif;

            /* background:

                radial-gradient(circle at 5% 60%,
                    rgba(195, 216, 190, 0.34),
                    transparent 31%),

                radial-gradient(circle at 96% 16%,
                    rgba(176, 207, 180, 0.34),
                    transparent 25%),

                linear-gradient(135deg,
                    #f4f5ed 0%,
                    #fafaf4 47%,
                    #eff3e9 100%); */
                    background-color: #bbc7b4;

        }



        /* =========================================================
   BG SHAPES
========================================================= */

        .appointment_section_bg_shape {

            position: absolute;

            pointer-events: none;

        }


        .appointment_section_bg_shape_1 {

            width: 600px;

            height: 600px;

            left: -330px;

            bottom: -340px;

            border-radius: 50%;


            background:

                linear-gradient(40deg,
                    rgba(90, 145, 104, 0.10),
                    rgba(255, 255, 255, 0));

        }


        .appointment_section_bg_shape_2 {

            width: 500px;

            height: 680px;

            right: -290px;

            top: -350px;


            border-radius: 50%;


            transform:
                rotate(28deg);


            border-left:

                1px solid rgba(100, 150, 109, 0.06);

        }



        /* =========================================================
   CONTAINER
========================================================= */

        .appointment_section_container {

            position: relative;

            z-index: 2;

            max-width: 1420px;

            margin: 0 auto;

        }



        /* =========================================================
   MAIN CARD
========================================================= */

        .appointment_section_card {

            position: relative;

            width: 100%;


            display: grid;


            grid-template-columns:

                31% 69%;


            overflow: hidden;


            border-radius: 25px;


            background: #ffffff;


            box-shadow:

                0 25px 60px rgba(42, 80, 58, 0.13),

                0 0 22px rgba(216, 190, 113, 0.05);

        }



        /* =========================================================
   LEFT PANEL
========================================================= */

        .appointment_section_left {

            position: relative;

            min-height: 775px;


            overflow: hidden;


            background:

                radial-gradient(circle at 36% 35%,
                    rgba(255, 255, 255, 0.90),
                    transparent 36%),

                linear-gradient(180deg,
                    #fbfaf4 0%,
                    #f2f5e7 100%);


            border-radius:

                25px 0 0 25px;


            z-index: 2;

        }



        /* =========================================================
   GOLD CURVED DIVIDER
========================================================= */

        .appointment_section_left::after {

            content: "";

            position: absolute;


            top: -60px;

            right: -62px;


            width: 100px;

            height: 900px;


            border-radius: 50%;


            border-right:

                2px solid rgba(211, 176, 80, 0.73);


            box-shadow:

                6px 0 14px rgba(220, 190, 102, 0.07);


            pointer-events: none;

        }



        /* =========================================================
   LOGO
========================================================= */

        .appointment_section_logo {

            position: relative;

            z-index: 5;


            width: 77%;


            margin:

                42px auto 0;


            text-align: center;

        }


        .appointment_section_logo_img {

            width: 100%;

            max-width: 300px;

            height: auto;

        }



        /* =========================================================
   LEAVES
========================================================= */

        .appointment_section_leaf_group {

            position: absolute;

            z-index: 1;

            color: #36764c;

        }


        .appointment_section_leaf_group i {

            position: absolute;

            font-size: 75px;

            filter:

                drop-shadow(0 5px 5px rgba(27, 82, 48, 0.05));

        }



        /* TOP */

        .appointment_section_leaf_top {

            left: -8px;

            top: -10px;

        }


        .appointment_section_leaf_top i:nth-child(1) {

            transform:
                rotate(-40deg);

        }


        .appointment_section_leaf_top i:nth-child(2) {

            left: 47px;

            top: 7px;

            transform:
                rotate(-22deg) scale(.8);

        }


        .appointment_section_leaf_top i:nth-child(3) {

            left: -22px;

            top: 55px;

            transform:
                rotate(-68deg) scale(.65);

        }



        /* BOTTOM */

        .appointment_section_leaf_bottom {

            left: -15px;

            bottom: 142px;

        }


        .appointment_section_leaf_bottom i:nth-child(1) {

            transform:
                rotate(-35deg);

        }


        .appointment_section_leaf_bottom i:nth-child(2) {

            left: 55px;

            top: -8px;

            transform:
                rotate(-5deg) scale(.72);

        }


        .appointment_section_leaf_bottom i:nth-child(3) {

            left: 15px;

            top: 68px;

            transform:
                rotate(-73deg) scale(.77);

        }


        .appointment_section_leaf_bottom i:nth-child(4) {

            left: 82px;

            top: 56px;

            transform:
                rotate(27deg) scale(.6);

        }



        /* =========================================================
   HANDWRITTEN SCRIPT
========================================================= */

        .appointment_section_script {

            position: absolute;

            z-index: 4;


            left: 48px;

            top: 278px;


            font-family:

                "Allura",
                cursive;


            font-size: 39px;

            line-height: .82;


            color:

                #075840;


            transform:
                rotate(-8deg);

        }


        .appointment_section_script span {

            display: block;


            width: 48px;

            height: 2px;


            margin:

                20px 0 0 75px;


            background:

                #b69a45;


            transform:
                rotate(-8deg);

        }



        /* =========================================================
   LEFT FEATURES
========================================================= */

        .appointment_section_left_features {

            position: absolute;

            z-index: 5;


            right: 36px;

            top: 292px;


            display: flex;

            flex-direction: column;

            gap: 28px;

        }



        .appointment_section_left_feature {

            display: flex;

            align-items: center;

            gap: 15px;

        }



        .appointment_section_feature_icon {

            width: 63px;

            height: 63px;


            flex:

                0 0 63px;


            display: flex;

            align-items: center;

            justify-content: center;


            border-radius: 50%;


            color: #076044;


            font-size: 30px;


            background:

                radial-gradient(circle at 33% 30%,
                    #ffffff,
                    #f5f6ed 78%);


            border:

                1px solid rgba(41, 101, 73, 0.16);


            box-shadow:

                0 6px 14px rgba(32, 75, 53, 0.10),

                inset 0 0 10px rgba(255, 255, 255, 0.7);

        }



        .appointment_section_feature_text {

            font-size: 14px;

            line-height: 1.28;

            font-weight: 500;


            color: #164a39;

        }



        /* =========================================================
   TOOTH VISUAL
========================================================= */

        .appointment_section_tooth_visual {

            position: absolute;

            left: 24px;

            bottom: 105px;


            width: 200px;

            height: 245px;


            z-index: 4;

        }



        /* TOOTH */

        .appointment_section_tooth {

            position: absolute;

            left: 32px;

            bottom: 63px;


            z-index: 5;


            filter:

                drop-shadow(0 13px 10px rgba(74, 83, 71, 0.15));

        }



        .appointment_section_tooth i {

            font-size: 152px;


            /* color: #ffffff; */
            color:#bbc7b4;


            text-shadow:

                -7px -7px 13px rgba(255, 255, 255, 0.85),

                5px 8px 11px rgba(152, 158, 145, 0.27),

                inset 0 0 20px rgba(172, 172, 162, 0.18);

        }



        /* TOOTH SHADOW */

        .appointment_section_tooth_shadow {

            position: absolute;

            width: 138px;

            height: 29px;


            left: 32px;

            bottom: 54px;


            border-radius: 50%;


            background:

                rgba(77, 86, 72, 0.16);


            filter:
                blur(9px);

        }



        /* PEDESTAL */

        .appointment_section_pedestal {

            position: absolute;

            left: 5px;

            bottom: 8px;


            width: 194px;

            height: 61px;


            border-radius:

                50% 50% 5px 5px;


            background:

                linear-gradient(180deg,
                    #fafafa,
                    #e8e6df 67%,
                    #d8d6cf);


            box-shadow:

                0 7px 13px rgba(42, 68, 50, 0.10);

        }


        .appointment_section_pedestal span {

            position: absolute;

            left: 0;

            top: 15px;


            width: 100%;

            height: 1px;


            background:

                rgba(167, 165, 153, 0.40);

        }



        /* =========================================================
   BOTTOM WORDS
========================================================= */

        .appointment_section_left_bottom {

            position: absolute;

            bottom: 33px;

            left: 28px;

            right: 28px;


            display: flex;

            align-items: center;

            justify-content: center;

            gap: 15px;


            font-size: 9px;

            letter-spacing: 4px;

            text-transform: uppercase;


            color:

                #285c48;

        }



        .appointment_section_left_bottom i {

            width: 3px;

            height: 3px;


            border-radius: 50%;


            background:

                #b9a055;

        }



        /* =========================================================
   RIGHT PANEL
========================================================= */

        .appointment_section_right {

            position: relative;


            min-height: 775px;


            padding:

                45px 48px 52px 58px;


            background:

                radial-gradient(circle at 50% 5%,
                    rgba(31, 127, 86, 0.22),
                    transparent 32%),

                radial-gradient(circle at 90% 100%,
                    rgba(11, 67, 49, 0.33),
                    transparent 32%),

                linear-gradient(145deg,
                    #0c6447 0%,
                    #075d42 43%,
                    #064e39 100%);


            border-radius:

                42px 25px 25px 42px;


            z-index: 3;


            box-shadow:

                inset 0 1px 0 rgba(255, 255, 255, 0.025);

        }



        /* =========================================================
   HEADING
========================================================= */

        .appointment_section_heading_area {

            position: relative;

            z-index: 3;


            padding-right:
                240px;

        }



        /* EYEBROW */

        .appointment_section_eyebrow {

            display: flex;

            align-items: center;

            gap: 18px;


            margin-bottom: 17px;

        }



        .appointment_section_eyebrow span {

            font-size: 12px;

            letter-spacing: 6px;

            text-transform: uppercase;


            color:

                rgba(250, 244, 228, 0.88);

        }



        .appointment_section_eyebrow i {

            display: inline-block;


            width: 92px;

            height: 1px;


            background:

                rgba(229, 205, 140, 0.75);

        }



        /* TITLE */

        .appointment_section_title {

            margin: 0;


            font-family:

                "Cormorant Garamond",
                serif;


            font-size:

                clamp(45px,
                    4vw,
                    66px);


            line-height: .95;

            font-weight: 600;


            color:

                #fffaf0;

        }



        .appointment_section_title span {

            color:

                #e2c788;

        }



        /* =========================================================
   EXPERT
========================================================= */

        .appointment_section_expert {

            position: absolute;

            top: 41px;

            right: 42px;


            z-index: 4;


            display: flex;

            align-items: flex-start;

            gap: 19px;

        }



        .appointment_section_outline_tooth i {

            font-size: 85px;


            color: transparent;


            -webkit-text-stroke:

                2px #d6b868;


            filter:

                drop-shadow(0 0 5px rgba(220, 186, 96, 0.08));

        }



        .appointment_section_expert_text {

            font-size: 12px;

            line-height: 1.7;

            letter-spacing: 4px;


            text-transform: uppercase;


            color:

                rgba(251, 244, 226, 0.92);

        }



        .appointment_section_expert_text span {

            display: block;


            width: 46px;

            height: 1px;


            margin-top: 12px;


            background:

                rgba(217, 190, 120, 0.73);

        }



        /* =========================================================
   FORM
========================================================= */

        .appointment_section_form {

            position: relative;

            z-index: 4;


            margin-top: 37px;

        }



        /* LABEL */

        .appointment_section_form_group label {

            display: block;


            margin-bottom: 8px;


            font-size: 15px;

            font-weight: 600;


            color:

                #faf8ee;

        }



        /* INPUT WRAPPER */

        .appointment_section_input_wrap {

            position: relative;


            width: 100%;

        }



        /* LEFT ICON */

        .appointment_section_input_wrap>i {

            position: absolute;

            left: 19px;

            top: 50%;


            z-index: 3;


            transform:
                translateY(-50%);


            font-size: 24px;


            color:

                #076148;


            pointer-events: none;

        }



        /* INPUT */

        .appointment_section .form-control,

        .appointment_section .form-select {

            width: 100%;

            height: 57px;


            padding:

                0 18px 0 68px;


            border: 0;


            border-radius: 8px;


            outline: none;


            font-size: 15px;


            color:

                #555d58;


            background:

                linear-gradient(180deg,
                    #fffef9,
                    #f8f7f0);


            box-shadow:

                0 5px 13px rgba(1, 47, 31, 0.14),

                inset 0 1px 0 rgba(255, 255, 255, 1);


            transition:

                box-shadow .25s ease;

        }



        .appointment_section .form-control:focus,

        .appointment_section .form-select:focus {

            border: 0;


            box-shadow:

                0 0 0 2px rgba(225, 197, 121, 0.45),

                0 7px 17px rgba(1, 47, 31, 0.18);

        }



        /* TEXTAREA */

        .appointment_section_message>i {

            top: 23px;


            transform: none;

        }



        .appointment_section_message textarea {

            min-height: 82px;

            height: 82px;


            padding:

                17px 18px 12px 68px;


            resize: vertical;

        }



        /* =========================================================
   SUBMIT BUTTON
========================================================= */

        .appointment_section_submit {

            width: 100%;

            height: 73px;


            margin-top: 4px;


            display: flex;

            align-items: center;

            justify-content: center;

            gap: 46px;


            border: 0;


            border-radius: 38px;


            font-family:

                "Cormorant Garamond",
                serif;


            font-size: 24px;

            font-weight: 700;


            color:

                #07553e;


            cursor: pointer;


            background:

                radial-gradient(circle at 50% 0%,
                    #fff8dc,
                    transparent 60%),

                linear-gradient(180deg,
                    #f8ecca 0%,
                    #e6ca82 100%);


            box-shadow:

                0 7px 19px rgba(2, 60, 41, 0.20),

                0 0 18px rgba(228, 196, 116, 0.18),

                inset 0 2px 2px rgba(255, 255, 255, 0.74);


            transition:

                transform .25s ease,

                box-shadow .25s ease;

        }



        .appointment_section_submit i {

            font-size: 35px;

            font-weight: 300;

        }



        .appointment_section_submit:hover {

            transform:
                translateY(-2px);


            box-shadow:

                0 10px 24px rgba(2, 60, 41, 0.23),

                0 0 25px rgba(228, 196, 116, 0.26),

                inset 0 2px 3px rgba(255, 255, 255, 0.80);

        }



        /* =========================================================
   RESPONSIVE 1199
========================================================= */

        @media (max-width: 1199px) {

            .appointment_section {

                padding:

                    55px 20px;

            }


            .appointment_section_card {

                grid-template-columns:

                    34% 66%;

            }


            .appointment_section_right {

                padding:

                    42px 32px;

            }


            .appointment_section_heading_area {

                padding-right:
                    190px;

            }


            .appointment_section_outline_tooth i {

                font-size: 70px;

            }


            .appointment_section_expert_text {

                font-size: 10px;

                letter-spacing: 3px;

            }


            .appointment_section_script {

                font-size: 33px;

                left: 28px;

            }


            .appointment_section_left_features {

                right: 20px;

            }


            .appointment_section_feature_icon {

                width: 54px;

                height: 54px;

                flex-basis: 54px;

                font-size: 25px;

            }


            .appointment_section_feature_text {

                font-size: 12px;

            }

        }



        /* =========================================================
   RESPONSIVE 991
========================================================= */

        @media (max-width: 991px) {

            .appointment_section {

                padding:

                    45px 18px;

            }


            .appointment_section_card {

                grid-template-columns: 1fr;

            }


            .appointment_section_left {

                min-height: 660px;


                border-radius:

                    24px 24px 0 0;

            }


            .appointment_section_left::after {

                display: none;

            }


            .appointment_section_right {

                min-height: auto;


                border-radius:

                    30px 30px 24px 24px;


                padding:

                    45px 35px;

            }


            .appointment_section_logo {

                width: 340px;

                max-width: 70%;

            }


            .appointment_section_script {

                left: 12%;

                top: 250px;

            }


            .appointment_section_left_features {

                right: 14%;

                top: 250px;

            }


            .appointment_section_tooth_visual {

                left: 12%;

                bottom: 80px;

            }


            .appointment_section_heading_area {

                padding-right:
                    185px;

            }

        }



        /* =========================================================
   RESPONSIVE 767
========================================================= */

        @media (max-width: 767px) {

            .appointment_section {

                padding:

                    30px 12px;

            }


            .appointment_section_card {

                border-radius: 20px;

            }


            .appointment_section_left {

                min-height: 600px;

            }


            .appointment_section_logo {

                margin-top: 30px;

            }


            .appointment_section_script {

                left: 28px;

                top: 215px;


                font-size: 29px;

            }


            .appointment_section_left_features {

                right: 25px;

                top: 220px;


                gap: 21px;

            }


            .appointment_section_feature_icon {

                width: 48px;

                height: 48px;

                flex-basis: 48px;


                font-size: 21px;

            }


            .appointment_section_feature_text {

                font-size: 11px;

            }


            .appointment_section_tooth_visual {

                left: 18px;

                bottom: 75px;


                transform:

                    scale(.83);


                transform-origin:

                    bottom left;

            }


            .appointment_section_left_bottom {

                font-size: 7px;

                letter-spacing: 2px;

                gap: 9px;

            }


            .appointment_section_right {

                padding:

                    32px 20px 28px;

            }


            .appointment_section_heading_area {

                padding-right: 0;

            }


            .appointment_section_expert {

                position: relative;

                top: auto;

                right: auto;


                margin-top: 25px;

                margin-bottom: 24px;


                justify-content:
                    flex-end;

            }


            .appointment_section_outline_tooth i {

                font-size: 58px;

            }


            .appointment_section_expert_text {

                font-size: 9px;

            }


            .appointment_section_eyebrow span {

                font-size: 9px;

                letter-spacing: 3px;

            }


            .appointment_section_eyebrow i {

                width: 50px;

            }


            .appointment_section_title {

                font-size: 44px;

            }


            .appointment_section_form {

                margin-top: 10px;

            }


            .appointment_section_submit {

                height: 62px;

                font-size: 20px;

                gap: 25px;

            }


            .appointment_section_submit i {

                font-size: 28px;

            }

        }



        /* =========================================================
   RESPONSIVE 480
========================================================= */

        @media (max-width: 480px) {

            .appointment_section_left {

                min-height: 555px;

            }


            .appointment_section_logo {

                width: 250px;

                max-width: 74%;

            }


            .appointment_section_script {

                left: 20px;

                top: 195px;


                font-size: 25px;

            }


            .appointment_section_left_features {

                right: 15px;

                top: 198px;

            }


            .appointment_section_feature_icon {

                width: 43px;

                height: 43px;

                flex-basis: 43px;


                font-size: 19px;

            }


            .appointment_section_feature_text {

                font-size: 9px;

            }


            .appointment_section_tooth_visual {

                transform:

                    scale(.72);

            }


            .appointment_section_title {

                font-size: 37px;

            }


            .appointment_section_form_group label {

                font-size: 13px;

            }


            .appointment_section .form-control,

            .appointment_section .form-select {

                height: 53px;

                font-size: 13px;

            }


            .appointment_section_message textarea {

                height: 78px;

            }

        }
    </style>


    <script>
        document.getElementById('appointment_date').addEventListener('change', function() {
            const date = this.value;
            const slotSelect = document.getElementById('time_slot');

            slotSelect.innerHTML = '<option value="">Loading...</option>';

            fetch('get_slots.php?date=' + encodeURIComponent(date))
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Unable to load slots');
                    }
                    return response.json();
                })
                .then(data => {

                    if (data.isHoliday && data.type === 'fullday') {
                        alert('Holiday: ' + data.reason);
                        slotSelect.innerHTML = '<option value="">No Slots Available</option>';
                        return;
                    }

                    if (data.isHoliday) {
                        alert('Note: ' + data.reason);
                    }

                    let html = '<option value="">-- Select Slot --</option>';

                    if (!Array.isArray(data.slots) || data.slots.length === 0) {
                        slotSelect.innerHTML = '<option value="">No Slots Available</option>';
                        return;
                    }

                    data.slots.forEach(slot => {
                        const disabled = Number(slot.available) <= 0 ? 'disabled' : '';
                        const text = Number(slot.available) <= 0 ?
                            `${slot.time} (FULL)` :
                            `${slot.time} (${slot.available} Slots Available)`;

                        html += `<option ${disabled} value="${slot.time}">${text}</option>`;
                    });

                    slotSelect.innerHTML = html;
                })
                .catch(() => {
                    slotSelect.innerHTML = '<option value="">Error loading slots</option>';
                });
        });
    </script>

</main>

<?php include('footer.php'); ?>
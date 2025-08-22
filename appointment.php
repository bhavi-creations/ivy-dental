<?php include('header.php'); ?>



<main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb">
        <div class="ul-2-container">
            <h1 class="ul-breadcrumb-title">Appointment</h1>

            <ul class="ul-breadcrumb-nav">
                <li><a href="index.php">Home</a></li>
                <li class="separator"><i class="flaticon-right-arrow"></i></li>
                <li>Appointment</li>
            </ul>
        </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->


    <!-- APPOINTMENT SECTION START -->
    <section class="ul-inner-appointment ul-section-spacing">
        <div class="ul-inner-appointment-container">
            <h2 class="ul-inner-appointment-title appointment_section">Apply For Appointment</h2>
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

                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="ul-appointment-doctor">Select Doctor</label>
                            <select name="Doctor" id="ul-appointment-doctor">
                                <option value="none" data-placeholder="true">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                            <div id="ul-appointment-doctor-select-wrapper" class="position-relative"></div>
                        </div>
                    </div> -->
                    <!-- <div class="col-sm-12 col-12 col">
                        <div class="form-group select-wrapper">
                            <label for="ul-appointment-treatment">Select Treatment</label>
                            <select name="treatment" id="ul-appointment-treatment">
                                <option value="none" data-placeholder="true">Select Treatment</option>
                                <option value="treatment 1">Root canal</option>
                                <option value="treatment 2">Teeth Filling</option>
                                <option value="treatment 3">Clear Aligners</option>
                                <option value="treatment 4">Dental braces</option>
                                <option value="treatment 5">Dentures</option>
                                <option value="treatment 6">Teeth Whitening</option>
                                <option value="treatment 7">Dental Implants</option>
                                <option value="treatment 8">Teeth Scaling</option>
                                <option value="treatment 9">Smile Makeover</option>
                                <option value="treatment 10">Crowns & Bridges</option>
                                <option value="treatment 11">Tooth Extraction</option>
                                <option value="treatment 12">Full Mouth Restoration</option>

                            </select>
                            <div id="ul-appointment-treatment-select-wrapper" class="position-relative"></div>
                        </div> -->

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
    </section>
    <!-- APPOINTMENT SECTION END -->
</main>

<?php include('footer.php'); ?>
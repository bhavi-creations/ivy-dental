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
             <form id="appointmentForm"
                 method="POST"
                 action="save_appointment.php"
                 class="row appointment-form mx-auto">

                 <div class="col-md-6 mb-4">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
                 </div>

                 <div class="col-md-6 mb-4">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" required placeholder="Email">
                 </div>

                 <div class="col-md-6 mb-4">
                     <label>Contact Number</label>
                     <input type="text" name="phone" class="form-control" required placeholder="Number">
                 </div>

                 <div class="col-md-6 mb-4">
                     <label>Select Date</label>
                     <input type="date"
                         id="appointment_date"
                         name="appointment_date"
                         min="<?= date('Y-m-d') ?>"
                         class="form-control"
                         required>
                 </div>

                 <div id="slotContainer" class="col-md-12 mb-4">
                     <label>Select Time Slot</label>
                     <select id="time_slot" name="time_slot" class="form-control" required>
                         <option value="">-- First Select Date --</option>
                     </select>
                 </div>

                 <div class="col-md-12 mb-4">
                     <label>Message</label>
                     <textarea name="message" class="form-control" placeholder="Message"></textarea>
                 </div>

                 <div class="col-md-12">
                     <button type="submit" class="btn appointment-btn btn-lg w-100">
                         Book Appointment
                     </button>
                 
                 </div>

             </form>
         </div>
     </section>
     <!-- APPOINTMENT SECTION END -->
 </main>

 <script>
     document.getElementById('appointment_date').addEventListener('change', function() {
         const date = this.value;
         const slotSelect = document.getElementById('time_slot');
         slotSelect.innerHTML = '<option>Loading...</option>';

         fetch('get_slots.php?date=' + date)
             .then(r => r.json())
             .then(data => {

                 if (data.isHoliday && data.type == 'fullday') {
                     alert("Holiday: " + data.reason);
                     slotSelect.innerHTML = '<option>No Slots Available</option>';
                     return;
                 }

                 if (data.isHoliday) {
                     alert("Note: " + data.reason);
                 }

                 let html = '<option value="">--Select Slot--</option>';

                 data.slots.forEach(s => {
                     let dis = s.available <= 0 ? 'disabled' : '';
                     let text = s.available <= 0 ?
                         `${s.time} (FULL)` :
                         `${s.time} (${s.available} Slots Available)`;

                     html += `<option ${dis} value="${s.time}">${text}</option>`;
                 });

                 slotSelect.innerHTML = html;
             })
             .catch(() => {
                 slotSelect.innerHTML = '<option>Error loading slots</option>';
             });
     });
 </script>

 <?php include('footer.php'); ?>
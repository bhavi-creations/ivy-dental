<?php
include './db.connection/db_connection.php';

if (isset($_POST['submit'])) {
    $date   = $_POST['holiday_date'];
    $type   = $_POST['holiday_type'];
    $reason = $_POST['reason'];

    $conn->query("INSERT INTO holidays (holiday_date, holiday_type, reason) 
                  VALUES ('$date','$type','$reason')");

    echo "<script>alert('Holiday Added Successfully');</script>";
}
?>

<?php include 'header.php'; ?>

<style>
    body {
        background: #f4f6f9;
    }
    .holiday-card {
        max-width: 500px;
        margin: auto;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        background: #fff;
        padding: 30px;
    }
    .holiday-card h4 {
        font-weight: 600;
        color: #333;
    }
    .holiday-btn {
        width: 100%;
        background: linear-gradient(135deg, #1c482d, #1e5d36);
        border: none;
        padding: 12px;
        font-size: 16px;
        color: #fff;
        border-radius: 8px;
        transition: 0.3s;
    }
    .holiday-btn:hover {
        /* background: linear-gradient(135deg, green, ); */
            background: linear-gradient(135deg, #23a62da5, #215625a5);
    }
</style>

<div class="container my-5">
    <div class="holiday-card">
        <h4 class="text-center mb-4">➕ Add Holiday</h4>

        <form method="POST">
            <div class="form-group mb-3">
                <label class="mb-1">📅 Date</label>
                <input type="date" name="holiday_date" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label class="mb-1">⏰ Leave Type</label>
                <select name="holiday_type" class="form-control" required>
                    <option value="">Select Leave</option>
                    <option value="morning">Morning (8AM – 1PM)</option>
                    <option value="afternoon">Afternoon (2PM – 9PM)</option>
                    <option value="fullday">Full Day</option>
                </select>
            </div>

            <div class="form-group mb-4">
                <label class="mb-1">📝 Reason</label>
                <input type="text" name="reason" class="form-control" placeholder="Enter reason" required>
            </div>

            <button type="submit" name="submit" class="holiday-btn">
                Save Holiday
            </button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

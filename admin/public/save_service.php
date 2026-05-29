<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../db.connection/db_connection.php';

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$service_name = trim($_POST['service_name']);

if ($service_name == '') {
    die("Service Name Required");
}

if ($id == 0) {

    // INSERT
    $stmt = $conn->prepare("INSERT INTO services (service_name) VALUES (?)");

    if (!$stmt) {
        die("Prepare Failed: " . $conn->error);
    }

    $stmt->bind_param("s", $service_name);

    if (!$stmt->execute()) {
        die("Insert Failed: " . $stmt->error);
    }

    $stmt->close();

    header("Location: addservice.php?success=added");
} else {

    // UPDATE
    $stmt = $conn->prepare("UPDATE services SET service_name=? WHERE id=?");

    if (!$stmt) {
        die("Prepare Failed: " . $conn->error);
    }

    $stmt->bind_param("si", $service_name, $id);

    if (!$stmt->execute()) {
        die("Update Failed: " . $stmt->error);
    }

    $stmt->close();

    header("Location: addservice.php?success=updated");
}

exit();

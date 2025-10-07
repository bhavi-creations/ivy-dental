<?php
include '../../db.connection/db_connection.php';

$allowedImageFormats = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

// Generate unique filename
function generateUniqueFileName($fileName) {
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    return uniqid('file_') . '_' . time() . '.' . $ext;
}

// Upload file safely
function uploadFile($fileKey, $uploadDir, $allowedFormats = []) {
    if (!isset($_FILES[$fileKey]) || empty($_FILES[$fileKey]['name'])) {
        return ''; // No file uploaded
    }

    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
        die("Error: Failed to create upload directory for $fileKey.");
    }

    if (!is_writable($uploadDir)) {
        die("Error: Upload directory is not writable for $fileKey.");
    }

    $ext = strtolower(pathinfo($_FILES[$fileKey]['name'], PATHINFO_EXTENSION));
    if (!empty($allowedFormats) && !in_array($ext, $allowedFormats)) {
        die("Error: Invalid file format for $fileKey.");
    }

    if ($_FILES[$fileKey]['error'] !== UPLOAD_ERR_OK) {
        die("Upload error for $fileKey: " . $_FILES[$fileKey]['error']);
    }

    $fileName = generateUniqueFileName($_FILES[$fileKey]['name']);
    $targetPath = rtrim($uploadDir, '/') . '/' . $fileName;

    if (!move_uploaded_file($_FILES[$fileKey]['tmp_name'], $targetPath)) {
        die("Error uploading $fileKey. Check folder permissions.");
    }

    return $fileName;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $blog_id      = intval($_POST['id'] ?? 0);
    $title        = trim($_POST['title'] ?? '');
    $main_content = trim($_POST['main_content'] ?? '');
    $full_content = trim($_POST['full_content'] ?? '');
    $service      = trim($_POST['service'] ?? '');

    if (empty($title) || empty($main_content) || empty($full_content) || empty($service)) {
        die("Error: Required fields missing.");
    }

    $uploadsDir = __DIR__ . "/../uploads/photos/";
    $videosDir  = __DIR__ . "/../uploads/videos/";

    // Upload main files
    $title_image_path = uploadFile('title_image', $uploadsDir, $allowedImageFormats);
    $main_image_path  = uploadFile('main_image', $uploadsDir, $allowedImageFormats);
    $video_path       = uploadFile('video', $videosDir);

    // Sections
    $section_contents = [];
    $section_images   = [];
    for ($i = 1; $i <= 3; $i++) {
        $section_contents[$i] = $_POST["section{$i}_content"] ?? '';
        $section_images[$i]   = uploadFile("section{$i}_image", $uploadsDir, $allowedImageFormats);
    }

    // Preserve existing images if updating
    if ($blog_id > 0) {
        $existing = $conn->query("SELECT * FROM blogs WHERE id=$blog_id")->fetch_assoc();

        $title_image_path = $title_image_path ?: $existing['title_image'];
        $main_image_path  = $main_image_path ?: $existing['main_image'];
        $video_path       = $video_path ?: $existing['video'];

        for ($i = 1; $i <= 3; $i++) {
            $section_images[$i] = $section_images[$i] ?: $existing["section{$i}_image"];
        }

        $stmt = $conn->prepare("
            UPDATE blogs SET 
                title=?, main_content=?, full_content=?, 
                title_image=?, main_image=?, video=?, service=?,
                section1_content=?, section1_image=?,
                section2_content=?, section2_image=?,
                section3_content=?, section3_image=?
            WHERE id=?
        ");

        $stmt->bind_param(
            "sssssssssssssi",
            $title, $main_content, $full_content,
            $title_image_path, $main_image_path, $video_path, $service,
            $section_contents[1], $section_images[1],
            $section_contents[2], $section_images[2],
            $section_contents[3], $section_images[3],
            $blog_id
        );

    } else {
        $stmt = $conn->prepare("
            INSERT INTO blogs (
                title, main_content, full_content, title_image, main_image, video, service,
                section1_content, section1_image,
                section2_content, section2_image,
                section3_content, section3_image,
                created_at
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
        ");

        $stmt->bind_param(
            "sssssssssssss",
            $title, $main_content, $full_content,
            $title_image_path, $main_image_path, $video_path, $service,
            $section_contents[1], $section_images[1],
            $section_contents[2], $section_images[2],
            $section_contents[3], $section_images[3]
        );
    }

    if ($stmt->execute()) {
        header("Location: allBlog.php");
        exit;
    } else {
        die("Database Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>

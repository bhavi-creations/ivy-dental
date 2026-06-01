<?php
header('Content-Type: text/html; charset=UTF-8');

$host = 'localhost';
$serverName = $_SERVER['SERVER_NAME'] ?? '';
if ($serverName === 'localhost' || $serverName === '127.0.0.1') {
    $user = 'root';
    $pass = '';
    $db = 'ivydentals';
} else {
    $user = 'ivydentalbangalore';
    $pass = '4Mzi1YOL9TqVetr';
    $db = 'ivydentalbangalore';
}

mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_init();
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);

if (!@$conn->real_connect($host, $user, $pass, $db)) {
    echo "<p>Latest blogs are loading. Please refresh after a moment.</p>";
    exit;
}

$sql = "SELECT id, title, main_image, created_at FROM blogs ORDER BY created_at DESC LIMIT 2";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    echo "<p>No blog posts found.</p>";
    exit;
}

while ($row = $result->fetch_assoc()) {
    $blogId = (int) $row['id'];
    $title = htmlspecialchars($row['title'] ?? '', ENT_QUOTES, 'UTF-8');
    $createdAt = !empty($row['created_at']) ? date("d M Y", strtotime($row['created_at'])) : '';
    $image = trim($row['main_image'] ?? '');
    $imagePath = $image !== '' ? "./admin/uploads/photos/" . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') : "assets/img/default_blog.jpg";

    echo "<div class='col'>
        <div class='ul-2-blog'>
            <div class='ul-2-blog-img'>
                <img src='{$imagePath}' alt='Blog Image' loading='lazy' decoding='async'>
            </div>
            <div class='ul-2-blog-txt'>
                <div class='ul-2-blog-infos'>
                    <span>By Admin</span>
                    <span>{$createdAt}</span>
                </div>
                <h3 class='ul-2-blog-title'>
                    <a href='fullblog.php?id={$blogId}'>{$title}</a>
                </h3>
            </div>
        </div>
    </div>";
}

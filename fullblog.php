<?php
// Database connection (replace with your actual database connection details)
include './db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data
    $stmt = $conn->prepare("SELECT title, main_content, full_content, title_image, main_image, video FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $title_image, $main_image, $video);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid blog ID.";
    exit;
}

$conn->close();
?>

<?php include 'header.php'; ?>

<main>
    <div class="ul-blog-details ul-section-spacing">
        <div class="ul-container">
            <div class="row ul-bs-row gy-5">
                <!-- left/blog details -->
                <div class="col-lg-8 col-md-7">
                    <div class="ul-blog-details">
                        <div class="ul-inner-blog">



                            <div class="ul-inner-blog-txt">
                                <!-- <div class="ul-blog-infos">
                                    <span>By Admin</span>
                                    <span><?php echo date("d M Y", strtotime($created_at)); ?></span>
                                </div> -->

                                <!-- <h3 class="ul-inner-blog-title">
                                    <?php echo htmlspecialchars($title); ?>
                                </h3> -->

                                <div class="ul-service-details-txt ul-blog-details-txt">


                                    <?php
                                    // Show video if exists
                                    if (!empty($video)) {
                                        $video_path = "./admin/uploads/videos/{$video}";
                                        echo "<video class='main-video img-fluid' controls>
                                                <source src='{$video_path}' type='video/mp4'>
                                                Your browser does not support the video tag.
                                              </video>";
                                    }
                                    ?>

                                    <p><?php echo $main_content; ?></p>
                                    <div class="full-content">
                                        <?php echo $full_content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                <div class="col-lg-4 col-md-5">
                    <div class="ul-inner-sidebar">

                        <!-- search -->
                        <!-- <div class="ul-service-details-sidebar-widget ul-inner-sidebar-search">
                            <div class="ul-inner-sidebar-widget-content">
                                <form action="#" class="ul-blog-search-form">
                                    <input type="search" name="blog-search" id="ul-blog-search" placeholder="Search Here">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div> -->

                        <!-- categories -->
                        <!-- <div class="ul-service-details-sidebar-widget">
                            <span class="ul-service-details-sidebar-widget-title mb-2">Categories</span>
                            <ul class="ul-service-details-sidebar-links">
                                <li><a href="blog-2.php">Health & Wellness</a></li>
                                <li><a href="blog-2.php">Preventive Care</a></li>
                                <li><a href="blog-2.php">Nutrition & Lifestyle</a></li>
                                <li><a href="blog-2.php">Senior & Geriatric Care</a></li>
                                <li><a href="blog-2.php">Medical Education & Tips</a></li>
                                <li><a href="blog-2.php">Surgery & Recovery</a></li>
                            </ul>
                        </div> -->

                        <!-- recent posts -->
                        <div class="ul-service-details-sidebar-widget ul-inner-sidebar-posts">
                            <h3 class="ul-service-details-sidebar-widget-title">Recent Posts</h3>
                            <div class="ul-inner-sidebar-widget-content">
                                <div class="ul-inner-sidebar-posts">
                                    <?php
                                    // Sidebar posts dynamic
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT id, title, main_image, created_at FROM blogs ORDER BY created_at DESC LIMIT 3";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $sidebar_image_path = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "assets/img/default_blog.jpg";
                                            $sidebar_title = strlen($row['title']) > 40 ? substr($row['title'], 0, 40) . '...' : $row['title'];
                                            $sidebar_date = date("d M Y", strtotime($row['created_at']));

                                            echo "
                                            <div class='ul-inner-sidebar-post'>
                                                <div class='img'>
                                                    <img src='{$sidebar_image_path}' alt='Post Image'>
                                                </div>
                                                <div class='txt'>
                                                    <span class='date'><i class='flaticon-calendar'></i><span>{$sidebar_date}</span></span>
                                                    <h4 class='title'>
                                                        <a href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($sidebar_title) . "</a>
                                                    </h4>
                                                </div>
                                            </div>";
                                        }
                                    } else {
                                        echo "<p>No recent posts found.</p>";
                                    }
                                    $conn->close();
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<!-- ======= Footer ======= -->
<?php include('./footer.php'); ?>
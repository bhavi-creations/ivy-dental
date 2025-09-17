<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
    $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
    $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>





<?php include('header.php'); ?>

<main>
    <!-- BREADCRUMBS SECTION START -->
    <section class="ul-breadcrumb">
        <div class="ul-2-container">
            <h1 class="ul-breadcrumb-title">Our Blog</h1>

            <ul class="ul-breadcrumb-nav">
                <li><a href="index.php">Home</a></li>
                <li class="separator"><i class="flaticon-right-arrow"></i></li>
                <li>Our Blog</li>
            </ul>
        </div>
    </section>
    <!-- BREADCRUMBS SECTION END -->

    <!-- FILTER BUTTONS -->
    <div class="container">
        <div class="filter_buttons redirect_section mt-4">
            <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
            <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
            <a href="blogs.php?service=Dental Braces"><button class="redirect_blog_srivice">Dental Braces</button></a>
            <a href="blogs.php?service=Clear Aligners"><button class="redirect_blog_srivice">Clear Aligners</button></a>
            <a href="blogs.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
            <a href="blogs.php?service=Crown Bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
            <a href="blogs.php?service=Teeth Filling"><button class="redirect_blog_srivice">Teeth Filling</button></a>
            <a href="blogs.php?service=Dentures"><button class="redirect_blog_srivice">Dentures</button></a>
            <a href="blogs.php?service=Teeth Scaling"><button class="redirect_blog_srivice">Teeth Scaling</button></a>
            <a href="blogs.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
            <a href="blogs.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning</button></a>
            <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
            <a href="blogs.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
            <a href="blogs.php?service=Full Mouth Restoration"><button class="redirect_blog_srivice">Full Mouth Restoration</button></a>
        </div>
    </div>

    <!-- BLOG SECTION START -->
    <!-- BLOG SECTION START -->
    <section class="ul-blogs ul-section-spacing">
        <div class="ul-container">
            <div class="row ul-bs-row row-cols-1 row-cols-sm-2 row-cols-lg-3 ul-blogs-row">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";

                        echo "
                    <div class='col mb-4'>
                        <div class='ul-blog'>
                            <div class='ul-blog-img'>
                                <a href='service_detsils.php?id={$row['id']}'>
                                    <img src='{$image_path}' alt='Blog Image'>
                                </a>
                            </div>
                            <div class='ul-blog-txt'>
                                <a href='service_detsils.php?id={$row['id']}' class='ul-blog-title'>" . htmlspecialchars($row['title']) . "</a>
                                <div class='ul-blog-infos'>
                                    <div class='ul-blog-info'>
                                        <span class='icon'><i class='flaticon-calendar'></i></span>
                                        <span class='text'>" . date("d M Y", strtotime($row['created_at'])) . "</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <a href='service_detsils.php?id={$row['id']}' class='ul-blog-btn'>Read More <i class='flaticon-up-right-arrow'></i></a>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<p>No blog posts found.</p>";
                }
                ?>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->

    <!-- BLOG SECTION END -->
</main>

<?php include('footer.php'); ?>
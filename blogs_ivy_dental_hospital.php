<?php
include './db.connection/db_connection.php';

// ------------------------
// FETCH SERVICES
// ------------------------
$sql_services = "SELECT service_name FROM services ORDER BY service_name ASC";
$result_services = $conn->query($sql_services);

// ------------------------
// FETCH BLOGS
// ------------------------
// Get service filter from URL
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL
if (!empty($service)) {
    $stmt = $conn->prepare("SELECT id, title, main_content, main_image, created_at FROM blogs WHERE service = ? ORDER BY created_at DESC");
    $stmt->bind_param("s", $service);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT id, title, main_content, main_image, created_at FROM blogs ORDER BY created_at DESC");
}

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

    <!-- OUR SERVICES LIST -->
    <h2 class="d-flex justify-content-center mt-5">Our Services</h2>

    <div class="container mt-4">
        <div class="row g-2">

            <!-- All button -->
            <div class="col-6 col-sm-4 col-md-2">
                <a href="blogs_ivy_dental_hospital.php?service="
                    class="btn ul-btn <?= empty($service) ? 'btn-primary' : 'btn-outline-primary'; ?> w-100 mb-2">
                    All
                </a>
            </div>

            <!-- Service buttons -->
            <?php if ($result_services && $result_services->num_rows > 0): ?>
                <?php while ($srv = $result_services->fetch_assoc()): ?>
                    <div class="col-6 col-sm-4 col-md-2">
                        <a href="blogs_ivy_dental_hospital.php?service=<?= urlencode($srv['service_name']); ?>"
                            class="btn ul-btn <?= ($service === $srv['service_name']) ? 'btn-primary' : 'btn-outline-primary'; ?> w-100 mb-2">
                            <?= htmlspecialchars($srv['service_name']); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p>No Services Found</p>
                </div>
            <?php endif; ?>

        </div>
    </div>



    <!-- BREADCRUMBS SECTION END -->

    <!-- FILTER BUTTONS -->
    <!-- <div class="container">
        <div class="filter_buttons redirect_section mt-4">
            <a href="blogs_ivy_dental_hospital.php"><button class="redirect_blog_srivice">All</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Dental Braces"><button class="redirect_blog_srivice">Dental Braces</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Clear Aligners"><button class="redirect_blog_srivice">Clear Aligners</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Crown Bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Teeth Filling"><button class="redirect_blog_srivice">Teeth Filling</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Dentures"><button class="redirect_blog_srivice">Dentures</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Teeth Scaling"><button class="redirect_blog_srivice">Teeth Scaling</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=Full Mouth Restoration"><button class="redirect_blog_srivice">Full Mouth Restoration</button></a>
            <a href="blogs_ivy_dental_hospital.php?service=others"><button class="redirect_blog_srivice">Other Dental Related</button></a>
        </div>
    </div> -->

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
                                <a href='fullblog.php?id={$row['id']}'>
                                    <img src='{$image_path}' alt='Blog Image'>
                                </a>
                            </div>
                            <div class='ul-blog-txt'>
                                <a href='fullblog.php?id={$row['id']}' class='ul-blog-title'>" . htmlspecialchars($row['title']) . "</a>
                                <div class='ul-blog-infos'>
                                    <div class='ul-blog-info'>
                                        <span class='icon'><i class='flaticon-calendar'></i></span>
                                        <span class='text'>" . date("d M Y", strtotime($row['created_at'])) . "</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <a href='fullblog.php?id={$row['id']}' class='ul-blog-btn'>Read More <i class='flaticon-up-right-arrow'></i></a>
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
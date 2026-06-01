<?php
function ivy_visitor_widget_markup(): void
{
    ?>
    <style>
    #visitor-eye:hover .visitor-tooltip {
        display: block;
    }
    </style>

    <a href="visitor-analytics.php" id="visitor-eye">
        <img src="./assets/img/eye.png" style="width:30px;height:30px;" alt="Visitors" loading="lazy" decoding="async">
        <div class="visitor-tooltip" id="visitor-tooltip">
            <div>Total Website Visitors: <b id="visitor-total">...</b></div>
            <div>This Page Visitors: <b id="visitor-page">...</b></div>
        </div>
    </a>

    <script>
    window.addEventListener('load', function() {
        var runVisitorCount = function() {
            var page = location.pathname.split('/').pop() || 'index.php';
            fetch('view_count.php?ajax=1&page=' + encodeURIComponent(page), {
                cache: 'no-store',
                credentials: 'same-origin'
            })
                .then(function(response) { return response.ok ? response.json() : null; })
                .then(function(data) {
                    if (!data) return;
                    var total = document.getElementById('visitor-total');
                    var pageCount = document.getElementById('visitor-page');
                    if (total) total.textContent = data.total || 0;
                    if (pageCount) pageCount.textContent = data.page || 0;
                })
                .catch(function() {});
        };

        if ('requestIdleCallback' in window) {
            requestIdleCallback(runVisitorCount, { timeout: 2500 });
        } else {
            setTimeout(runVisitorCount, 1200);
        }
    });
    </script>
    <?php
}

if (empty($_GET['ajax'])) {
    ivy_visitor_widget_markup();
    return;
}

header('Content-Type: application/json');

$page = basename($_GET['page'] ?? ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$today = date('Y-m-d');

$servername = 'localhost';
$serverName = $_SERVER['SERVER_NAME'] ?? '';
if ($serverName === 'localhost' || $serverName === '127.0.0.1') {
    $username = 'root';
    $password = '';
    $dbname = 'ivydentals';
} else {
    $username = 'ivydentalbangalore';
    $password = '4Mzi1YOL9TqVetr';
    $dbname = 'ivydentalbangalore';
}

mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_init();
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);

if (!@$conn->real_connect($servername, $username, $password, $dbname)) {
    echo json_encode(['total' => 0, 'page' => 0]);
    exit;
}

$check = $conn->prepare("
    SELECT id FROM visitor_logs
    WHERE page_name = ? AND ip_address = ? AND visit_date = ?
    LIMIT 1
");
if ($check) {
    $check->bind_param("sss", $page, $ip, $today);
    $check->execute();
    $res = $check->get_result();

    if ($res && $res->num_rows == 0) {
        $city = 'Unknown';
        $ins = $conn->prepare("
            INSERT INTO visitor_logs
            (page_name, ip_address, visit_date, visited_at, city)
            VALUES (?, ?, ?, NOW(), ?)
        ");
        if ($ins) {
            $ins->bind_param("ssss", $page, $ip, $today, $city);
            $ins->execute();
        }
    }
}

$totalCount = 0;
$pageCount = 0;

$totalRes = $conn->query("
    SELECT COUNT(DISTINCT ip_address) AS total
    FROM visitor_logs
");
if ($totalRes) {
    $totalCount = (int) ($totalRes->fetch_assoc()['total'] ?? 0);
}

$pstmt = $conn->prepare("
    SELECT COUNT(DISTINCT ip_address) AS total
    FROM visitor_logs
    WHERE page_name = ?
");
if ($pstmt) {
    $pstmt->bind_param("s", $page);
    $pstmt->execute();
    $pageRes = $pstmt->get_result();
    if ($pageRes) {
        $pageCount = (int) ($pageRes->fetch_assoc()['total'] ?? 0);
    }
}

echo json_encode(['total' => $totalCount, 'page' => $pageCount]);

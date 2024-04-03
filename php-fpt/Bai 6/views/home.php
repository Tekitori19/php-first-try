<?php
require_once '../database.php';
require_once "../helpers.php";

// Số sản phẩm trên mỗi trang
$items_per_page = 10;

// Trang hiện tại (mặc định là trang 1 nếu không được chỉ định)
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính toán offset
$offset = ($current_page - 1) * $items_per_page;

// Chuẩn bị câu lệnh SQL với phân trang
$query = $pdo->prepare('SELECT * FROM products LIMIT :offset, :items_per_page');
$query->bindParam(':offset', $offset, PDO::PARAM_INT);
$query->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);

// Thực thi câu lệnh
$query->execute();

// Lấy tất cả dữ liệu
$products = $query->fetchAll();
?>

<h1>Products site</h1>

<?php if (empty($products)): ?>
    <h2>Không có sản phẩm</h2>
<?php else: ?>
    <ul>
        <?php foreach ($products as $product): ?>
            <a href='../views/detail.php?id=<?=$product["id"]?>'>
                <li style="margin-bottom: 30px;">
                    <div>Tên sản phẩm: <?=$product["name"]?></div>
                    <div>Giá sản phẩm: <?=$product["price"]?></div>
                </li>
            </a>
        <?php endforeach; ?>
    </ul>

    <!-- Phân trang -->
    <?php
    // Lấy tổng số sản phẩm
    $total_stmt = $pdo->query('SELECT COUNT(*) FROM products');
    $total_items = $total_stmt->fetchColumn();

    // Tính toán số trang
    $total_pages = ceil($total_items / $items_per_page);

    // Tạo liên kết phân trang
    echo '<div class="pagination">';
    
    // Liên kết "Trước"
    if ($current_page > 1) {
        echo "<a style='margin-left: 10px; margin-right: 10px;' href='?page=" . ($current_page - 1) . "'>&laquo; Trước</a>";
    }
    
    // Liên kết cho mỗi trang
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $current_page) {
            echo "<span style='margin-left: 10px; margin-right: 10px;' class='current'>$i</span>";
        } else {
            echo "<a style='margin-right: 10px;' href='?page=$i'>$i</a>";
        }
    }
    
    // Liên kết "Sau"
    if ($current_page < $total_pages) {
        echo "<a style='margin-left: 10px; margin-right: 10px;' href='?page=" . ($current_page + 1) . "'>Sau &raquo;</a>";
    }
    
    echo '</div>';
    ?>
<?php endif; ?>
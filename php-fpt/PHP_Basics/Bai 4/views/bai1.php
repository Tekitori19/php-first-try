<?php
require_once '../database.php';
require_once "../helpers.php";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
];

// Chuẩn bị câu lệnh
$query = $pdo->prepare('SELECT * FROM products', $options);

// Thực thi câu lệnh
$query->execute();

// Lấy tất cả dữ liệu
$products = $query->fetchAll();

?>

<h1>Products site</h1>

<?php if (empty($products)): ?>
    <h2>Không có sản phẩn</h2>
<?php else: ?>
    <ul>
        <?php foreach ($products as $product): ?>
            <li style="margin-bottom: 30px;">
                <div>Tên sản phẩm: <?=$product["name"]?></div>
                <div>Giá sản phẩm: <?=$product["price"]?></div>
                <div>Mô tả sản phẩm: <?=$product["description"]?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


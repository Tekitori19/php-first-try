<?php
require_once "../database.php";
require_once "../helpers.php";

$id = $_GET["id"] ?? '';

$params = [
    'id' => $id,
];

$query = $pdo->prepare("SELECT * FROM products WHERE id = :id");

$query->execute($params);

$product = $query->fetch();

?>
<div>
    <a href="../views/home.php">&lt;Home</a>
    
</div>

<?php if ($id && is_numeric($id) && !empty($product)):?>
    <div>Tên sản phẩm: <?=$product["name"]?></div>
    <div>Giá sản phẩm: <?=$product["price"]?></div>
    <div>Mô tả sản phẩm: <?=$product["description"]?></div>
    <?php else:?>
        <div>Không có sản phẩm</div>
<?php endif ;?>
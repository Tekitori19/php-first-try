<?php
    require 'database.php';

    try {
        $stmt = $pdo->prepare('SELECT * FROM SACH');
        $stmt->execute();
        $datas = $stmt->fetchAll();
    } catch (\Throwable $th) {
        
    }
?>

<?php foreach ($datas as $data): ?>
    <div>
        <h2>Tên sách: <?= $data->TENSACH?></h2>
        <div>
            <img src=<?= $data->HINHANH?> >
        </div>
        <p><?= $data->TACGIA?></p>
        <p><?= $data->GIATIEN?></p>
        <p><?= $data->NHAXUATBAN?></p>
    </div>
<?php endforeach; ?>
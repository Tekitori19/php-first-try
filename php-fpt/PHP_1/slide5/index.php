<?php

$str = "mysql:host=localhost;dbname=wd18303_db;port=3306";


try {
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    $pdo = new PDO($str, 'root', '', $options);

    $stm = $pdo->prepare('SELECT * FROM sinhvien');
    $stm->execute();
    $datas = $stm->fetchAll();
} catch (PDOException $e) {
    throw new Error("Khong the ket noi db ". $e->getMessage());
}
?>
<a href="insert.php">Thêm mới</a>
<ul style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-around; list-style: none;">
    <?php foreach ($datas as $data): ?>
        <li style="display:flex; flex-direction: column; background-color: aqua; padding:10px; border-radius: 10px; width: 20%; margin-bottom: 20px; justify-content: center; align-items: center;">
            <div>
                <img src="uploadFiles/<?= $data->Avatar?>" style="width: 100px; height: 100px">
            </div>
            <p> <?= $data->MaSV?></p>
            <p> <?= $data->TenSV?></p>
            <p> <?= $data->Diem?></p>
        </li>
    <?php endforeach; ?>
</ul>
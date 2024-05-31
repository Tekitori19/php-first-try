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

<ul style="display: flex; flex-direction: row; justify-content: space-around; list-style: none;">
    <?php foreach ($datas as $data): ?>
        <li style="background-color: aqua; padding:10px; border-radius: 10px">
            <p> <?= $data->MaSV?></p>
            <p> <?= $data->TenSV?></p>
            <p> <?= $data->Diem?></p>
        </li>
    <?php endforeach; ?>
</ul>
<?php
require_once 'db.php';
$stm = $pdo->prepare('SELECT * FROM sinhvien');
$stm->execute();
$datas = $stm->fetchAll();
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
            <div><a href="">Sửa</a></div>
            <div><a href="xoasinhvien.php?masv=<?= $data->MaSV?>">Xóa</a></div>
        </li>
    <?php endforeach; ?>
</ul>
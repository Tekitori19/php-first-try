<?php
require_once('index.php');


if (isset($_POST['submit'])) {
    $values = [
        'ten' => $_POST['ten'] ?? '',
        'ma' => $_POST['ma'] ?? '',
        'diem' => $_POST['diem'] ?? 1
    ];

    $stm = $pdo->prepare("INSERT INTO sinhvien (MaSV, TenSV, Diem) VALUES (:ma, :ten, :diem)");
    $stm->execute($values);
    header("location: insert.php");
}


?>

<form action="insert.php" method="post">
    <div>
        <label for="ten">Tên:</label>
        <input type="text" name="ten" id="ten">
    </div>
    <div>
        <label for="ma">Mã sv:</label>
        <input type="text" name="ma" id="ma">
    </div>
    <div>
        <label for="diem">Điểm:</label>
        <input type="text" name="diem" id="diem">
    </div>
    <div>
        <button type="submit" name="submit">Gửi</button>
    </div>
</form>
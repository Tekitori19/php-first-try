<?php
require_once('index.php');


if (isset($_POST['submit'])) {
    if (isset($_FILES['ava'])) {
        $picture = $_FILES['ava'];
        $path = __DIR__ . '/uploadFiles';
        if (!is_dir($path))
            mkdir($path);
        // Hàm di chuyển file
        if ( move_uploaded_file( $picture['tmp_name'],
                __DIR__ . '/uploadFiles/' . $picture['name'])) {
            echo 'Upload file thành công!';

            $values = [
                'ten' => $_POST['ten'] ?? '',
                'ma' => $_POST['ma'] ?? '',
                'diem' => $_POST['diem'] ?? 1,
                'ava' => $picture['name'] ?? 'macdinh.png',
            ];
        
            $stm = $pdo->prepare("INSERT INTO sinhvien (MaSV, TenSV, Diem, Avatar) VALUES (:ma, :ten, :diem, :ava)");
            $stm->execute($values);
            header("location: insert.php");

        } else {
            echo 'Upload file không thành công!';
        }
    }

}


?>

<a href="index.php">Trang chủ</a>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="ava">Ảnh đại diện:</label>
        <input type="file" name="ava" id="ava">
    </div>
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
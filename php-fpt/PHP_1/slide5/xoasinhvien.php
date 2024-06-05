<?php
if (isset($_GET['masv'])) {
    require_once 'db.php';
    $sql = 'DELETE FROM sinhvien WHERE MaSV = :masv;';
    $stm = $pdo->prepare($sql);
    $param = [
        'masv' => $_GET['masv'] ?? ''
    ];
    $stm->execute($param);
    header("location: index.php");
} else {
    echo "Sinh viên không tồn tại";
}
?>

<h1>Bạn có chắc muốn xóa</h1>
<form action="xoasinhvien.php?masv=<?= $_GET['masv']?>;delete=" method="get"></form>
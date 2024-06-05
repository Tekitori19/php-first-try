<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenTK = $_POST['tenTK'];
    $newMatKhau = password_hash($_POST['newMatKhau'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("UPDATE TaiKhoan SET MatKhau = :mk WHERE TenTK = :tk");
    
    if ($stmt->execute(['mk' => $newMatKhau, 'tk' => $tenTK])) {
        echo "Mật khẩu đã được thay đổi!";
    } else {
        echo "Lỗi: " . $stmt->errorInfo();
    }
}
?>
<!-- HTML form for forgot password -->
<form method="post" action="forgot-password.php">
    <input type="text" name="tenTK" placeholder="Tên tài khoản" required>
    <input type="password" name="newMatKhau" placeholder="Mật khẩu mới" required>
    <button type="submit">Đặt lại mật khẩu</button>
</form>

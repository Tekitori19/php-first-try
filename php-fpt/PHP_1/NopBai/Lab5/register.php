<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenTK = $_POST['tenTK'];
    $matKhau = password_hash($_POST['matKhau'], PASSWORD_BCRYPT);

    $params = [
        'tentk' => $tenTK,
        'mk' => $matKhau,
    ];

    $stmt = $pdo->prepare("INSERT INTO TaiKhoan (TenTK, MatKhau) VALUES (:tentk, :mk)");
    
    if ($stmt->execute($params)) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $stmt->errorInfo();
    }
}
?>

<form method="post" action="register.php">
    <input type="text" name="tenTK" placeholder="Tên tài khoản" required>
    <input type="password" name="matKhau" placeholder="Mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>

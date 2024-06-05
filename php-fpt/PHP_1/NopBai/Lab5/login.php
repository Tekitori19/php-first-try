<?php
require_once 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenTK = $_POST['tenTK'];
    $matKhau = $_POST['matKhau'];

    $params = [
        'tk' => $tenTK
    ];

    $stmt = $pdo->prepare("SELECT MaTK, MatKhau FROM TaiKhoan WHERE TenTK = :tk");
    $stmt->execute($params);
    $user = $stmt->fetch();

    if ($user) {
        if (password_verify($matKhau, $user->MatKhau)) {
            $_SESSION['maTK'] = $user->MaTK;
            echo "Đăng nhập thành công!";
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }
}

?>

<form method="post" action="login.php">
    <input type="text" name="tenTK" placeholder="Tên tài khoản" required>
    <input type="password" name="matKhau" placeholder="Mật khẩu" required>
    <button type="submit">Đăng nhập</button>
</form>

<?php if (isset($_SESSION['maTK'])): ?>
<form action="logout.php" method="post">
    <input type="hidden" name="logout">
    <button type="submit">Đăng xuất</button>
</form>
<?php endif;?>
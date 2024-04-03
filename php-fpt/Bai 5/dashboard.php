<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Hiển thị tên người dùng đã đăng nhập
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Xin chào, <?php echo $username; ?>!</p>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>
</html>

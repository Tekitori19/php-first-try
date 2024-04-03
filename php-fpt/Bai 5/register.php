<?php
require_once "database.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        // Lấy dữ liệu từ biểu mẫu
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mã hóa mật khẩu

        // Thêm người dùng mới vào cơ sở dữ liệu
        $stmt = $conn->prepare("INSERT INTO users (fullname, password, phone_number) VALUES (:username, :password, '0123456798')");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Đăng ký thành công. <a href='login.php'>Đăng nhập</a>";
    } catch(PDOException $e) {
        echo "Lỗi đăng ký: " . $e->getMessage();
    }

    // Đóng kết nối
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>

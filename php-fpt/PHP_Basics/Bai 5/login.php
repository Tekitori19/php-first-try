<?php
require_once "database.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        // Lấy dữ liệu từ biểu mẫu
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra người dùng trong cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT * FROM users WHERE fullname = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) { // Kiểm tra mật khẩu
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Tên người dùng hoặc mật khẩu không chính xác.";
        }
    } catch(PDOException $e) {
        echo "Lỗi đăng nhập: " . $e->getMessage();
    }

    // Đóng kết nối
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
</body>
</html>

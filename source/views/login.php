<?php
session_start();
require_once("../controller/AuthController.php");

$authController = new AuthController();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Xử lý đăng nhập khi form được submit
    $authController->login($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

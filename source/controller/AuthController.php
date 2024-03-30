<?php
   // controllers/AuthController.php
require "../config/ConnectDB.php";
class AuthController {
    public function login($conn) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Thực hiện truy vấn SQL
            $check_account = "SELECT id, email, mat_khau, ten_nguoidung, vai_tro FROM taikhoan WHERE email='$username' AND mat_khau ='$password'";
            $result = $conn->query($check_account);

            // Kiểm tra kết quả của truy vấn
            if ($result && $result->num_rows > 0) {
                // Lấy thông tin người dùng từ kết quả truy vấn
                $user = $result->fetch_assoc();

                // Lưu thông tin người dùng vào session
                $_SESSION['user'] = $user;

                // Chuyển hướng đến trang dashboard hoặc trang khác tùy thuộc vào quyền của người dùng
                header("Location: dashboard.php");
                exit;
            } else {
                // Hiển thị thông báo lỗi đăng nhập
                echo "Login failed. Check username and/or password.";
            }
        }

        // Bao gồm tệp xem đăng nhập
        require_once "../views/login.php";
    }
}


?>

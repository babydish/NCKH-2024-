<?php
   // controllers/AuthController.php
class AuthController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = Auth::login($username, $password);
            
            if ($user) {
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
        require_once "views/login.php";
    }

    public function logout() {
        // Xóa session và chuyển hướng người dùng đến trang đăng nhập
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;
    }
}

// controllers/DashboardController.php
class DashboardController {
    public function index() {
        // Kiểm tra quyền truy cập của người dùng
        if ($_SESSION['user']->getRole() !== 'admin') {
            // Nếu không có quyền truy cập, chuyển hướng về trang không có quyền
            header("Location: unauthorized.php");
            exit;
        }

        // Hiển thị trang dashboard
        require_once "views/dashboard.php";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Status</title>
</head>
<body>
    <h2>Database Connection Status</h2>
    <?php
    $host = 'localhost'; // Thay đổi tùy thuộc vào máy chủ MySQL của bạn
    $username = 'root'; // Thay đổi tùy thuộc vào người dùng MySQL của bạn
    $password = ''; // Thay đổi tùy thuộc vào mật khẩu của người dùng MySQL của bạn
    $dbname = 'du_lich_an_uong'; // Thay đổi tùy thuộc vào tên cơ sở dữ liệu MySQL của bạn

    // Kết nối đến cơ sở dữ liệu MySQL
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }
    echo "Kết nối thành công đến cơ sở dữ liệu MySQL.";
    
    
    ?>
</body>
</html>

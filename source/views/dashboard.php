<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <?php
    // Kiểm tra xem session user có tồn tại không trước khi truy cập thuộc tính role
    if (isset($_SESSION['user'])) {
        echo "<p>Welcome, {$_SESSION['user']->getUsername()}!</p>";
        echo "<p>Your role: {$_SESSION['user']->getRole()}</p>";
    } else {
        echo "<p>Welcome to the dashboard. Please login to continue.</p>";
    }
    ?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

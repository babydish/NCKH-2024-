
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
    // Kiểm tra trạng thái kết nối đến cơ sở dữ liệu
    $host = 'your_host';
    $dbname = 'your_database_name';
    $username = 'your_username';
    $password = 'your_password';

    try {
        $connection = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
        echo "<p>Connection to database successful!</p>";
    } catch (PDOException $e) {
        echo "<p>Failed to connect to database: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>

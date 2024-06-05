<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styleregister.css">
</head>
<body>
    <form action="register.php" method="POST">
    <div class="container">
        <h2 class="h2">Register</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <label for="level">Level</label>
        <select id="level" name="level" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button class="submit">Register</button>
        <button type="submit" onclick="window.location.href='index.php';">Login</button>
      
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect input data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        
        // Example connection to a MySQL database (replace with your own database information)
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "user";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the new user into the database
        $sql = "INSERT INTO login (username, password, level) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $level);

        if ($stmt->execute()) {
            echo "Registrasi Berhasil!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
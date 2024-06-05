<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "user";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    // Update password baru ke database
    $sql = "UPDATE login SET password='$new_password' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Password berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lupa Sandi</title>
    <link rel="stylesheet" type="text/css" href="styleregister.css">
    
</head>
<body>
  <div class="container">
</head>
<body>
    <h2>Lupa Sandi</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username" required><br>
        Password Baru: <input type="password" name="new_password" required><br>
        <input type="submit" value="Ubah Password">
        <button type="submit" onclick="window.location.href='index.php';">Login</button>
    </form>
</body>
</html>

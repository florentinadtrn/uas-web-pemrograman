<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesidebar.css">
</head>
<body>
<?php
// Fungsi untuk logout
function logout() {
    session_start();
    // Menghapus semua data sesi
    session_unset();
    // Menghancurkan sesi
    session_destroy();
    // Mengarahkan pengguna ke halaman login
    header("Location: index.php");
    exit;
}

// Tindakan logout jika tombol "Logout" diklik
if (isset($_GET['logout'])) {
    logout();
}
?>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

<header>
    <div class="settings">Settings</div>
</header>

<div class="sidebar">
    <h2>User Dashboard</h2>
    <a href="price_list_page.php">Flowers List</a>
    <a href="shop.php">Shop</a>
    <a href="?logout=true">Logout</a>
</div>

<div class="main-content">
    <h1>Selamat datang di Halaman Kami</h1>
    <p>Silakan pilih fitur yang ingin Anda gunakan dari menu di sebelah kiri.</p>
</div>
</body>
</html>
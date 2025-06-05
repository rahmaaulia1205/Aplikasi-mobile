<?php
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'namadb'; // mengganti'namadb' dengan nama database di phpMyAdmin

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika berhasil, bisa menambahkan notifikasi ini:
// echo "Koneksi berhasil!";
?>
?>
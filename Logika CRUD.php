<?php
<?php
include 'koneksi.php';

// CREATE
if (isset($_POST['simpan_barang'])) {
    $nama = $_POST['nama_barang'];
    $desc = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $conn->query("INSERT INTO barang (nama_barang, deskripsi, stock) VALUES ('$nama', '$desc', $stock)");
    header("Location: index.php");
}

// DELETE
if (isset($_GET['hapus_barang'])) {
    $id = $_GET['hapus_barang'];
    $conn->query("DELETE FROM barang WHERE id = $id");
    header("Location: index.php");
}
?>
?>
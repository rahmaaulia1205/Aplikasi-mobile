<?php
<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="proses.php" method="POST">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br>
        <input type="number" name="stock" placeholder="Stock" required><br>
        <button type="submit" name="simpan_barang">Simpan</button>
    </form>

    <h2>Daftar Barang</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Nama</th><th>Deskripsi</th><th>Stock</th><th>Aksi</th>
        </tr>
        <?php
        $barang = $conn->query("SELECT * FROM barang");
        while ($row = $barang->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['deskripsi']}</td>
                <td>{$row['stock']}</td>
                <td>
                    <a href='proses.php?hapus_barang={$row['id']}' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
?>
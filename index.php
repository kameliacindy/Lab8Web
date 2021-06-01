<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1><hr>

        <a href="tambah.php">Tambah Barang</a>
		<br><br>

        <div class="main">
            <table border="1px" cellpadding="2">
            <tr>
                <th style="width:180px;">Gambar</th>
                <th style="width:180px;">Nama Barang</th>
                <th style="width:100px;">Kategori</th>
                <th style="width:120px;">Harga Jual</th>
                <th style="width:120px;">Harga Beli</th>
                <th>Stok</th>
                <th style="width:120px;">Aksi</th>
            </tr>

            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= $row['harga_beli'];?></td>
                <td><?= $row['harga_jual'];?></td>
                <td><?= $row['stok'];?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
                    <a href="hapus.php?id=<?= $row['id_barang']; ?>" onclick="return confirm('Anda yakin ingin menghapusnya?');">Hapus</a>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>


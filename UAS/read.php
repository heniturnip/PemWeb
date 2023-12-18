<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php
// Mendeklarasikan bahwa file ini membutuhkan (require) file 'function.php', yang berisi fungsi-fungsi yang diperlukan untuk interaksi, yaitu fungsi tambah
require 'database.php';

// Menambahkan logika untuk mengambil data dari database
$query = "SELECT * FROM mahasiswa"; // Ganti nama_tabel dengan nama tabel yang sesuai
$result = mysqli_query($conn, $query);

// Memasukkan hasil query ke dalam array $mahasiswa
$mahasiswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Data Akademik</h1>

<a href="form.php">Tambah data akademik mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Kata Kunci" autocomplete="off">
    <button type="submit" name="cari"> <a href="hapus.php" onclick="return confirm('Apa Anda Yakin Data Ini Dihapus?');">Hapus</a>Cari</button>
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
		<th>Id</th>
		<th>Nama</th>
        <th>NIM</th>
		<th>Gender</th>
        <th>Kode Mata Kuliah</th>
        <th>Nilai</th>
        <th>Bobot</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
			<td><?= $row["id"]; ?></td>
			<td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
			<td><?= $row["gender"]; ?></td>
            <td><?= $row["kodemk"]; ?></td>
            <td><?= $row["nilai"]; ?></td>
            <td><?= $row["bobot"]; ?></td>
            <td>
                <a href="update.php">Ubah</a> |
                <a href="hapus.php" onclick="return confirm('Apa Anda Yakin Data Ini Dihapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>

</body>
</html>
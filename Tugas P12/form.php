heni artha uli br turnip <br>
121140080

<!-- form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Barang</title>
</head>

<body>
    <h1>Form Data Barang</h1>
    <form action="prosesinput.php" method="post" enctype="multipart/form-data">
        Nama Barang: <input type="text" name="nama_barang" required><br>
        Harga: <input type="text" name="harga" required><br>
        Gambar: <input type="file" name="gambar" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
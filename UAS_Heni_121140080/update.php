<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php 
// Mendeklarasikan bahwa file ini membutuhkan (require), yang berisi fungsi-fungsi yang diperlukan untuk interaksi, yaitu fungsi tambah
require 'database.php';

    if (isset($_GET['id'])) {
    	$id = $_GET['id'];

        $query = "SELECT * FROM nama_tabel WHERE id = $id"; // Ganti nama_tabel sesuai dengan nama tabel Anda
        $result = mysqli_query($conn, $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update</title>
    <link rel="stylesheet" href="clientside.css">
</head>
<body>
	<form action="updt.php" method="post">
		<fieldset>
			<legend>Edit:</legend>
			<br />
			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
			<div>
                    <label for="nama"> Nama : </label><br>
                    <input type="text"  id="nama" name="nama" required><br>
                    <span class="error" id="namaError"></span><br>
                
                    <label for="nim"> NIM : </label><br>
                    <input type="text"  id="nim" name="nim" required><br>
                    <span class="error" id="nimError"></span><br>

                    <label> Jenis Kelamin : </label><br>
                    <input type="radio" id="laki" name="gender" value="Laki-Laki"> Laki-Laki <br>
                    <input type="radio" id="perempuan"  name="gender" value="Perempuan"> Perempuan <br><br>
                
                    <label for="kodemk"> Kode Mata Kuliah : </label><br>
                    <input type="text"  id="kodemk" name="kodemk"><br><br>
                
                    <label for="nilai"> Nilai : </label><br>
                    <input type="text" id="nilai" name="nilai" required><br><br>
                
                    <label for="bobot"> Bobot : </label><br>
                    <input type="text"  id="bobot" name="bobot" required><br>
                    <span class="error" id="namaError"></span><br>

                <button type="submit" name="submit">Submit</button>
                <button><a href="buat.php" >Buat</a></button>
                <button><a href="read.php">Lihat</a> </button>
		</fieldset>
	</form>
</body>
</html>

<?php 
	}else {
	    header("Location: read.php");
	    exit;
	} 

}
?>

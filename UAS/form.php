<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php
// Mendeklarasikan bahwa file ini membutuhkan (require) file 'function.php', yang berisi fungsi-fungsi yang diperlukan untuk interaksi, yaitu fungsi tambah
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side Programming</title>
</head>
<body>

            <h1>Formulir Data</h1>

            <form action="buat.php" method="post">
                <fieldset>
                    <legend>Formulir Baru: </legend>
                    <br />
                    <mark>
                        <?php if (isset($_GET['ms'])) {
                            echo $_GET['ms'];
                        } ?>
                    </mark>

                    <label for="id"> Id : </label><br>
                    <input type="text"  id="id" name="id" required><br>
                    <span class="error" id="namaError"></span><br>
                    
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

                    <button><a href="buat.php" >Buat</a></button>
                    <button><a href="read.php">Lihat</a> </button>
                </fieldset>
            </form>
    <footer>
        &copy; Hak Cipta 2023
    </footer>
</body>


    
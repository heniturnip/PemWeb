<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php 

if (isset($_POST['id']) &&
	isset($_POST['nama'])) {

	include "database.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
    $nim = $_POST['nim'];
	$gender = $_POST['gender'];
    $kodemk = $_POST['kodemk'];
    $nilai = $_POST['nilai'];
    $bobot = $_POST['bobot'];


	if (empty($id)) {
		header("Location: form.php?ms=Id is required");
	    exit;
    }else if (empty($nama)) {
		header("Location: form.php?ms=Nama is required");
	    exit;
	}else if (empty($nim)) {
		header("Location: form.php?ms=Nim is required");
	    exit; 
    } else if (empty($gender)) {
		header("Location: form.php?ms=Gender is required");
	    exit; 
    } else if (empty($kodemk)) {
		header("Location: form.php?ms=KodeMK is required");
	    exit; 
    } else if (empty($nilai)) {
		header("Location: form.php?ms=Nilai is required");
	    exit; 
	}else if (empty($bobot)) {
		header("Location: form.php?ms=Bobot is required");
	    exit;
	}
        $sql = "INSERT INTO mahasiswa(id, nama, nim, gender, kodemk, nilai, bobot)
                VALUES('$id', '$nama', '$nim', '$gender', '$kodemk', '$nilai', '$bobot')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Sukses Ditambahkan!";
        	header("Location:form.php?ms=$ms");
	        exit;
        }else {
        	$ms = "Gagal Ditambahkan!";
        	header("Location: form.php?ms=$ms");
	        exit;
        }
	}

else {
	header("Location: form.php");
	exit;
}
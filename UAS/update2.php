<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php 

if (isset($_POST['id'])) {

	include "database.php";

	$nama = $_POST['nama'];
    $nim = $_POST['nim'];
	$gender = $_POST['gender'];
    $kodemk = $_POST['kodemk'];
    $nilai = $_POST['nilai'];
    $bobot = $_POST['bobot'];
	$id = $_POST['id'];

	if (empty($id)) {
		header("Location: form.php?ms=Id is required");
	    exit;
    }else if (empty($nama)) {
		header("Location: form.php?ms=Nama is required");
	    exit;
	} else if (empty($nim)) {
		header("Location: form.php?ms=Nim is required");
	    exit; 
    } else if (empty($gender)) {
		header("Location: form.php?ms=Gender is required");
	    exit; 
    } else if (empty($kodemk)) {
		header("Location: form.php?ms=KodeMK is required");
	    exit; 
    } else if (empty($nilai)) {
		header("Location: form.php?ms=nilai is required");
	    exit; 
	}else if (empty($bobot)) {
		header("Location: form.php?ms=bobot is required");
	    exit;

        $sql = "UPDATE user_data
                SET nama='$nama', nim='$nim', gender ='$gender', kodemk='$kodemk', 'nilai='$nilai', bobot ='$bobot'
                WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
        	$ms = "Berhasil Diubah";
        	header("Location: update.php?ms=$ms&id=$id");
	        exit;
        }else {
        	$ms = "Gagal Diubah";
        	header("Location: update.php?ms=$ms&id=$id");
	        exit;
        }

	}
}
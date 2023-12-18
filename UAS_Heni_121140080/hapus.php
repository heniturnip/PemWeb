<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php 

if (isset($_GET['id'])) {
	include "database.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM mahasiswa 
	        WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	
	if ($result) {
		$ms = "Berhasil Dihapus";
		header("Location:read.php?ms=$ms");
	    exit;
	}else {
		$ms = "Gagal Dihapus";
		header("Location:read.php?ms=$ms");
	    exit;
	}
}else {
	header("Location:read.php");
	exit;
}
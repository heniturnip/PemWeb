<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->
 
<?php 

// koneksi ke database
require 'database.php';
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
//koneksi data keseluruhan (deklarasi data)
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$gender = htmlspecialchars($data["gender"]);
	$kodemk = htmlspecialchars($data["kodemk"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$bobot = htmlspecialchars($data["bobot"]);

	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				nim = '$nim',
				gender = '$gender',
				kodemk = '$kodemk',
				nilai = '$nilai',
				bobot = '$bobot'
			  WHERE id = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
//fungsi cari berdasarkan kata kunci, mencari data yang ada didatabase global dengan menginputkan kata kunci nim/kodemk/nilai
function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
				WHERE
			  nim LIKE '%$keyword%' OR
			  kodemk LIKE '%$keyword%' OR
			  nilai LIKE '%$keyword%'
			";
	return query($query);
}
?>
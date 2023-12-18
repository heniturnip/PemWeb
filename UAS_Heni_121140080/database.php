<!-- Heni Artha Uli br Turnip
121140080
Pemrograman Web RC -->

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "akademik";

    $conn  = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}


<?php
include_once 'koneksi.php';
$isinsin = $_GET['nisn'];
$isinama = $_GET['nama'];

// Check connection
if($conmysql === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}



// Escape user inputs for security
$isi_nisn = mysqli_real_escape_string($conmysql, $isinsin);
$isi_nama = mysqli_real_escape_string($conmysql, $isinama);
	if ($isinsin == "" || $isinama == ""){
		echo "data kosong";
	} else {
		// attempt insert query execution
		$sql = "INSERT INTO user (nisn, nama) VALUES ('$isi_nisn', '$isi_nama')";
		if(mysqli_query($conmysql, $sql)){
			echo "Data Sukses Ditamabah.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conmysql);
		}

		// close connection
		mysqli_close($conmysql);
	}
?>
<?php
	$db_host = "localhost";
	$db_user = "rootmahasiswa";
	$db_pass = "";
	$db_name = "semester1";

	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	 if(mysqli_connect_error()){
	 	 echo "gagal melakukan koneksi ke database :" ; mysqli_connect_error
	 	 	 ();
	 }
?>
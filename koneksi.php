<?php
	//koneksi database belajar kotlin
	$con = new mysqli("localhost", "root", "", "universitas_kotlin");
		//cek koneksi
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
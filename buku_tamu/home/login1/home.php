<?php
session_start();

$user = $_SESSION['username'];

echo "$user";

if (!isset($_SESSION['username'])){

	header('location:index.php');
}else{

	echo "anda berhasil";
}


?>

<h1>halaman utama setelah anda login</h1>

<a href="logout.php"> Log Out </a>
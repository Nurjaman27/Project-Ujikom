<?php
include "koneksi.php";
$del=$_GET['id'];
$hapus=$konek->query("delete from tamu where no='$del'");

if ($hapus){
header('location:tampil.php');
}

?>
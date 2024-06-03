<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1 align="center">INPUT DATA PENGUNJUNG</h1>
<table height="300" style="margin-left: 20px;">
<form action="" method="post">
<tr><td>NAMA</td>
<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama" style="margin-left: 20px; width: 500px; "></td></tr>

<tr><td>TANGGAL KUNJUNGAN</td>
<td><input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tgl" style="margin-left: 20px; width: 500px; "></td></tr>

 <tr><td>ALAMAT</td>
<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="alamat" style="margin-left: 20px; width: 500px; "></td></tr>

<tr><td>KEPERLUAN</td>
<td><input type="text"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="keperluan" rows="10" style=" margin-left: 20px; width: 500px; "></textarea></td></tr>
<tr><td  colspan="3">
	<div align="right"><br>
<button type="submit" class="btn btn-default" value="simpan" name="simpan">Simpan</button>


</form></table>

<?php
include "koneksi.php";
@$nama=$_POST['nama'];
@$tgl=$_POST['tgl'];
@$alamat=$_POST['alamat'];
@$keperluan=$_POST['keperluan'];

if ($nama=="") {
echo "";
}else{
$input=$konek ->query("insert into tamu
(nama,tgl,alamat,keperluan) values
('$nama','$tgl','$alamat','$keperluan')");

header('location:tampil.php');
}
?>
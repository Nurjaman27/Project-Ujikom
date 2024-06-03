<?php
include "koneksi.php";

$d=$_GET['id'];


$edit = $konek -> query("select * from tamu where no='$d'");

$b=$edit -> fetch_array();

?>

<?php
if(isset($_POST['simpan'])) {

$update= $konek -> query("update tamu set nama='$_POST[nama]',tgl='$_POST[tgl]', alamat='$_POST[alamat]', keperluan='$_POST[keperluan]' where no='$_POST[no]'");

header('location:tampil.php');
}
?>

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
<div align="">

	<h1 align="center">UPDATE DATA PENGUNJUNG</h1>
<table height="300" style="margin-left: 20px;">
<form action="" method="post">
	<input type="hidden" name="no" value="<?php echo $b['no']?>" readonly>
	<tr><td>NAMA</td>
	<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama" style="margin-left: 20px; width: 500px; " value="<?php echo $b['nama']?>"></td></tr>

	<tr><td>TANGGAL KUNJUNGAN</td>
	<td><input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="tgl" style="margin-left: 20px; width: 500px; " value="<?php echo $b['tgl']?>"></td></tr>

	 <tr><td>ALAMAT</td>
	<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="alamat" style="margin-left: 20px; width: 500px; " value="<?php echo $b['alamat']?>"></td></tr>

	<tr><td>KEPERLUAN</td>
	<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="keperluan" rows="1" style=" margin-left: 20px; width: 500px; " value="<?php echo $b['keperluan']?>"></td></tr>
	<tr><td  colspan="3">
		<div align="right"><br>
	<button type="submit" class="btn btn-default" value="simpan" name="simpan">Simpan</button>
</form></table>
</div>


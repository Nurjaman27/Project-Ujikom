<html lang="en">
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
  </head>
  <div class="panel panel-default">
  <!-- Default panel contents -->
  
  </div>

  <!-- Table -->
  <table class="table">
<h1 align="center">DATA SEMUA PENGUNJUNG</h5>
<tr>
<th>No</th>
<th>Nama</th>
<th>Tanggal Kunjungan</th>
<th>Alamat</th>
<th>Keperluan</th>
<th>Delete</th>
<th>Update</th>

</tr>
<?php
include "koneksi.php";
$tampil= $konek -> query("select * from tamu order by no");
while ($a= $tampil -> fetch_array()) {
@$no++;
echo "<tr>
		<td>$no</td>
		<td>$a[nama]</td>
		<td>$a[tgl]</td>
		<td>$a[alamat]</td>
    <td>$a[keperluan]</td>
		";
		?>
		<td align="center"><a href="delete.php?id=<?php echo $a['no'] ?>" ><i class="glyphicon glyphicon-trash"></a></td>
		
		
		<td><a href="edit.php?id=<?php echo $a['no'] ?>"><i class="glyphicon glyphicon-pencil"></a></td>
		<?php
		
		}
		
?>
</tr>
</table>		
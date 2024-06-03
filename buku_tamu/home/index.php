 <?php
        include"../koneksi.php";
      session_start();

        $user = $_SESSION['username'];

        $tampil = $konek -> query ("select * from aman where username = '$user'");
        $level  = $tampil -> fetch_array();

     

      if (!isset($_SESSION['username'])){

        header('location:../index.php');
      }else{

        echo "";
      }


      ?>
<html>
<title>Buku Tamu</title>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<link rel="stylesheet" href="style.css"
 type="text/css">
 </head>
 <body>
 
 <div id="head">
 <br><br><br><br><br><br><br>
  <form class="navbar-form navbar-form" action="search.php" target="rumah" method="post" style="margin-left: 1000px;" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" style="width:200px;" name="search">
              </div>
              <button type="submit" class="btn btn-default" value="cari">Search</button>
            </form>

 </form>
</div>

<div id="side">
<div class="list-group">
  <a href="index.php" class="list-group-item active"><i class="glyphicon glyphicon-home"></i> Menu</a>
  <a href="input.php" class="list-group-item" target="rumah"><i class="glyphicon glyphicon-plus-sign"></i> Input </a>
  <a href="tampil.php" class="list-group-item" target="rumah"><i class="glyphicon glyphicon-user"></i> Semua Pengunjung </a>
  <a href="print.php" class="list-group-item" target="rumah"><i class="glyphicon glyphicon-print"></i> Print Semua </a>
  <a href="../logout.php" class="list-group-item"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
  
  
  
</div>
</div>

<div id="conten">
<h1><font color="black"></font></h1>         
<iframe name="rumah" style="width:100%; height:100%; margin-top: -20px; background-image: url(../ali/bg7.jpg); background-size: cover;
 "
src="">

</iframe>
</div>
</div></div></fieldset>
</div>

</body>

</html>
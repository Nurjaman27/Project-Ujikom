<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
	  <link rel="stylesheet" type="text/css" href="style.css">
	
  </head>
  <body>

    <?php
        include"../koneksi.php";
      session_start();

        $user = $_SESSION['username'];

        $tampil = $konek -> query ("select * from aman where username = '$user'");
        $level  = $tampil -> fetch_array();

      echo "<b>$user</b> <i>anda login sebagai</i> : <b>$level[level]</b>";

      if (!isset($_SESSION['username'])){

        header('location:../index.php');
      }else{

        echo "";
      }


      ?>


    <nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
  <a class="navbar-brand font-weight-bold" href="#">WATCHKU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Daftar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../logout.php">logout</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Tentang kami</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>

<div class="row mt-5 no-gutters">
    <div class="col-md-2 bg-light">
	<ul class="list-group list-group-flush p-2 pt-4">
	  <li class="list-group-item"style="background-color: #B0C4DE;">BRAND WATCH</li>
	  <li class="list-group-item">Casio</li>
	  <li class="list-group-item">Expedition</li>
	  <li class="list-group-item">Fosil</li>
	  <li class="list-group-item">Orient</li>
	  <li class="list-group-item">Quicksilver</li>
	  <li class="list-group-item">Seiko</li>
	  <li class="list-group-item">Alba</li>
    <li class="list-group-item">Rolex</li>
	  
    </ul>
    </div>


<div class="col-md-10 bg-light">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide9.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide11.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide8.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
        <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>
		
        	<div class="row mx-auto">
        		<div class="card mr-4 m1-3" style="width: 16rem;">
        	    <img class="card-img-top" src="img/produk3.jpg" alt="Card image cap">
        	    <div class="card-body bg-light">
              		<h5 class="card-title">Casio</h5>
              		<p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
              		<a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
              		<a href="#" class="btn btn-danger">12.000.000</a>
        	    </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk3.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>
            </div>

              <div class="row mx-auto mt-5">
            <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
              </div>

              <div class="card mr-4 m1-3" style="width: 16rem;">
              <img class="card-img-top" src="img/produk1.jpg" alt="Card image cap">
              <div class="card-body bg-light">
                  <h5 class="card-title">Casio</h5>
                  <p class="card-text">Jam casual dengan desain mewah cocok untuk menunjang fashion pria.</p>
                  <a href="#" class="btn btn-primary">Detail</a>
                  <a href="#" class="btn btn-danger">12.000.000</a>
              </div>
            </div>
          </div>

          <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="img/produk2.jpg">
                    </div>
                    <div class="col-md-6">
                      <table class="table table-borderless">
                       <tr>
                         <th>Nama Produk</th>
                         <td>Jam Casual</td>
                       </tr> 
                       <tr>
                         <th>Merk/Type</th>
                         <td>Boze/5B</td>
                       </tr>
                       <tr>
                         <th>Biaya Ongkir</th>
                         <td>Standar</td>
                       </tr>
                       <tr>
                         <th>Ulasan</th>
                         <td>Sangat bagus sekali mamank</td>
                       </tr>
                       <tr>
                         <th>Stock Produk</th>
                         <td>120 pcs</td>
                       </tr>
                       <tr>
                         <th>Harga</th>
                         <td>Rp. 12.000.000</td>
                       </tr>     
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
                  <button type="button" class="btn btn-primary">BELI</button>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>

<footer class="bg-dark text-white p-5">
  <div class="row">
     <div class="col-md-3">
       <h5>LAYANAN PELANGGAN</h5>
       <ul>
         <li>Pusat Bantuan</li>
         <li>Cara Pembelian</li>
         <li>Pengiriman</li>
         <li>Cara Pengembalian</li>
       </ul>
     </div>
     <div class="col-md-3">
       <h5>TENTANG KAMI</h5>
       <ul>
         <p>Web ini menyedian jam tangan brended dengan harga yang murah </p>
       </ul>
     </div>
     <div class="col-md-3">
       <h5>MITRA KERJA SAMA</h5>
         <ul>
           <li>GRAB</li>
           <li>GOJEK</li>
           <li>GOBER</li>
         </ul> 
     </div>
     <div class="col-md-3">
       <h5>HUBUNGI KAMI</h5>
       <ul>
         <li>0832562546</li>
         <li>mamank@shop.com</li>
       </ul>
     </div>
  </div>
</footer>

<div class="copyright text-center text-white font-weight-bold bg-warning p-2">
  <p>Developed By Ali 2019</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>form daftar</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
	<div id="kotak">
	
   <form action="daftar.php" method="post" target="notis">
  <div class="form-group">
    <label for="exampleInputEmail1"><font color="white">Email address</label></font>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><font color="white">Password</label></font>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  
  <select class="form-control" required="" name="level">
  <option></option>
  <option>user</option>
  <option>admin</option>
  </select>
  
  <br>
  
  <input type="submit" name="daftar" type="button" class="btn btn-primary btn-lg btn-block" value="DAFTAR">
</form>

      <div class= "text-center">
        <spam class="txt1">

          <font color="white"><h2>Silahkan</h2></font>
        </spam>

        <a href="../index.php" class="txt2 hov1">
          <font color="white">login</font>
        </a>
      </div>

<br>

<iframe src="daftar.php" name="notis" style="width: 100%; height: 100px; border-style: none;"></iframe>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require "config.php";



if (isset($_POST["order"])) {
  $id = $_GET['id'];
  $nama=$_POST['nama'];
$namakursus=$_POST['nama_kursus'];
$email=$_POST['email'];
$harga=$_POST['harga'];





$query= $db->prepare(" INSERT INTO `tbl_order` (`id`, `nama`, `nama_kursus`, `email`, `harga`) VALUES (NULL, '$nama', '$namakursus', '$email', '$harga');");
 $query->execute([$nama,$namakursus,$email,$harga]);
 echo"<script>
 alert('Order Berhasil ditambahkan');
 document.location.href='hasilorder.php';



 </script>";

  // INSERT INTO `tbl_order` (`id`, `nama`, `nama_kursus`, `email`, `harga`) VALUES (NULL, 'Andi', 'html', 'cascas@ds.com', '12000');
 
}



 ?>


  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Form Order</title>
  </head>
  <body>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a Order</h2>
      <a href="logout.php">Log Out</a>
    </div>
    <div class="card-body">
    
     
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Nama Kursus</label>
          <input type="text" name="nama_kursus" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">harga</label>
          <input type="text" name="harga" id="name" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info" name="order" required>Order</button>
        </div>
      </form>
    </div>
  </div>
</div>
<footer>
      <div class="row pt-3 mt-4">
        <div class="col-sm-12 text-center">
          <p>&copy Copyright by <b>18111153_Saul Santo Anju_TIFRP18CIDA</b> <?php echo date("Y");  ?></p>

        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

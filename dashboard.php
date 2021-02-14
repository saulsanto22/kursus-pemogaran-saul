
<?php
require_once("auth.php"); 


require 'config.php';
$sql = 'SELECT * FROM tbl_layanan';
$statement = $db->prepare($sql);
$statement->execute();
$kursus = $statement->fetchAll(PDO::FETCH_OBJ);

if ($kursus == null) {
    echo"<script>
    alert('Tidak ada orderan');
    document.location.href='hasilorder.php';
   
   
   
    </script>";
}





 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="asset/css/shop-homepage.css" rel="stylesheet"> -->

</head>
<style>

</style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparant p-0">
    <div class="container">
      <a class="navbar-brand" href="#">Homepage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<style>
  .container{}
</style>
 
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/default.svg" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                
<a href="edit_profil.php?id=<?= $_SESSION["user"]["id"]; ?>">Edit Profil</a>
<!-- <input type="text" name="id_reg" value="<?= $_SESSION["user"]["id"]; ?>"> -->
                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <h1>Pilih Kursusmu <b>Sekarang Juga</b></h1>
            </form>

            <?php foreach ($kursus as $krs ) : ?>
            <div class="card mb-4">
                <div class="card-body">
            <a href="order.php?id=<?= $krs->id ?>"> <h1><?= $krs->judul;?></h1></a>
             <p><?=$krs->dekripsi;?></p>
                </div>
            </div>
            <?php endforeach; ?>
            
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

  <!-- Bootstrap core JavaScript -->
  <script src="asset/jquery/jquery.min.js"></script>
  <script src="asset/js/bootstrap.bundle.min.js"></script>

</body>

</html>

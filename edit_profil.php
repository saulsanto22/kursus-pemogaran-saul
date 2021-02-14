<?php
require "config.php";
session_start();

// $nama=$_POST["nama"];
// $email=$_POST["email"];


// $query= $db ->prepare("UPDATE `users` SET`name`= ? , `email` = ?   WHERE `users`.`id` = ?");
//  $query->execute([$namadepan,$namabelakang,$email,$username,$id_regi]);


if(isset($_POST["update"])){


$id = $_GET["id"];
$sql = 'SELECT * FROM users WHERE id=:id';
$statement = $db->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST["nama"]) && isset($_POST["email"]) ) {

$nama=$_POST["nama"];
$email=$_POST["email"];




$query= $db->prepare("UPDATE `users` SET`name`= $nama, `email`  =$email WHERE `users`.`id` = ?");
 $query->execute([':nama' => $nama, ':email' => $email]);
 echo"<script>
 alert('Profil Berhasil Diedit');
 document.location.href='dashboard.php';



 </script>";
}


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

    <title>Edit Profil</title>
  </head>
  <body>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">


        </div>

      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $_SESSION["user"]["name"]  ; ?>" type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?=  $_SESSION["user"]["email"] ; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="password" value="<?=  $_SESSION["user"]["password"] ; ?>" name="password" id="email" class="form-control" readonly> 
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info" name="update">Update person</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mI
    ykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
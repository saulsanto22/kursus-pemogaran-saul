<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        // $id=$user["id"];
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            echo"<script>
            alert('Login Berhasil');
            document.location.href='dashboard.php';
           
           
           
            </script>";
            echo $id;
        }
    }
}



$error= true;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/css/mycss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
</head>
<style>
  .container{
    height:600px;

  }
</style>
<body class="bg-light">

<div class="container mb-5">
    <div class="row">
        <div class="col-md-6">
        <?php if (isset($error ))
	echo "
	<script>
		alert('Username dan Password Salah');
		</script>

		";





?>
	

        <p>&larr; <a href="index.php">Home</a>

        <h4>Form Login</h4>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-primary btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
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
</body>
</html>

<?php

// session_start();
// if(!isset($_SESSION["user"])) header("Location: index.php");

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/mycss.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="asset/fontawesome/fontawesome-free-5.15.1-web/css/all.css">

  <title>Saul Project</title>
 


</head>

<body>
   <style>
    .jumbotron {
      font-family: monospace;
    }

    .team {
      color: white;
      padding: 10px;

    }
  </style>
  <div class="Container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant  mb-3" id="mainNav ">
      <div class="container">
        <h2><b>Saul</b> Project</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tentang.php">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kontak">Kontak Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="konten">
      <div class="row ">
        <div class="col-sm-6">
          <div class="jumbotron">
            <h1 class="display-">Selamat Datang!</h1>
            <p class="lead">Join Bersama kami!!!!!! <b>Dapatkan Diskon 75 %</b></p>
            <hr class="my-4">
            Ikut Serta bersama kami untuk kepentingan Bisnis mu , ilmu mu serta masalah yang kamu hadapin dalam pemograman
            <p>Bergabung lah bersama 100K Pelanggan lainnya!</p>

            <a class="btn btn-primary btn-lg" href="login.php" role="button">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="asset/img/cpy.png" alt="" class="w-100">
        </div>
      </div>
    </div>

    <div class="services  ">
      <h1 class="text-center" id="services">Service</h1>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title text-center">Jasa Pembuat Website</h5>

              <h6 class="card-subtitle mb-2 text-muted">Buat desain website keren serta responsive dan cepat serta dinamis dan statis </h6>
              <p class="card-text"></p>


            </div>
          </div>
        </div>
        <div class="col-sm-4 ">
          <div class="card ">
            <div class="card-body bg-light">
              <h5 class="card-title text-center">Tutorial Pemograman</h5>
              <h6 class="card-subtitle mb-2 text-muted">Dapatkan Tutorial pemograman dari bahasa apapun berserta SourceCode</h6>
              <p class="card-text"></p>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-light">
            <div class="card-body">
              <h5 class="card-title text-center">Kursus Online</h5>
              <h6 qclass="card-subtitle mb-2 text-muted"> Mulailah belajar Pemograman dari dasar hingga mahir hanya disini</h6>
              <p class="card-text"></p>

            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="team ">
      <div class="jumbotron bg-dark">
        <h1 class="text-center"> Tim Work</h1>
        <div class="row d-flex justify-content-center ">
          <div class="col-sm-4">
            <div class="card">
              <img src="asset/img/team.jpg" class="card-img-top " alt="...">

            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="asset/img/team2.jpg" class="card-img-top" alt="...">

            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="asset/img/team3.jpg" class="card-img-top" alt="...">

            </div>
          </div>


        </div>


      </div>

    </div>


    <div class="kontak " id="kontak">
      <h1 class="text-center">Kontak Kami</h1>
      <div class="row">
        <div class="col-sm-5">
          <div class="card" style="width: 50;">
            <div class="card-body">
              <p>Lokasi</p>
              <ul class="list-group">
                <li class="list-group-item disabled" aria-disabled="true"><i class="fas fa-map-marker-alt"></i> Lokasi</li>
                <li class="list-group-item"><i class="fas fa-phone-square-alt"></i> Hubungi</li>

              </ul>



            </div>
          </div>





        </div>
        <div class="col-sm-7 ">
          <div class="card" style="width: 50;">
            <div class="card-body">
              <p><i class="fas fa-envelope-open"></i> Email</p>

              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Komentar</label>
                  <textarea class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>


        </div>
      </div>

    </div>

    <footer>
      <div class="row">
        <div class="col-sm-12 text-center">
          <p>&copy Copyright by <b>18111153_Saul Santo Anju_TIFRP18CIDA</b> <?php echo date("Y");  ?></p>

        </div>
      </div>
    </footer>





  </div>


  </div>

  </div>

  <script src="asset/js/bootstrap.min.js"></script>

  <script src="js/scrolling-nav.js"></script>

</body>

</html>
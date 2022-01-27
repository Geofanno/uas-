<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Rental Mobil</title>
  </head>
  
  <body>
    <?php
    include("konek.php");
    session_start();
    if(!isset($_SESSION['username'])){
      header("Location:login.php");
    }
    ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Rental Mobil</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?x=beranda">Beranda </a>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="?x=order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?x=mobil">Mobil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?x=admin">Admin</a>
              </li>
              
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laporan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?x=rmobil">Mobil</li>
            <li><a class="dropdown-item" href="?x=rorder">Order</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="?x=keluar">Keluar</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <!--Sidebar--> 
            <h4>Mobil Ready</h4>
            <ul class="list-group list-group-flush">
                <?php
                $cari=mysqli_query($konek,"select * from mobil where s_mobil='AKTIF'");
                while($data=mysqli_fetch_array($cari)){
                ?>
                <li class="list-group-item"><?php echo $data['merek'] . " - " . $data['no_polisi']; ?></li>
              <?php
              }
              ?>
              </ul>
        </div>
        <div class="col md-8">
        <!--Konten-->
            <?php include("kontrol.php"); ?>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col md-12 bg-light">
          <p class="text-center fw-bold">Rentar Mobil Mataram &copy;2022</p>
        </div>
      </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html> 
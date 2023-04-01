<!--Muhammad Pajar_932020043_2TE2-->
<?php 
session_start();

function function_alert($message) { 
  echo "<script>alert('$message');</script>";
}
function_alert("Selamat, Login Berhasil");

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ElektroJarrShop | Produk Page</title>
  <link rel="stylesheet" href="bootstrap 4.3.1/css/bootstrap.min.css">
<script src="bootstrap 4.3.1/js/jquery-3.1.1.slim.js"></script>
<script src="bootstrap 4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="tampilan.css">

</head>
<body>
<!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
             <h1>Selamat Datang, <?php echo $_SESSION['name']; ?></h1>
             <a href="logout.php">Logout</a>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cart">BOX (<span class="total-count"></span>)</button><button class="clear-cart btn btn-warning">Kosongkan BOX</button></div>
    </div>
</nav>

<div id="topnavnavnav" class="hocnavnavnav clear">
    <h7 class="heading45">PRODUK</h7>
  </div>
<!-- Main -->
<div class="bgdeddd overlayyy row444">
<div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/02.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO R3 ATMEGA</h4></center>
    <center><p class="card-text">Harga: Rp.340.000</p></center>
    <a href="#" data-name="ARDUINO_R3_ATMEGA" data-price="340000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/03.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO NANO V3</h4></center>
    <center><p class="card-text">Harga: Rp.210.000</p></center>
    <a href="#" data-name="ARDUINO_NANO_V3" data-price="210000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/04.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO R3 PRO</h4></center>
    <center><p class="card-text">Harga: Rp.580.000</p></center>
    <a href="#" data-name="ARDUINO_R3_PRO" data-price="580000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/05.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO MEGA</h4></center>
    <center><p class="card-text">Harga: Rp.460.000</p></center>
    <a href="#" data-name="ARDUINO_MEGA" data-price="460000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/06.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO NANO V2</h4></center>
    <center><p class="card-text">Harga: Rp.290.000</p></center>
    <a href="#" data-name="ARDUINO_NANO_V2" data-price="290000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/07.png" alt="Card image cap">
  <div class="card-block">
    <center><h4 class="card-title">ARDUINO R3 CH340</h4></center>
    <center><p class="card-text">Harga: Rp.310.000</p></center>
    <a href="#" data-name="ARDUINO_R3_CH340" data-price="310000" class="add-to-cart btn btn-info">Tambahkan Ke BOX</a>
  </div>
</div>
      </div>
    </div>
</div>
</div>

  
 <!-- Modal -->
 <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BOX</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total Harga: Rp.<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button class="clear-cart btn btn-primary" onclick="myFunction()">Pesan Sekarang</button>
        
        <script>
        function myFunction() {
          alert("Terimakasih, Pesanan Sedang di Proses");
          }
          </script>

      </div>
    </div>
  </div>
</div>
<!-- partial -->
  </script><script  src="app.js"></script>

</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>

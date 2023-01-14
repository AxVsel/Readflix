<?php
  include 'userphp/koneksi.php';
  include 'userphp/session.php';
  $query = "select * from tb_buku;";
  $sql = mysqli_query($conn, $query);

  $no = 0;

  //$result = mysqli_fetch_assoc($sql);
  // var_dump($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- bootstrap 5 -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="discover.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4e7412f975.js" crossorigin="anonymous"></script>
    <title>Langganan</title>
</head>
<body>


<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="discoveruser.php" class="w3-bar-item w3-button">Beranda</a>
  <a href="browse_user.php" class="w3-bar-item w3-button">Browse</a>
  <a href="favoriteuser.php" class="w3-bar-item w3-button">Favorite</a>
 <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Setting</button>
  <div id="demoAcc" class="w3-bar-block w3-hide w3-white w3-card-4">
    <a href="profileuser.php" class="w3-bar-item w3-button">Profil Kamu</a>
    <a href="langganan.php" class="w3-bar-item w3-button">Berlangganan</a>
  </div>
  <a href="userphp/logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- according -->
<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

</script>

<!-- end according -->

<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Selamat datang <?php echo $_SESSION['username'] ?></h1>
</div>

<!-- isi -->
<div class="w3-container w3-center">

<h2>Silahkan Pilih paket berlangganan kamu</h2>

<a href="pembayaran.php" class="w3-card-4 w3-margin-right w3-blue w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
  <header class="w3-container w3-light-grey">
      <h3>Ekonomi</h3>
    </header>
    <img src="imglangganan/books-mood-photo-hd-wallpaper.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>30.000</p>

    </div>
</a>

<a href="pembayaran.php" class="w3-card-4 w3-margin-right w3-blue w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
  <header class="w3-container w3-light-grey">
      <h3>VIP</h3>
    </header>
    <img src="imglangganan/books-mood-photo-hd-wallpaper.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>130.000</p>

    </div>
</a>

<a href="pembayaran.php" class="w3-card-4 w3-margin-right w3-blue w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
  <header class="w3-container w3-light-grey">
      <h3>Beli Langsung</h3>
    </header>
    <img src="imglangganan/books-mood-photo-hd-wallpaper.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>230.000</p>

    </div>
</a>







</div>
<!-- isi -->
    

</body>
</html>
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
    <title>Discover User</title>
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
  <div class="w3-margin-bottom">
  <input class="w3-input w3-border w3-animate-input" placeholder="Search" type="text">

  </div>
</div>

<!-- isi -->
<div class="w3-container">

<!-- browse -->

  <button class="w3-card-4 w3-quarter w3-margin-right w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
    <img src="img2/19760.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>Fantasy</p>
    </div>
  </button>

      <button class="w3-card-4 w3-quarter w3-margin-right w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
    <img src="img2/19760.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>Aksi</p>
    </div>
  </button>

     <button class="w3-card-4 w3-quarter w3-margin-right w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
    <img src="img2/19760.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>Horor</p>
    </div>
  </button>

     <button class="w3-card-4 w3-quarter w3-margin-right w3-margin-top w3-button w3-border w3-hover-red" style="width:23%">
    <img src="img2/19760.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p>Sejarah</p>
    </div>
  </button>

<br>

  <!-- browse -->

  <?php
          while ($result = mysqli_fetch_assoc($sql)) {
      ?>

  <div class="w3-card-4 w3-dark-white w3-quarter w3-margin-left w3-margin-top" style="width:20%">
      <div class="w3-container w3-center">
      <h3><?php echo $result['judul_buku']; ?></h3>
      <img src="img/<?php echo $result['foto_sampul']; ?>" style="width:100%">
      <h5>Ketagori : <?php echo $result['ketagori_buku']; ?></h5>
      <div class="w3-section">
         <a href="card_user.php?read=<?php echo $result['id_buku']; ?>" class="w3-button w3-green">Go Read</a>
         <button class="w3-button w3-pink">Favorite</button>
      </div>
    </div>
  </div>

 <?php
          }
    ?>





  
  
</div>
<!-- isi -->
    

</body>
</html>
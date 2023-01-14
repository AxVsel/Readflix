<?php
  include 'userphp/koneksi.php';
  $id_buku = $_GET['read'];
  $query = "select * from tb_buku where id_buku = '$id_buku';";
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

<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Selamat datang</h1>
</div>

<!-- isi -->
<div class="w3-container">
  
   <!-- gambar -->
  <div class="w3-content w3-section" style="max-width:590px">
     <?php
          while ($result = mysqli_fetch_assoc($sql)) {
      ?>

          <img class="mySlides w3-animate-right" src="img/<?php echo $result['foto_sampul']; ?>" style="width:100%">
          <img class="mySlides w3-animate-right" src="img/<?php echo $result['foto_1']; ?>" style="width:100%">
          <img class="mySlides w3-animate-right" src="img/<?php echo $result['foto_2']; ?>" style="width:100%">
  </div>
  <!-- gambar -->

           <!-- script -->
          <script>
            var myIndex = 0;
            carousel();

            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 2500);    
            }
        </script>
        <!-- script -->

       
<h2 class="w3-margin-top">Judul Buku : <?php echo $result['judul_buku']; ?></h2>
<h3 class="w3-margin-top">Nama Pengarang : <?php echo $result['nama_pengarang']; ?></h3>
<p class="w3-margin-top">Ranting : <?php echo $result['ranting']; ?></p>
<p class="w3-margin-top">Ketagori : <?php echo $result['ketagori_buku']; ?></p>
<p class="w3-margin-top">Sinopsis : <?php echo $result['sinopsis']; ?></p>
<br>

<p class="w3-margin-top">Cerita : 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

  <br></p>



<?php
          }
    ?>












</div>
<!-- isi -->
    

</body>
</html>
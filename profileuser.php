<?php
  include 'userphp/koneksi.php';
  include 'userphp/session.php';
  $query = "select * from tb_user;";
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
    <title>Profile User</title>
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
<div class="w3-container">

<h2>Menu Profil</h2>


<form class="w3-container" method="POST" action="userphp/proses.php" enctype="multipart/form-data">
          <p>      
            <label class="w3-text-black"><b>Username</b></label>
            <input placeholder="<?php echo $_SESSION['username'] ?>" required class="w3-input w3-border w3-white" name="username" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Password</b></label>
            <input  required class="w3-input w3-border w3-white" placeholder="*****" name="password" type="Password"></p>
            <p>      
            <label class="w3-text-black"><b>Nama Lengkap</b></label>
            <input required class="w3-input w3-border w3-white" name="nama_user" type="text"></p>
           
            <p>      
            <label  class="w3-text-black"><b>Alamat</b></label>
            <input required class="w3-input w3-border w3-white" name="alamat" type="textarea"></p>

            <p>      
            <label class="w3-text-black"><b>Foto</b></label>
            <input required class="w3-input w3-white" name="foto" type="file"></p>


            <p>      
            <label  class="w3-text-black"><b>Langganan</b></label>
            <input required class="w3-input w3-border w3-white" name="langganan" type="textarea"></p>

            <p>      
            <label  class="w3-text-black"><b>Status Langganan</b></label>
            <input required class="w3-input w3-border w3-white" name="alamat" type="textarea"></p>


      

            <p>      
            <label class="w3-text-black"><b>Jenis Kelamin</b></label>
                <select required class="w3-select" name="jenis_kelamin">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                  <option value="Tidak Memilih">Tidak Memilih</option>
                </select>
            </p>

            <p><button type="submit" name="aksi" value="prof" class="w3-button w3-blue w3-medium w3-round-xlarge">Tambahkan</button></p>
  </form>






</div>
<!-- isi -->
    

</body>
</html>
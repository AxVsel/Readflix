<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- bootstrap 5 -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="discover.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4e7412f975.js" crossorigin="anonymous"></script>
    <title>Tambah Buku</title>
</head>
<body>


<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="discoveradmin.php" class="w3-bar-item w3-button">Tambah Buku</a>
  <!-- <a href="#" class="w3-bar-item w3-button">System Discover Buku</a> -->
  <a href="adpembayaran.php" class="w3-bar-item w3-button">Pembayaran Masuk</a>
  <a href="tambahadmin.php" class="w3-bar-item w3-button">Tambah Admin</a>
  <a href="adminphp/logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Selamat datang</h1>
</div>

<!-- isi -->
<div class="w3-container">
  <h2>Tambah Buku</h2>
  <p>Silahkan tambahkan buku yang anda inginkan ataupun juga menghapus dan mengedit buku yang
  sudah disimpan</p>


  <div class="w3-card-4">
  <div class="w3-container w3-blue">
    <h2>Input Colors</h2>
  </div>
          <form class="w3-container" method="POST" action="tambahbukuphp/proses.php" enctype="multipart/form-data">
            <p>      
            <label class="w3-text-black"><b>Judul Buku</b></label>
            <input class="w3-input w3-border w3-white" name="judul_buku" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Nama Pengarang</b></label>
            <input class="w3-input w3-border w3-white" name="nama_pengarang" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Ketagori Buku</b>
            <select required class="w3-select" name="ketagori_buku">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Ilmiah">Ilmiah</option>
                  <option value="Sejarah">Sejarah</option>
                  <option value="Horor">Horor</option>
                  <option value="Aksi">Aksi</option>
                  <option value="petualangan">Petualangan</option>
                </select></p>

            <p>      
            <label class="w3-text-black"><b>Ketebalan Buku</b></label>
            <input class="w3-input w3-border w3-white" name="ketebalan_buku" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Sinopsis</b></label>
            <input class="w3-input w3-border w3-white" name="sinopsis" type="textarea"></p>
            <p>      
            <label class="w3-text-black"><b>Ranting</b></label>
            <input class="w3-input w3-border w3-white" name="ranting" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Foto Sampul</b></label>
            <input class="w3-input w3-white" name="foto_sampul" type="file"></p>
            <p>      
            <label class="w3-text-black"><b>Foto 1</b></label>
            <input class="w3-input w3-white" name="foto_1" type="file"></p>
            <p>      
            <label class="w3-text-black"><b>Foto 2</b></label>
            <input class="w3-input w3-white" name="foto_2" type="file"></p>

            <?php 
            if(isset($_GET['ubah'])){
            ?>

            <p><button type="submit" name="aksi" value="edit" class="w3-button w3-blue w3-medium w3-round-xlarge">Simpan perubahan</button></p>
            <?php
              } else {
            ?>

            <p><button type="submit" name="aksi" value="add" class="w3-button w3-blue w3-medium w3-round-xlarge">Tambahkan</button></p>
            <?php
              }
            ?>

            <p><a href="tambahadmin.php" class="w3-button w3-blue w3-medium w3-round-xlarge">Batal</a></p>
          </form>
</div>
</div>

<!-- isi -->
    

</body>
</html>
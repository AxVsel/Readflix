<!DOCTYPE html>
<?php 
include 'adminphp/koneksi.php';
            $username = '';
            $password = '';
            $nama_lengkap = '';
            $jenis_kelamin = '';
            $alamat = '';
            $level = '';

            if(isset($_GET['ubah'])){
            $id_admin = $_GET['ubah'];

            $query = "select * from tb_admin where id_admin = '$id_admin';";
            $sql = mysqli_query($conn, $query);

            $result = mysqli_fetch_assoc($sql);

            $username = $result['username'];
            $password = $result['password'];
            $nama_lengkap = $result['nama_lengkap'];
            $jenis_kelamin = $result['jenis_kelamin'];
            $alamat = $result['alamat'];
            $level = $result['level'];

            

  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- bootstrap 5 -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="discover.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4e7412f975.js" crossorigin="anonymous"></script>
    <title>Discover Admin</title>
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
  <p>Menu Tambah Admin</p>


  <div class="w3-card-4">
  <div class="w3-container w3-blue">
    <h2>Input Colors</h2>
  </div>
          <form class="w3-container" method="POST" action="adminphp/proses.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id_admin; ?>" name="id_admin">
            <p>      
            <label class="w3-text-black"><b>Username</b></label>
            <input required class="w3-input w3-border w3-white" name="username" type="text" value="<?php echo $username; ?>"></p>
            <p>      
            <label class="w3-text-black"><b>Password</b></label>
            <input required class="w3-input w3-border w3-white" name="password" type="Password"></p>
            <p>      
            <label class="w3-text-black"><b>Nama Lengkap</b></label>
            <input required class="w3-input w3-border w3-white" name="nama_lengkap" type="text" value="<?php echo $nama_lengkap; ?>"></p>
            <p>      
            <label class="w3-text-black"><b>Jenis Kelamin</b></label>
                <select required name="jenis_kelamin" class="w3-select">
                  <option <?php if($jenis_kelamin == 'Laki - laki'){echo "selected";} ?> value="Laki - Laki">Laki - Laki</option>
                  <option <?php if($jenis_kelamin == 'Perempuan'){echo "selected";} ?> value="Perempuan">Perempuan</option>
                </select>
            </p>
            <p>      
            <label  class="w3-text-black"><b>Alamat</b></label>
            <input required class="w3-input w3-border w3-white" name="alamat" type="textarea" value="<?php echo $alamat; ?>"></p>
            <p>      
            <label class="w3-text-black"><b>Foto</b></label>
            <input <?php if(!isset($_GET['ubah'])){echo "required";} ?> class="w3-input w3-white" name="foto" type="file"></p>
            <p>      
            <label class="w3-text-black"><b>Level</b></label>
                <select value="<?php echo $result['level']; ?>" required class="w3-select" name="level">
                  <option <?php if($level == 'admin'){echo "selected";} ?> value="admin">Admin</option>
                  <option <?php if($level == 'user'){echo "selected";} ?> value="user">User</option>
                </select>
            </p>

            

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
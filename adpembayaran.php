<?php


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
    <title>Discover Admin</title>
</head>
<body>


<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="discoveradmin.php" class="w3-bar-item w3-button">Tambah Buku</a>
  <!-- <a href="#" class="w3-bar-item w3-button">System Discover Buku</a> -->
  <a href="#" class="w3-bar-item w3-button">Pembayaran Masuk</a>
  <a href="tambahadmin.php" class="w3-bar-item w3-button">Tambah Admin</a>
  <a href="adminphp/logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:18%">

<div class="w3-container w3-blue">
  <h1>Selamat datang <?php echo $_SESSION['username'] ?></h1>
</div>

<!-- isi -->
<div class="w3-container">
  <h2>Konfirmasi Pembayaran</h2>

  <table class="w3-table-all w3-card-4 w3-centered">
    <tr>
      <th>No.</th>
      <th>id_pembayaran</th>
      <th>Nama pelanggan</th>
      <th>Tipe Langganan</th>
      <th>Pembayaran</th>
      <th>Aksi</th>
    </tr>
    <tr>
    
      <td><?php echo ++$no; ?>.</td>
      <td>112233</td>
      <td>Carli Jhonson</td>
      <td>Langganan 6 bulan</td>
      <td>Dana</td>
      <td>
          <p><a href="" class="w3-button w3-blue w3-medium w3-round-xlarge">Konfirmasi</a></p>
          <p><a href="" class="w3-button w3-blue w3-medium w3-round-xlarge" onClick="return confirm('apakah anda ingin menghapus Pembayaran tersebut')">Hapus</a></p>
      </td>

    </tr>

   
  </table>



</div>

<!-- isi -->
    

</body>
</html>
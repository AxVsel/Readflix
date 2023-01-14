<?php
  include 'adminphp/koneksi.php';
  $query = "select * from tb_admin;";
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
    <title>Tambah admin</title>
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
  <h2>Tambah Admin</h2>
  <p>Menu Untuk Tambah admin</p>

  <p><a href="tambahadmin2.php" class="w3-button w3-blue w3-medium w3-round-xlarge">Tambah Admin</a></p>

  <table class="w3-table-all w3-card-4 w3-centered">
    <tr>
      <th>No.</th>
      <th>Username</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Foto</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <?php
          while ($result = mysqli_fetch_assoc($sql)) {
      ?>
      <td><?php echo ++$no; ?>.</td>
      <td><?php echo $result['username']; ?></td>
      <td><?php echo $result['nama_lengkap']; ?></td>
      <td><?php echo $result['jenis_kelamin']; ?></td>
      <td><?php echo $result['alamat']; ?></td>
      <td><img src="adminbg/<?php echo $result['foto']; ?>" style=" width: 120px;"></td>
        <td><?php echo $result['level']; ?></td>
      <td>
          <p><a href="tambahadmin2.php?ubah=<?php echo $result['id_admin']; ?>" class="w3-button w3-blue w3-medium w3-round-xlarge">Edit</a></p>
          <p><a href="adminphp/proses.php?hapus=<?php echo $result['id_admin']; ?>" class="w3-button w3-blue w3-medium w3-round-xlarge" onClick="return confirm('apakah anda ingin menghapus data tersebut')">Hapus</a></p>
      </td>

    </tr>

    <?php
          }
    ?>
  </table>
</div>

<!-- isi -->
    

</body>
</html>
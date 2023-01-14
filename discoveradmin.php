<?php
  include 'tambahbukuphp/koneksi.php';
  include 'adminphp/session.php';
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
  <h1>Selamat datang <?php echo $_SESSION['username'] ?></h1>
</div>

<!-- isi -->
<div class="w3-container">
  <h2>Tambah Buku</h2>
  <p>Silahkan tambahkan buku yang anda inginkan ataupun juga menghapus dan mengedit buku yang
  sudah disimpan</p>

  <p><a href="tambahbuku.php" class="w3-button w3-blue w3-medium w3-round-xlarge">Tambah Buku</a></p>

  <table class="w3-table-all w3-card-4 w3-centered">
    <tr>
      <th>No.</th>
      <th>Judul Buku</th>
      <th>Nama Pengarang</th>
      <th>Ketagori Buku</th>
      <th>Ketebalan Buku</th>
      <th>Sinopsis</th>
      <th>Ranting</th>
      <th>Foto Sampul</th>
      <th>Foto 1</th>
      <th>Foto 2</th>
      <th>Aksi</th>

    </tr>
    <tr>
      <?php
          while ($result = mysqli_fetch_assoc($sql)) {
      ?>
      <td><?php echo ++$no; ?>.</td>
      <td><?php echo $result['judul_buku']; ?></td>
      <td><?php echo $result['nama_pengarang']; ?></td>
      <td><?php echo $result['ketagori_buku']; ?></td>
      <td><?php echo $result['ketebalan_buku']; ?></td>
      <td><?php echo $result['sinopsis']; ?></td>
      <td><?php echo $result['ranting']; ?></td>
      <td><img src="img/<?php echo $result['foto_sampul']; ?>" style=" width: 200px;"></td>
      <td><img src="img/<?php echo $result['foto_1']; ?>" style=" width: 200px;"></td>
      <td><img src="img/<?php echo $result['foto_2']; ?>" style=" width: 200px;"></td>

      <td>
          <p><a href="tambahbuku.php?ubah=<?php echo $result['id_buku']; ?>" class="w3-button w3-blue w3-medium w3-round-xlarge">Edit</a></p>

          <p><a href="tambahbukuphp/proses.php?hapus=<?php echo $result['id_buku']; ?>" class="w3-button w3-blue w3-medium w3-round-xlarge" onClick="return confirm('apakah anda ingin menghapus data tersebut')">Hapus</a></p>
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
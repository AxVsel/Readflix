<!DOCTYPE html>
<html>
<title>Register Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w3-card-4  w3-display-middle" style="width: 40%;">
  <div class="w3-container w3-blue">
    <h2>Register</h2>
  </div>

  <form class="w3-container" method="POST" action="userphp/proses.php" enctype="multipart/form-data">
          <p>      
            <label class="w3-text-black"><b>Username</b></label>
            <input required class="w3-input w3-border w3-white" name="username" type="text"></p>
            <p>      
            <label class="w3-text-black"><b>Password</b></label>
            <input required class="w3-input w3-border w3-white" name="password" type="Password"></p>
            <p>      
            <label class="w3-text-black"><b>Nama Lengkap</b></label>
            <input required class="w3-input w3-border w3-white" name="nama_user" type="text"></p>
           
            <p>      
            <label  class="w3-text-black"><b>Alamat</b></label>
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

            <p><button type="submit" name="aksi" value="reg" class="w3-button w3-blue w3-medium w3-round-xlarge">Tambahkan</button></p>
  </form>

</div>

</body>
</html> 

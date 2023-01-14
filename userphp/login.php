<?php 
  session_start();
  include 'koneksi.php';
  
  

  if(isset($_POST['login'])){

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $id_user = mysqli_real_escape_string($conn,$_POST['id_user']);
  $nama_user = mysqli_real_escape_string($conn,$_POST['nama_user']);

  $sql=mysqli_query($conn,"select * from tb_user where username= '$username' && password='$password'");

  $cek = mysqli_num_rows($sql);
  	if($cek > 0){
  		$data = mysqli_fetch_assoc($sql);
        if($data['status_langganan'] =="aktif"){
        	$_SESSION['username'] = $username;
          $_SESSION['id_user'] = $id_user;
          $_SESSION['nama_user'] = $nama_user;
        	$_SESSION['status_langganan'] = "aktif";
        	header("location: ../discoveruser.php");
        } elseif ($data['status_langganan']=="tidak") {
        	$_SESSION['username'] = $username;
        	$_SESSION['status_langganan'] = "tidak";
        	header("location: ../discoveruser.php");
        } else {
        	echo "password salah";
        }
  	} else{

  		header("location: ../error.php");

  	}

  }

?>
<?php 
  include 'koneksi.php';
  //include 'session.php';
  session_start();
  

  if(isset($_POST['login'])){

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $sql=mysqli_query($conn,"select * from tb_admin where username= '$username' && password='$password'");

  $cek = mysqli_num_rows($sql);
  	if($cek > 0){
  		$data = mysqli_fetch_assoc($sql);
        if($data['level'] =="admin"){
        	$_SESSION['username'] = $username;
        	$_SESSION['level'] = "admin";
        	header("location: ../discoveradmin.php");
        } elseif ($data['level']=="user") {
        	$_SESSION['username'] = $username;
        	$_SESSION['level'] = "user";
        	header("location: ../discoveradmin.php");
        } else {
        	echo "password salah";
        }
  	} else{

  		header("location: ../errora.php");

  	}

  }

?>
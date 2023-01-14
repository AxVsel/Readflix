<?php

  include 'userphp/koneksi.php';
  include 'userphp/login.php';

?>

<!DOCTYPE html>
<html>
<title>Login user</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4  w3-display-middle" style="width: 40%;">
  <div class="w3-container w3-blue">
    <h2>Login</h2>
  </div>
  <form class="w3-container" method="POST" action="userphp/login.php">
    <p>      
    <label class="w3-text-black w3-center"><b>username</b></label>
    <input class="w3-input w3-border w3-white" name="username" type="text"></p>
    <p>      
    <label class="w3-text-black w3-center"><b>password</b></label>
    <input class="w3-input w3-border w3-white" name="password" type="password"></p>
   <!--  <p> 
      <input class="w3-check" type="checkbox" checked="checked">
      <label>Ingat saya</label></p> -->

    <p><b><a href="registeruser.php" style="color: blue;">Register</a></b></p>
    <p>
     
    <button type="submit" name="login" class="w3-button w3-blue w3-medium w3-round-xlarge">Login</button></p>

  </form>
</div>

</body>
</html> 
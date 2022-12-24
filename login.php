<?php
    require 'function.php';

   if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mySqli_query($conn,"SELECT * FROM login where email='$email'and password='$password'");

    $hitung = mySqli_num_rows($cekdatabase);

    if($hitung>0){
      $_SESSION['log'] = 'True';
      header('location:index.php');
    }else{
      header('location:login.php');
    }
  }
?>
<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
 </head>
 <body>
   <div class="container">
  <br>
       <form method="post">
   <h2>Login</h2><br>
   

   <label>Username :</label>
   <input id="email" name="email" placeholder="email" type="text">

   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password">
   
   <button name="submit" href="index.php">LOGIN</button>
    </form>
   </div>
 </body>
</html>
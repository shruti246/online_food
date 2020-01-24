<?php
require_once("connection.php");
session_start();
if(isset($_POST['submit'])){
//echo "h";exit;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
}
$result=mysqli_query($con,"select * from admin_login where email='$email' and password='$password'");
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$row=mysqli_fetch_assoc($result);
if($row){
  
      $_SESSION["name"]=$row['name'];
   //echo $_SESSION["name"];
  header('Location: admin_dashboard.php');
}
else {
  // header('Location:admin.php');
    //echo "fail";
   }

   $cookie_name="localhost";
   $cookie_value=$row['email'];
   setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
 //  echo  $cookies_name;exit;

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>


</style>
</head>


    
<body>
<h3><center> ADMIN LOGIN </center> </h3> 
<br><br>
   <div class="container" >
   <div class="row">
   <div class="col-sm-4">

</div>

<div class="border">
<div class="col-sm-6" >
<form method="post">
<p>email:</p>
<input type="email" name ="email" size="35" required><br><br>
<p>password:</p>
<input type="text" name="password" size="35" required><br><br>
<input type="submit" name="submit">
</form>
</div>
</div>

    
</body>
</html>




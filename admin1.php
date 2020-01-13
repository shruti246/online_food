<?php
session_start();
$server="localhost";
$user="root";
$password="shruti";
$dbname="food";

$con= mysqli_connect($server,$user,$password,$dbname);
if($con)
{
   // echo " connection";

}
else{

   // echo"not connected";
}
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
   
   header('Location: admin_dashboard.php');
}

else {
   //header('Location: admin.php');
    echo "fail";
   }
  // ss2@gmail.com
  //12343
?>
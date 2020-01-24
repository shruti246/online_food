<?php
include("connection.php");


$id=$_REQUEST['id'];
//echo $id;
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $mail=$_POST['email'];
  $password=$_POST['pword'];
  
  $query="update registration set name='$name',lname='$lname',email='$mail',password='$password'";
  $result=mysqli_query($con,$query);
  if($result){
      echo"update successfully";
  }else{
      echo"not update";
  }
}


?>
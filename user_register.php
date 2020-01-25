<?php
include("connection.php");
// $name=$_POST['name'];
// $lname=$_POST['lname'];
// $email=$_POST['email'];
// $password=$_POST['password'];

// $res = mysqli_query($con, "INSERT INTO registration(id, name, lname,email, password) 
// values (null, '".$_POST['name']."','".$_POST['lname']."', '".$_POST['email']."', '".$_POST['password']."')");
// if($res){

//    header("location:register.php");
// }else{

//     echo "registration not successfull";
//     exit("Problem in db connection : ".mysqli_error($con));

// }
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $lname=$_POST['lname'];
  // echo $lname;exit;
  $mail=$_POST['email'];
  $password=$_POST['password'];
   
  $query="insert into registration(name,lname,email,password)values('$name','$lname','$mail','$password')";
   // echo $query;
  $result=mysqli_query($con,$query);
  if($result){
     header('location:login.php');
  }else{
    echo"not ok";
  }
}

?>
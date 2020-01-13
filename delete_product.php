<?php
$id=$_REQUEST['id'];
//echo $id;
$server="localhost";
$uname="root";
$password="shruti";
$dbname="food";
  $con=mysqli_connect($server,$uname,$password,$dbname);
  if($con){

 // echo "connect";
 }else{
     echo "not connect";
 }
 $query="delete from product where id=$id";
 //echo $query;
 $result=mysqli_query($con,$query);
 if($result){
   header("location:product_dashboard.php");
 }else{
     echo"not ok";
 }
?>
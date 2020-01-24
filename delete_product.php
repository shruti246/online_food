<?php
$id=$_REQUEST['id'];
//echo $id;



include("connection.php");


 $query="delete from product where id=$id";
 //echo $query;
 $result=mysqli_query($con,$query);
 if($result){
   header("location:product_edit_delete.php");
 }else{
     echo"not ok";
 }
?>
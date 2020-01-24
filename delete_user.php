<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from registration where id=$id";
$result=mysqli_query($con,$query);
if($result){
   header("location:edit_delete.php");  
}else{
    echo"nk";
}



?>
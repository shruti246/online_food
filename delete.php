<?php
$id=$_REQUEST['id'];


include("connection.php");

$query="delete from registration where id=$id";
$result=mysqli_query($con,$query);
if($result){
    echo"ok";
}
else{
    echo"not ok";
}
?>
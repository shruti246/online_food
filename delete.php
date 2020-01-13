<?php
$id=$_REQUEST['id'];
$server="localhost";
$user="root";
$pas="shruti";
$dbname="food";
$con=mysqli_connect($server,$user,$pas,$dbname);
if($con){
    echo"connect";
}
else{
    echo"not connect";
}
$query="delete from registration where id=$id";
$result=mysqli_query($con,$query);
if($result){
    echo"ok";
}
else{
    echo"not ok";
}
?>
<?php
$server="localhost";
$uname="root";
$pword="shruti";
$dbname="food";
$con=mysqli_connect($server,$uname,$pword,$dbname);
if($con){
    echo"connect";
}else{
    echo"not connect";
}
?>
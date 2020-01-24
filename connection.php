<?php
$server="localhost";
$uname="webnjwej_shruti";
$pword="shruti@12345";
$dbname="webnjwej_shr_food";
$con=mysqli_connect($server,$uname,$pword,$dbname);
if($con){
  //echo"connect";
}else{
    echo"not connect";
}
?>
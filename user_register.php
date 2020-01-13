<?php
$server="localhost";
$user="root";
$password="shruti";
$dbname="food";
$con = mysqli_connect($server, $user, $password, $dbname);
if($con){
    echo "database created.";
}else{
echo "database not created";
exit("Problem in db connection : ".mysqli_error($con));

}
// $name=$_POST['name'];
// $lname=$_POST['lname'];
// $email=$_POST['email'];
// $password=$_POST['password'];

$res = mysqli_query($con, "INSERT INTO registration(id, name, lname,email, password) 
values (null, '".$_POST['name']."','".$_POST['lname']."', '".$_POST['email']."', '".$_POST['password']."')");
if($res){

   header("location:register.php");
}else{

    echo "registration not successfull";
    exit("Problem in db connection : ".mysqli_error($con));

}


?>
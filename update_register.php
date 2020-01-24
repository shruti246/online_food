<?php
include("connection.php");
?>
<?php
if(isset($_POST['edit'])){
    
$name=$_POST['name'];
//echo $name;exit;
$lname=$_POST['lname'];
//echo $lname;exit;
$email=$_POST['email'];
$password=$_POST['password'];
//echo $password;exit;
}
$query="UPDATE registration SET name='$name',lname='$lname',email='$email', password='$password' where id=$id";
$result=mysqli_query($con,$query);
if($result){
echo"update succeesfully ";

}else{

    echo"unsuccess";
}
 ?>
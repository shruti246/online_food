<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
session_start();
if($_SESSION["name"]==""){
    header('location:admin.php');
}else{
     echo"ADMIN NAME: ".$_SESSION["name"];
}




$query="select * from registration where id=$id";
//echo $query;
$result=mysqli_query($con,$query);
//print_r($result);
$row=mysqli_fetch_assoc($result);
//print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.a{
    
    margin:90px;
    
}
.b{
    border: 1px solid #ddd;
    padding:30px;
}


</style>
<body>
    <div class="a">
    <div class="container">
    <form action="update_register1.php" method="post" class="b">
    <p>id</p>
     <input type="text" name="id" value="<?php echo $row['id']?>" size="45"><br><br>
     <p>FirstName</p>
     <input type="text" name="name" value="<?php echo $row['name']?>" size="45"><br><br>
     <p>LastName</p>
    <input type="text" name="lname" value="<?php echo $row['lname']?>"size="45"><br><br> 
     <p>email</p>
     <input type="text" name="email" value="<?php echo $row['email']?>" size="45"><br><br>
     <p>password</p>
     <input type="text" name="pword" value="<?php echo $row['password']?>" size="45"><br><br>
     <input type="submit" name="submit" value="submit" size="45">
    </form>
    </div>
    </div>
</body>
</html>


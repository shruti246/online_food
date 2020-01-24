<?php
include("connection.php");

session_start();
if($_SESSION["name"]== "")
{
  header('location:admin.php');
}else{
  echo "ADMIN NAME: ". $_SESSION["name"];
}

include("connection.php");



$query="select * from registration";
//echo $query;
$result=mysqli_query($con,$query);
//print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>

h1{
    font-size:40px;
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>
<h1><center>REGISTER USER</center></h1>
<br><br>
<table> 
<tr>
<th>id</th>
<th>name</th>
<th>lastname</th>
<th>email</th>
<th>password</th>
<th>edit</th>
<th>delete</th>
</tr>



<?php
//print_r($row);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['name']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['email']."</td>
  <td>".$row['password']."</td>
  <td><a href='edit_user.php?id=$id'>edit</a></td>
  <td><a href='delete_user.php?id=$id'>delete</a></td>
    <tr>";
}
?>
</table>
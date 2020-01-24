<?php
include("connection.php");
session_start();
if($_SESSION["name"]){
   
  echo"Admin Name ".$_SESSION["name"];
}else{
  header('location:admin.php');
}
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

</tr>



<?php
//print_r($row);
while($row=mysqli_fetch_assoc($result)){
echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['name']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['email']."</td>
  <td>".$row['password']."</td>
    <tr>";
}
?>
</table>
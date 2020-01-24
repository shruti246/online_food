<?php
include("connection.php");
session_start();
if($_SESSION["name"]=="")
{
    header('location:admin.php'); 
}else {
          echo "ADMIN NAME:".$_SESSION["name"];
}
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
<h1>Product List</h1>
<table border=1>
<tr>
<th>id</th>
<th>name</th>
<th>actual_price</th>
<th>discount_price</th>
<th>decription</th>
<th>image</th>

</tr>
 <?php
 $query="select* from product";
$row=mysqli_query($con,$query);
//$result=mysqli_fetch_assoc($row);
//print_r($result);

while($result=mysqli_fetch_assoc($row)){
  $id=$result['id'];
echo"
<tr>
<td>".$result['id']."</td>
<td>".$result['name']."</td>
<td>".$result['actual_price']."</td>
<td>".$result['discount_price']."</td>
<td>".$result['decription']."</td>
<td>".$result['image']."</td>

</tr>";

}
?>
</table>





<?php
include("connection.php");
?>
<?php 
session_start();
 if($_SESSION["name"])
{

   echo  "welcome ".$_SESSION["name"];
} 
else{
    header('Location: admin.php');

}

?>

<a href="product.php">Add Product</a>
<br><br>
<table border="1">
    <tr>
    <th>srno</th>
    <th> name</th>
    <th>lastname</th>
    <th> email </th>
    <th>password </th>
    <th>action</th>
</tr>
<?php
$query="select * from registration ";
//echo $query;exit;
$result=mysqli_query($con ,$query);
//$row=mysqli_fetch_array($result);
while($row=mysqli_fetch_assoc($result)){

echo "<tr>
     <td>".$row['id']."</td>
    <td>". $row['name']."</td>
    <td>".$row['lname']."</td>
    <td>". $row['email']."</td>
    <td>".$row['password']."</td>
    <td><a href='edit.php?id=".$row['id']."'>EDIT</a> </td>
    <td><a href='delete.php?id=".$row['id']."'>DELETE</a> </td>

</tr>";

}
?>
</table>

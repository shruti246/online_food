<?php
$server="localhost";
$uname="root";
$password="shruti";
$dbname="food";
  $con=mysqli_connect($server,$uname,$password,$dbname);
  if($con){

 // echo "connect";
 }else{
     echo "not connect";
 }
?>
<table border=1>
<tr>
<th>id</th>
<th>name</th>
<th>actual_price</th>
<th>discount_price</th>
<th>decription</th>
<th>image</th>
<th>ACTION</th>
</tr>
 <?php
 $query="select* from category";
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
<td><a href='edit_product.php?id=".$result['id']."'>EDIT</a> </td>
<td><a href='delete_product.php?id=".$result['id']."'>DELETE</a> </td>

</tr>";

}
?>
</table>





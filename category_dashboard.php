<?php
$server="localhost";
$unmae="root";
$pword="shruti";
$dbnmae="food";
$con=mysqli_connect($server,$unmae,$pword,$dbname);
if($con){
    echo"success";

}else{
    echo"fail";

}

?>
<table>
<th>id</th>
<th>name</th>
<th>image</th>
</table>
<?php
 $query="select* from category";
$row=mysqli_query($con,$query);
//$result=mysqli_fetch_assoc($row);
//print_r($result);

while($result=mysqli_fetch_assoc($row)){
  $id=$result['id'];
//echo  $id;
}
?>

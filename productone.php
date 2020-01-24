<?php
require_once("connection.php");
$query="select * from product";
$result=mysqli_query($con,$query);

//print_r($row);
while($row=mysqli_fetch_assoc($result)){
    ?>
<img src="products/<?php echo $row['image'] ?>" height="100" width="100"/>

<?php
}
?>
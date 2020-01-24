<?php
$id=$_REQUEST['id'];
//echo $id;

include("connection.php");
$query ="select * from product where id=$id";
// echo $query;
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

 
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>


</style>

</head>
<body >
<h2 style="color:#00ff00"><center><b>Order Detail<b></center></h2>
<div class="container">
<div class="row">
<div class="col-sm-4">


</div>

<div class=a>

<div class="col-sm-6">
    <form action="update_product.php" method="post" enctype="multipart/form-data" >
    <br>

    <input type="hidden" name="id" size="50" value="<?php echo $row['id']?>" ><br><br>
    <p>Name</p>
    <input type="text" name="name" size="50" value="<?php echo $row['name']?>" ><br><br>
    <p>Actual_price</p>
    <input type=" text" name="actual_price" size="50" value="<?php echo $row['actual_price']?>" >     <br><br>
    <p> Discount_price</p>
   <input type="text" name="discount_price" size="50" value="<?php echo $row['discount_price']?>" ><br><br>
   <p> Decription</p>
   <input type="text" name="decription" size="50" value="<?php echo $row['decription']?>" ><br><br>
   <p> Image</p>
   <img src="products/<?php echo $row['image']?>" height="100" width="100"/>
   <input type="file" name="file" size="35"><br><br>
    <input type="submit" name="submit" value="submit"><br><br>
    </div>
</div>
</div>
</div>
</div>
    </form>
</body>
</html>
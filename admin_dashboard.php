<?php
include("connection.php");

session_start();
if($_SESSION["name"]==""){
    header('location:admin.php');
}else{
        echo "<h2 style='color:blue'>welcome ".$_SESSION["name"]."</h1>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.a{
    background-color:black;
   
    padding:40px;
    color:white;
    font-size:30px;
}


</style>

<body>
    <h1><center>ADMIN DASHBOARD</center></h1>
    <br><br>
    <div class="container">
    <div class="row">
    <div class="col-sm-3">
    <a href="user_register1.php">
    <p class="a">USER </p></a>
    </div>
    <div class="col-sm-3">
    <a href="product.php">
    <p class="a">Add Product</p></a>
    </div>
    <div class="col-sm-3">
    <a href="edit_delete.php">
    <p class="a">U Edit/Delete</p></a>
    </div>
    <div class="col-sm-3">
    <a href="product_list.php">
    <p class="a">Product List</p></a>
    </div>
  
    <div class="col-sm-3">
    <a href="product_edit_delete.php">
    <p class="a">P edit/delete</p></a>
    </div>
    <div class="col-sm-3">
    <a href="order.php">
    <p class="a">Category</p></a>
    </div>
    <div class="col-sm-3">
    <a href="order.php">
    <p class="a">Category</p></a>
    </div>
    <div class="col-sm-3">
    <a href="order.php">
    <p class="a">Category</p></a>
    </div>
    </div>
    </div>
</body>
</html>
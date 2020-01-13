<?php


$server="localhost";
$username="root";
$password="shruti";
$dbname="food";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con){

   // echo "connect";
}else{
    echo "not connect";
}



if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $actual_price=$_POST['actual_price'];
  
   $discount_price=$_POST['discount_price'];
   
    $decription=$_POST['decription'];

    // CHECK FILE 
    if(isset($_FILES['file'])){
       // echo"ggh";exit;
        $target_file  = "products/".$_FILES["file"]["name"];
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    }
    $image=$_FILES["file"]["name"];
   
}
$query="INSERT INTO product(name,actual_price,discount_price,decription,image)
               values('$name',' $actual_price',' $discount_price','$decription','$image')";
//echo $query;

$result= mysqli_query($con, $query);
               if($result){

               header("location:product_dashboard.php");

               }else{

                echo"unsuccss";
               }
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
body{
    background-image: url("images/food.jpeg");
}
.a{

    border-style: solid;
   
   
    background-color: white;
}
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
    <form   method="post" enctype="multipart/form-data" >
    <br>
    <p>Name</p>
    <input type="text" name="name" size="50"><br><br>
    <p>Actual_price</p>
    <input type=" text" name="actual_price" size="50">     <br><br>
    <p> Discount_price</p>
   <input type="text" name="discount_price" size="50"><br><br>
   <p> Decription</p>
   <input type="text" name="decription" size="50"><br><br>
   <p> Image</p>
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
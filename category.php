<?php
include("connection.php");
?>
<?php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
 //CHECK FILE 
  if(isset($_FILES['file'])){
      $target_file = "products/".$_FILES["file"]["name"];
       $image=$_FILES['file']['name'];

      if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
        echo "The file  has been uploaded.";
     
      }
      else{
        echo "Sorry, there was an error uploading your file.";   
      }
  }

 }

$query="insert into category(name,image)VALUES('$name','$image')";
//echo $query;
$result=mysqli_query($con,$query);

if($result){
    echo"ok";
}else{
    echo"not ok";
}
?>





<!DOCTYPE html>
<html lang="en">
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


    
<body>
<h3><center> category </center> </h3> 
<br><br>
   <div class="container" >
   <div class="row">
   <div class="col-sm-4">

</div>

<div class="border">
<div class="col-sm-6" >
<form method="post" enctype="multipart/form-data">
<p>name:</p>
<input type="text" name ="name" size="35" required><br><br>
<p>file:</p>

<input type="file" name="file" size="35" required><br><br>
<input type="submit" name="submit">
</form>
</div>
</div>

    
</body>
</html>




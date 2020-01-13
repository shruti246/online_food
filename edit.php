<?php

$server="localhost";
$user="root";
$password="shruti";
$dbname="food";
$con=mysqli_connect($server,$user,$password,$dbname);
if($con){
    echo"success";
}else{

    echo"unsuccess";
}
$id=$_GET['id'];
$query="select *from  registration where id=$id ";
$row=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($row);
//echo $result['name'];
//$id1=$result['id'];
//echo $id1;
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
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form method="post"  action="update_register.php"  > 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>id<label>*</label></span>
						<input type="text" name="id" id="id" value="<?php echo $result['id']?>" required> 
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
						<input type="text" name="name" id="name" value="<?php echo $result['name']?>" required> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input type="text" name="lname" id="lname" value="<?php echo $result['lname']?>" required> 
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email" id="email" value=" <?php echo $result['email']?>"required> 
					 </div>
					
				     <div class="register-bottom-grid">
						    
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="text" name="password"  value=" <?php echo $result['password']?>"required>
							 </div>
							 
					 </div>
                    
                     <div class="register-but">
				 
                 <input type="submit"  name="edit" value="edit">
                 <div class="clearfix"> </div>
             </form>
          </div>
				</div>




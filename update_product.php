<?php
$server="localhost";
$user="root";
$pass="shruti";
$dbname="food";
$con=mysqli_connect($server,$user,$pass,$dbname);
if($con){
    echo"conect";
}
else{
    echo"fail";
}

 $id=$_REQUEST['id'];
//echo $id;
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $actual_price=$_POST['actual_price'];
    $dicaunt_price=$_POST['discount_price'];
  //  echo $dicaunt_price;exit;
    $decription=$_POST['decription'];
    $imageQuery = "";
     // CHECK FILE 
     print_r($_FILES);
     if(isset($_FILES)){
        $target_file  = "products/".$_FILES["file"]["name"];
        $image=$_FILES["file"]["name"];
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $imageQuery = " , image = '$image'";
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
      
    }
  
    
}
echo $query="UPDATE product SET name='$name',actual_price=' $actual_price',discount_price=' $dicaunt_price', decription=' $decription' $imageQuery  WHERE id=$id";
 
 $res = mysqli_query($con, $query);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    echo $query;
?>
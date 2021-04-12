<?php
$typeof_vehicle=$_POST['typeof_vehicle'];
$vehicle_id=$_POST['vehicle_id'];
$owned_by=$_POST['owned_by'];
$brand_hondai=$_POST['brand_hondai'];
$model=$_POST['model'];

$con=mysqli_connect('localhost','root',12345,'hondairiya');
 $updatequery="UPDATE addvehicle SET typeof_vehicle='$typeof_vehicle', brand_hondai ='$brand_hondai', model='$model' where vehicle_id='$vehicle_id' ";

if(mysqli_query($con,$updatequery)){
	header('location:myvehicle.php');
}

mysqli_close($con);
?>
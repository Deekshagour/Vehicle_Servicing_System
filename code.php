<?php
$typeof_vehicle=$_POST['typeof_vehicle'];
$vehicle_id=$_POST['vehicle_id'];
$owned_by=$_POST['owned_by'];
$brand_hondai=$_POST['brand_hondai'];
$model=$_POST['model'];

$con=mysqli_connect('localhost','root',12345,'hondairiya');
 $q="insert into addvehicle(typeof_vehicle,vehicle_id,owned_by,brand_hondai,model)values('$typeof_vehicle','$vehicle_id','$owned_by','$brand_hondai','$model')";

if(mysqli_query($con,$q)){
	header('location:home.php');
}
mysqli_close($con);
?>
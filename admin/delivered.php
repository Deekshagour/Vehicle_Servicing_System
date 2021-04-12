<?php
session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
    header('location:login.php');
}

$id = 0;
if(isset($_GET['id'])){
	
	$id=$_GET['id'];
}
echo $update = "update booking set booking_status='delivered' where bookingid='$id'";
$con=mysqli_connect("localhost","root",12345,"hondairiya");
if(mysqli_query($con,$update)){
	header('location:home.php');
}


?>
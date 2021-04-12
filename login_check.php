<?php
session_start();

$con=mysqli_connect('localhost','root',12345,'hondairiya');
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$q="select * from register where email_id='$email_id' and password='$password' ";
$result=mysqli_query($con,$q);
$numrows = mysqli_num_rows($result);
if( $numrows ==1){
	$_SESSION['email_id']=$email_id;
	$_SESSION['userlevel']="USER";
	header('location:home.php');
	
	
}else{
	header('location:login.php');
}


?>
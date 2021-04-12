<?php
session_start();

$con=mysqli_connect('localhost','root',12345,'hondairiya');
$username=$_POST['username'];
$password=$_POST['password'];
$q="select * from admin where username='$username' and password='$password' ";
$result=mysqli_query($con,$q);
$numrows = mysqli_num_rows($result);
if( $numrows ==1){
	header('location:home.php');
	$_SESSION['username']='$username';
	   $_SESSION['userlevel'] = 'ADMIN';
	
}else{
	header('location:login.php');
}


?>
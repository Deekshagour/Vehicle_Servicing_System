<?php
$name=$_POST['name'];
$email_id=$_POST['email_id'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root',12345,'hondairiya');
$q="insert into register(name,email_id,mobile_no,address,password)values('$name','$email_id',$mobile_no,'$address',$password)";

$result=mysqli_query($con,$q);
if($result){
	header('location:login.php');
}
else{
	header('location:register.php');
}



?>
<?php
$email_id=$_GET['id'];
$con=mysqli_connect('localhost','root',12345,'hondairiya');


$q="delete from register where email_id='$email_id'";
$result=mysqli_query($con,$q);
if ($result){
	echo "user is being deleted";
    header('location:home.php');
}
else{
echo "user is not deleted";
}
?> 	
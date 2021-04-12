<?php
$booking_date=$_POST['booking_date'];
$pick_up=$_POST['pick_up'];
$booking_status=$_POST['booking_status'];
$registration_id=$_POST['registration_id'];
$booked_by=$_POST['booked_by'];
$booked_for=$_POST['booked_for'];

$con=mysqli_connect('localhost','root',12345,'hondairiya');
$q="insert into booking(booking_date,pick_up,booking_status,registration_id,booked_by,booked_for)values('$booking_date','$pick_up','$booking_status','$registration_id','$booked_by','$booked_for')";

$result=mysqli_query($con,$q);
if($result){
    header('location:home.php');
}





?>
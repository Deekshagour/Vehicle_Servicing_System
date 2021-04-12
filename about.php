<?php
$name=$_POST['name'];
$email_id=$_POST['email_id'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','hondai');
echo $q="insert into register(name,email_id,mobile_no,address,password)values('$name','$email_id',$mobile_no,'$address',$password)";



?>
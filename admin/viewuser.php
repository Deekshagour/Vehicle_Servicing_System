<?php
session_start();
if(!isset($_SESSION['username']) OR $_SESSION['userlevel']!="ADMIN"){
    header('location:login.php');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="grid/grid.css">
<title>HONDAI</title>
<style>
a{
	color:white;
}
	</style>
</head>

<body style="background-color:black;">


<div class="container">
<div class="row">
<div class="col-12">
<img src="image/banner.jpg" height="150px" width="100%">
</div>
</div>

<?php
include('nav.php');
?>
<div class="col-4" style="padding-right:20%;padding-top:50px;">

<?php
$con = mysqli_connect("localhost","root",12345,"hondairiya");


$q = "select * from register";

$result = mysqli_query($con,$q);

$result_rows = mysqli_fetch_assoc($result);



?>
</div>


<table align="center" style="color:white;margin-left:-20px;" border="4" width="70%" cellspacing="5px" cellpadding="5px;">

<tr>

<th>Name</th>
<th>Email</th>
<th>mobile</th>
<th>Address</th>
<th>Action</th>



</tr>

<?php

do{
?>	
	<tr>
	<td> <?php echo  $result_rows['name']; ?></td>
	<td> <?php echo $result_rows['email_id']; ?></td>
	<td> <?php  echo $result_rows['mobile_no']; ?></td>
	<td> <?php echo $result_rows['address']; ?> </td>
	<td><a href="delete.php?id=<?php echo $result_rows['email_id'] ?>">Delete user </td>
	
	</tr>
<?php	
}while($result_rows = mysqli_fetch_assoc($result))
	?>
</table>
</div>


</div>
</body>
</html>

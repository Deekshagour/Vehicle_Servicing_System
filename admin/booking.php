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
</head>
<style>
a{
	color:white;
}
	</style>
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


<?php
$con=mysqli_connect("localhost","root",12345,"hondairiya");


$q="select * from booking where booking_status='PLACED'";

$result=mysqli_query($con,$q);

$result_rows = mysqli_fetch_assoc($result);



?>


<div class="row">
<div class="col-6" style="padding-left:100px;padding-top:30px;">

<table width="150%" style="color:white;margin-left:-70px;" border="4"  cellspacing="5px" cellpadding="5px">

<tr>

<th>BOOKING DATE</th>
<th>PICK UP</th>
<th>BOOKING STATUS</th>
<th>REGISTRATION ID</th>
<th>BOOKED BY</th>
<th>BOOKED FOR</th>
<th> ACTION</th>
</tr>





<?php

do{
?>	
	<tr>
	<td> <?php echo  $result_rows['booking_date']; ?></td>
	<td> <?php echo $result_rows['pick_up']; ?></td>
	<td> <?php echo $result_rows['booking_status']; ?></td>
	<td> <?php echo $result_rows['registration_id']; ?> </td>
	<td> <?php echo $result_rows['booked_by']; ?> </td>
	<td> <?php echo $result_rows['booked_for'];?> </td>
	<td> <a href="change_booking_status.php?id=<?php echo $result_rows['bookingid'];?>">CONFIRM</a></td>

	</tr>
<?php	
}while($result_rows = mysqli_fetch_assoc($result))
	?>


</table>




</div>


</div>

</div>


</div>
</body>
</html>
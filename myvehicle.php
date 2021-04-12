<?php
session_start();
if(!isset($_SESSION['email_id']) OR $_SESSION['userlevel']!="USER"){
    header('location:login.php');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="grid/grid.css">
<title>HONDAI</title>
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

<div class="row">
<div class="col-9">
<div style="color:white;">
<h5 align="right"><a href="logout.php" style="color:white;align:right;">logout</a> 
</div>
</div>


<div class="col-8" style="padding-left:100px;padding-top:30px;">





<?php

$con=mysqli_connect("localhost","root",12345,"hondairiya");
$owned_by = $_SESSION['email_id'];

$q="select * from addvehicle where owned_by='$owned_by'";

$result=mysqli_query($con,$q);

$result_rows = mysqli_fetch_assoc($result);



?>



<table style="color:white"border="4" width="3px" cellspacing="5px" cellpadding="5px">

<tr>

<th>TYPE OF VEHICLE</th>
<th>VEHICLE ID</th>
<th>OWNED BY</th>
<th>BRAND HONDAI</th>
<th>MODEL</th>
<th>Action</th>
</tr>





<?php

do{
?>	
	<tr>
	<td> <?php echo  $result_rows['typeof_vehicle']; ?></td>
	<td> <?php echo $result_rows['vehicle_id']; ?></td>
	<td> <?php  echo $result_rows['owned_by']; ?></td>
	<td> <?php echo $result_rows['brand_hondai']; ?> </td>
	<td> <?php echo $result_rows['model']; ?> </td>
	<td> <a href="editmyvehicle.php?vehicle_id=<?php echo $result_rows['vehicle_id'];?>">UPDATE</a></td>
	
	</tr>
<?php	
}while($result_rows = mysqli_fetch_assoc($result))
	?>








</table>
</div>



</div>
</div>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['email_id']) OR $_SESSION['userlevel']!="USER"){
    header('location:login.php');
}
$vehicle_id = 0;
if(isset($_GET['vehicle_id'])){
	$vehicle_id = $_GET['vehicle_id'];
	
}
$query ="select * from addvehicle where vehicle_id='$vehicle_id'";
$con=mysqli_connect('localhost','root',12345,'hondairiya');
$result = mysqli_query($con,$query);
$resultrows = mysqli_fetch_array($result);



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
<img src="image/banner.jpg" height="200px" width="100%">
</div>
</div>


<?php
include('nav.php');
?>

<div class="col-6">
<div class="margin">
<h1 align="center" style="color:white;font-size:25px;margin-right:50%;">UPDATE</h1>

<table cellpadding="7px" style="color:white; border:5px dotted;padding-top:30px;padding-left:45px;padding-right:60px;">

<form action="updatevehicle.php" method="POST"  >

<tr>
<td><div style="padding-right:20px;margin-left:2%;"><font color="red" font size="4px;">Type of vehicle:
<select name="typeof_vehicle" style="padding:2px;margin-left:5px;">
<option> <?php echo $resultrows[0];?> </option>
<option>car</option>
<option>bike</option>
</select></div></td></tr>

<tr><td><font color="red"; font size="4px";>vehicle_id :<input type="text" name="vehicle_id" value="<?php echo $resultrows[1];?>" style="margin-left:40px;" readonly><br></td></tr>
<tr><td><font color="red"; font size="4px">owned by :<input type="text" name="owned_by" value="<?php echo $resultrows[2];?>" style="margin-left:45px;"><br></td></tr>
<tr><td><font color="red"; font size="4px";>Brand hondai :<input type="text" name="brand_hondai" value="<?php echo $resultrows[3];?>" style="margin-left:19px;"><br></td></tr>
<tr><td><font color="red"; font size="4px";>Model :<input type="text" name="model" value="<?php echo $resultrows[4];?>" style="margin-left:70px;"><br></td></tr>
<tr><td><center><input type="submit" value="Edit My Vehicle"></center></font></td></tr>

</form>
</table>
</div>
</div>

<div style="color:white;">

</div>
<div class="col-3">
<div style="color:white;">
<h5 align="right"><a href="logout.php" style="color:white;align:right;">logout</a> 
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<br><br><br><br>
<h2 align="center" style="background-color:lightgray;padding:5px;">PROJECT BY RIYA MISHRA</h4>
</div>
</div>


</div>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['email_id']) OR $_SESSION['userlevel']!="USER"){
    header('location:login.php');
}
$username = $_SESSION['email_id'];
$query = "select vehicle_id from addvehicle where owned_by='$username'";
$con=mysqli_connect("localhost","root",12345,"hondairiya");
$result = mysqli_query($con,$query);
$resultrows=mysqli_fetch_array($result);


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
<img src="image/banner.jpg" height="120px" width="100%">
</div>
</div>
<div style="clear:both;"></div>

<?php
include('nav.php');
?>





<div class="col-5">
<h1 align="right" style="color:white;font-size:25px;">Make booking for service and repair</h1>
<div align="center" style="color:white; border:3px dotted;padding-top:20px;padding-left:30px;">
<table>


<form action="even.php" method="post" >

<font color="red";font size="4px";>Booking_date :<input type="date" name="booking_date" style="margin-left:30px;"><br><br>

<div style="padding-right:20px;margin-left:2%;"><font color="red" font-size="4px;">Pick_up:
<select name="pick_up" style="padding:4px;margin-left:65px;">
<option>pick up your vehicle</option>
<option>pick from home</option>
<option>drop me home</option>
</select></div>
<br>
<font color="red";font size="4px";>Booking_status :
<select name="booking_status" style="padding:4px;margin-left:20px;" required>

<option>PLACED</option>

</select><br><br>
<font color="red";font size="4px";>vehicle_id :<select name="registration_id" style="margin-left:25px;">
<?php 
do{
	?>
<option value="<?php echo $resultrows[0];?>"><?php echo $resultrows[0];?></option>
<?php
}while($resultrows=mysqli_fetch_array($result));
?>
</select>


<br><br>
<font color="red";font size="4px";>Booked_by :<input type="text" name="booked_by" value="<?php echo $_SESSION['email_id'] ?>" style="margin-left:55px;"><br><br>

<font color="red">Booked_for:
<select name="booked_for" style="padding:4px;margin-left:50px;">
<option>booked your vehicle</option>
<option>servicing</option>
<option>repair</option>
<option>service/repair</option>
</select>

<br><br>
<center><input type="submit" value="Make Booking"></center><br>

</form>
</div>
</div>


<div class="col-1">
<div style="color:white;">

</div>
</div>
</div>





</div>
</body>
</html>
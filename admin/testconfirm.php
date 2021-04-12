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


<div class="row">
<div class="col-2">

<h1><a href="home.php" style="color:red;font-size:20px;">Home</a></h1>
<h1><a href="viewuser.php"style="color:red;font-size:20px;">List of user</a></h1>
<h1><a href="booking.php"style="color:red;font-size:20px;">Booking</a></h1>
<h1><a href="bookingconfirmed.php" style="color:red;font-size:20px;">Booking comfirmed list</a></h1>
<h1><a href="workprogress.php" style="color:red;font-size:20px;">Work in progress</a></h1>
<h1><a href="complete.php" style="color:red;font-size:20px;">Completed</a></h1>
<h1><a href="deliver.php" style="color:red;font-size:20px;">Delivered</a></h1>
<h1 style="color:red;font-size:20px;">Logout</h1>
</div>
<div class="row">
<div class="col-6">
<div class="margin">

<h1 align="center" style="color:white;margin-right:40px;font-size:25px">Change Booking Status</h1>
<table align="center" style="color:white; border:5px dotted;padding-top:20px;padding-left:45px;padding-right:40px;">
<form action="booking.php" method="post">
<tr><td><font color="red";font size="4px";>Booking_id:<input type="text" name="booking_id" style="margin-left:35px;"><br></td></tr>
<tr><td><font color="red";font size="4px";>Vehicle_id :<input type="text" name="vehicle_id" style="margin-left:40px;"><br></td></tr>
<tr><td><font color="red";font size="4px";>Booked_by :<input type="text" name="booked_by" style="margin-left:38px;"><br></td></tr>

<tr><td><font color="red">Booked_for:
<select name="booked_for" style="padding:4px;margin-left:50px;">
<option>booked your vehicle</option>
<option>servicing</option>
<option>repair</option>
<option>service/repair</option>
</select></td></tr>


<tr><td><font color="red";font size="4px";>Booking_status :
<select name="booking_status"style="padding:4px;margin-left:10px;">
<option>confirm your vehicle</option>
<option>confirm</option>
<option>cancel</option>
</select><br></td></tr>

<tr><td><center><input type="submit" value="change booking status"></center><br></td></tr>

</form>
</table>
</div>
</div>






</div>



</div>
</body>
</html>
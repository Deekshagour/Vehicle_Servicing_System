<?php
session_start();
if(!isset($_SESSION['email_id']) OR $_SESSION['userlevel']!="USER"){
    header('location:login.php');
}
$owned_by =$_SESSION['email_id'];
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
<div class="row">
<div class="col-6">
<div class="margin">

<h1 align="center" style="color:white;font-size:30px;margin-right:100px;">Add vehicle</h1>

<table cellpadding="7px" style="color:white; border:5px dotted;padding-top:30px;padding-left:35px;padding-right:40px;">

<form action="code.php" method="post">

<tr>
    <td><div style="padding-left:2%;margin-right:5%;font size=5px;"><font color="red">Typeof_vehicle:</font></td>
<td><select name="typeof_vehicle" style="padding:2px;margin-left:-120%;">
<option> Select your Vehicle </option>
<option>car</option>
<option>bike</option>
</select></div></td></tr>

<tr><td><div style="padding-left:2%;margin-right:10px;font size=5px;"><font color="red";>Vehicle_id :<input type="text" name="vehicle_id" style="margin-left:25px;">
</td></tr></div>

<tr><td><font color="red";>Owned_by :<input type="text" name="owned_by" value="<?php echo $owned_by;?>" readonly style="margin-left:30px;"></td></tr></div>

<tr><td><font color="red"; >Brand_shondai :<input type="text" name="brand_hondai" value="Hondai" readonly style="margin-left:7px;"></td></tr></div>

<tr><td><font color="red"; font size="4px";>Model :<input type="text" name="model" style="margin-left:65px;"></td></tr>
    <tr><td></td><td><input type="submit" value="Addvehicle"><br><br></font></td></tr>

</form>
</table>
</div>
</div>


<div class="row">
<div class="col-3">
<div style="color:white;">
<h5 align="right"><a href="logout.php" style="color:white;align:right;">logout</a> </h5>
</div>
</div>
</div>

<div class="row">
<div class="col-12">
<br><br><br><br>
<h2 align="center" style="background-color:lightgray;padding:5px;">PROJECT BY RIYA MISHRA</h2>
</div>
</div>



</div>
</body>
</html>
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
<img src="image/banner.jpg" height="200px" width="100%">
</div>
</div>


<?php
include('nav.php');
?>
<div class="row">
<div class="col-7">
<h1 align="center" style="color:white;padding-top:20%;font-size:30px;"><i>Your vehicle<br> -is safe in our hands</i></h1>
</div>
</div>

<div class="row">
<div class="col-2">
<div style="color:white;">
<h5 align="right"><a href="logout.php" style="color:white;align:right;">logout</a> 
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<br><br>
<h2 align="center" style="background-color:lightgray;padding:5px;">PROJECT BY RIYA MISHRA</h4>
</div>
</div>






</div>
</body>
</html>

<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cbc";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
	echo "error to connect to database 'cbc': ".mysqli_connect_errno();
}
else {
	
	}
?>



<!DOCTYPE html>
<html>
<head>

  <title>CBC e-Portal</title>

 
  <link id="favicon" rel="shortcut icon" href="../images/emea.png" type="image/png" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

  <link rel="stylesheet" type="text/css"  href= "../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/monthly.css">
  <link rel="stylesheet" type="text/css"  href= "../css/style.css">

  <script type="text/javascript" src='../js/jquery.js'></script>
  <script type="text/javascript" src='../js/bootstrap.min.js'></script>
  <script type="text/javascript" src="../js/monthly.js"></script>
  <script type="text/javascript" src='../js/script.js'></script>

</head>
<body>
<div class="logo"><img src="../images/emea.png" class="emea"></div>





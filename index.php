
<?php
error_reporting(0);
session_start();
if ($_SESSION['cbc_admin']) {
	header('location: admin/admin.php');
}
else if ($_SESSION['cbc_staff']) {
	header('location: staff/staff.php');
}
else{
//include 'dbconnect.php';
session_start();
session_unset();
session_destroy();
}
?>
<title>CBC e-Portal</title>
<link id="favicon" rel="shortcut icon" href="images/emea.png" type="image/png" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

  <link rel="stylesheet" type="text/css"  href= "css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/monthly.css">
  <link rel="stylesheet" type="text/css"  href= "css/style.css">

  <script type="text/javascript" src='js/jquery.js'></script>
  <script type="text/javascript" src='js/bootstrap.min.js'></script>
  <script type="text/javascript" src="js/monthly.js"></script>
  <script type="text/javascript" src='js/script.js'></script>
  <div class="logo"><img src="images/emea.png" class="emea"></div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	    <i><h3 style="float: right;"><?php echo date("l jS \of F Y ") ?></h3></i>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="container">                       <br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-2">
			<a href="admin/login.php" class="btn btn-primary btn-lg" style="min-height:150px; min-width:170px"><br><h4>Sign In As Admin<br><p></p><span class="glyphicon glyphicon-user" style="font-size: 30px"></span></h4></a>
		</div>
		<div class="col-md-2" style="min-height:150px; min-width:170px"></div>
		<div class="col-md-2">
			<a href="staff/login_staff.php" class="btn btn-primary btn-lg" style="min-height:150px; min-width:170px"><br><h4>Sign In As Staff<br><p></p><i class="fa fa-users" style="font-size: 30px"></i></h4></a>
		</div>
		<div class="col-md-3"></div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-6"></div>
		<div  class="col-md-3"><h4>Not Registered? <a href="registration/registration.php" target="_blank">Register Now</a></h4></div>
	</div>
</div>





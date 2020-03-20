<?php
  error_reporting(0);
  session_start();
  if ($_SESSION['cbc_staff']) {
    header('location:staff.php');
  }
  else{
    session_destroy(); 
  }

if ($_POST) {
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'cbc';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  $conn = mysqli_connect($host,$user,$pass,$db);
  $query = " SELECT * from users where username='$username' and password='$password' and status= 'staff' ";
  $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
      session_start();
      $_SESSION['cbc_staff'] = $username;
      $_SESSION['password'] = $password;
      header('location: staff.php');
    }
    else {
      $message = "Invalid username or password ";
    }
 }

?>



<!DOCTYPE html>
<html>
<head>
<title>CBC e-Portal</title>
  
  <link rel="stylesheet" type="text/css"  href= "../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"  href= "../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link id="favicon" rel="shortcut icon" href="../images/emea.png" type="image/png" />
</head>
<body>
  
    
      
       <div align="center">
          <h1>STAFF LOGIN</h1>

           <form action="" method="post" class="container" style="width: 620px">
              
              <div class="input-group" align="center">
                <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="username" required style="width:500px;!important" placeholder="username">
              </div>
              <p></p>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" required style="width:500px;!important" placeholder="password">
              </div>
              <br>

              <input type="submit" class="form-control btn-primary" value="Login" style="width:200px;!important">
                
            </form>

           <?php echo '<h4>'.$message.'</h4>' ?>
      </div>
</body>
</html>





            
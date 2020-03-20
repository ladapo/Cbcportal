<?php
  error_reporting(0);
  include '../dbconnect.php';
  /*session_start();
  if ($_SESSION['cbc_admin']) {
    header('location:admin.php');
  }
  else{
    session_destroy(); 
  }*/

// new codes
/*session_start();
if($_SESSION['user_id']){
  header('location:admin.php');
}else{
    session_destroy(); 
  }*/





/*if ($_POST) {
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
  $query = " SELECT * from users where username='$username' and password='$password' and status= 'admin' ";
  $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) == 1) {
      session_start();
      $_SESSION['cbc_admin'] = $username;
      $_SESSION['password'] = $password;
      header('location: admin.php');
    }
    else {
      $message = "Invalid username or password ";
    }
 }*/

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
          <h1>ED's LOGIN</h1>

           <form action="Sessions.php" method="post" class="container" style="width: 620px">
              
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
              <button type="submit" class="form-control btn-primary" name="Login" style="width:200px;!important">Login</button>
              
                
           </form>

           <?php echo '<h4>'.$_GET['message'].'</h4>' ?>
      </div>
</body>
</html>




              
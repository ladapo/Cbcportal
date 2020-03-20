<?php
 session_start();
//Connect to database
  include '../dbconnect.php';
  

  //check if login button has been pressed
if (isset($_POST['Login'])) 
{
  //To prevent SQL injection
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysqli_real_escape_string($username);
  $password = mysqli_real_escape_string($password);
  
  //query database
  $query = " SELECT * from users where username='".$_POST['username']."' and password='".$_POST['username']."' and status= 'admin' ";
  $result = mysqli_query($conn,$query);

  if (mysqli_num_rows($result) == 1) {
      
      $_SESSION["cbc_admin"] = $_POST['username'];
      $_SESSION["password"] = $_POST['password'];
      header('location: admin.php');
    }
  
  /*else 
  {
    
    header('location: login.php');
  }   */
} 
else 
{
  echo 'Not working';
} 

  
?>


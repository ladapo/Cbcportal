<?php
error_reporting(0);
include'../dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
//echo $lastname. $firstname.$user_id;
?>



    <div class="row" align="center"> 
        <h3>Just One More Step</h3>
        <div class="col-md-3"></div>

        <div class="col-md-6">    
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label>Username</label>
                <input type="text" class="form-control" name="login_username" required="" style="width:500px;!important">

                <label>New Password</label>
                <input type="password" class="form-control" name="login_password" required="" style="width:500px;!important" minlength="8">

                <label>Confirm Password</label>
                <input type="password" class="form-control" name="login_confirm_password" required="" style="width:500px;!important" minlength="8">
                <p></p>
                <input type="submit" class="form-control btn-primary" name ="submit" style="width:200px;!important">    
        </form>  
        </div>

        <div class="col-md-3"></div>
                        
    
    </div>
   
<?php
if (isset($_POST["submit"])) {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];
    $login_confirm_password = $_POST['login_confirm_password'];

    if ($login_password == $login_confirm_password) {
        $sql = "INSERT INTO `users`(`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES ('$user_id','$login_username','$login_password','$firstname','$lastname','staff')";
        mysqli_query($conn,$sql);
        header('location: ../index.php');
        
            }
    else{
        ?>
    <script type="text/javascript">             
        window.alert('Sorry your passwords don\'t match');
    </script>
            
    <?php 
                //$message = "Sorry your passwords don't match";
        }
}     
?>   




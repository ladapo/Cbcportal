<?php
session_start();
error_reporting(0);
include '../dbconnect.php';
include 'xml.php';


?>


<?php

if (!$_SESSION["cbc_admin"]) 
{
	echo "session not set";
	header('location: login.php');
}
else
{
	$session_user = $_SESSION['cbc_admin'];
	$session_password = $_SESSION['password'];
	$sql = "SELECT * FROM `users` WHERE username='$session_user' AND password='$session_password' ";
	$query = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {	$session_id = $row['user_id'];}
	echo $session_id;
}

?>

<?php 
$search_filter = ''; $search_filter_input = '';
?>




<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

            	<li><a href="#" id="activity" class="active">Dashboard <i class="fa fa-dashboard"></i></span></a></li>

                <li><a href="#" id="view_all">View All <span class="glyphicon glyphicon-eye-open"></span></a></li>

                <li><a href="#" id="search">Quick Search <span class="glyphicon glyphicon-search"></span></a></li>

                <li><a href="#" id="manage_staff">Manage Staff <i class="fa fa-users"></i></span></a></li>

                <li><a href="#" id="events_meetings">Events & Meetings <span class="glyphicon glyphicon-calendar"></span></a></li>

                <li><a href="#" id="leave_absences">Leave & Absences <span class="glyphicon glyphicon-log-out"></span></a></li>

                <li><a href="#" id="settings">Settings <span class="glyphicon glyphicon-cog"></span></a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                        
                        <div class="row">
                        <div class="col-md-1"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="background-color:#e6e6e6">&#9776; Menu</a></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        	<i><h4>Welcome <?php echo $_SESSION['cbc_admin'] ?>, today is <?php echo date("l jS \of F Y ") ?></h4></i>
                        </div>
                        <div class="col-md-1"><a href="../logout.php" class="btn btn-default" style="background-color:#e6e6e6"><span class="glyphicon glyphicon-off"> Logout</span></a></div>
                        <div class="col-md-1"></div>
                        </div>
                        <br>


          <!-- Activity Page -->

    <div id="activity_page">
    	
    <i><h1>Activities</h1></i>
    	
    	<div class="row">

    		<div class="col-md-2" id="events">
    			<img src="../images/calendar.png" style="width: 100px;height: 100px;"><h5><b>Your Events for today</b></h5>
    			<?php
					$date = date("Y-m-d").'%'; 
    			
					$sql = "SELECT `event_title` , `start_time`  FROM `events_meetings` WHERE `date_from` LIKE '$date' ORDER BY `start_time` ASC";
					$query = mysqli_query($conn,$sql); 
					while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {											
					echo '<h5>'.$row['event_title'].'   '.substr($row['start_time'], 0 ,5).'</h5>';
					}
				?>
    		</div>

    		<div class="col-md-1"></div>
    		
    		<div class="col-md-2" id="birthdays">
    			<img src="../images/birthday-cake.png" style="width: 100px;height: 100px;"><h5><b>Birthdays this month</b></h5>
				<?php
					$date = '____-'.date('m').'%';
					$sql = "SELECT FirstName , LastName , D_O_B FROM `personal_information` WHERE `D_O_B` LIKE '$date' ORDER BY `D_O_B` ASC";
					$query = mysqli_query($conn,$sql); 
					while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {
					$fullname = $row['LastName'].' '.$row['FirstName'];														
					echo '<h5>'.$fullname.'   '.date('Y').'-'.substr($row['D_O_B'], 5).'</h5>';

					}
				?>
    		</div>

    		<div class="col-md-1"></div>
    		
			<div class="col-md-2" id="weddings">
    			<img src="../images/wedding-cake.png" style="width: 100px;height: 100px;"><h5><b>Wedding Anniversaries this month</b></h5>
				<?php
					$date = '____-'.date('m').'%';
					$sql = "SELECT FirstName , LastName ,Marriage_Date FROM `personal_information` WHERE `Marriage_Date` LIKE '$date' ORDER BY `Marriage_Date` ASC";
					$query = mysqli_query($conn,$sql); 
					while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {
					$fullname = $row['LastName'].' '.$row['FirstName'];														
					echo '<h5>'.$fullname.'   '.date('Y').'-'.substr($row['Marriage_Date'], 5).'</h5>';
					}
				?>
    		</div>	

    	</div>




    </div> 

	<!-- Activity Page End-->








            <!-- View All page -->

    <div id="view_all_page"><table class="table table-responsive">
		

		<?php
		$sql = 'SELECT user_id , FirstName , LastName , subsidiary FROM personal_information ';
		$query = mysqli_query($conn,$sql); 
		while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {

			$fullname = $row['LastName'].' '.$row['FirstName'];
		
		?> 
			<tr>
				<td><?php echo $row['user_id'] ?></td>
				<td><?php echo $fullname ?></td>
				<td><?php echo $row['subsidiary'] ?></td>
			</tr>
		<?php
		}

		?>
	</table></div>

		<!-- End View All Page -->




		<!--  Search Page -->

		<div id="search_page">
	<div class="row">
		<div class="col-md-4">
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="search_form">
				<label>Search By: </label>
				<select class="form-control" name="search_filter">
					<option value="name">Name</option>
					<option value="user_id">Staff ID</option>
					<option value="subsidiary">Subsidiary</option>
				</select>
			<div class="input-group">
              <input type="text" name="search_filter_input" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="search" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-search"></span></button>
              </div>
            </div>
			</form>
		</div>





		<div class="col-md-6">
			<table class="table table-responsive">
		

		<?php

	 	if (isset($_POST["add_event"])) {
        $event_title = $_POST['event_title'];
        $date_from = $_POST['date_from'];
        $date_to = $_POST['date_to'];
        $start_time = $_POST['start_time'];
        $finish_time = $_POST['finish_time'];
        $color = $_POST['color'];

       	$sql = "INSERT INTO `events_meetings`(`event_title`, `date_from`, `date_to`, `start_time`, `finish_time` , `color` ) VALUES ('$event_title','$date_from','$date_to','$start_time','$finish_time' , '$color' )";
	       if (mysqli_query($conn,$sql)){
	       	include 'xml.php';

	        ?>
	        <style type="text/css">
	            #events_meetings_page {
	                display: block;
	            }
	            #activity_page {
							display: none;
				}
	        </style>
	        <script type="text/javascript">  
	            $(window).load(function(){
	            	$('#activity').removeClass('active');
	   				$('#events_meetings').addClass('active');
	   			});
	   			window.alert('Event Added Successfully');
	        </script>
	        
	        <?php 
	    	}
       
    	}
		else if (isset($_POST["apply_leave_btn"])) {
	        $user_id = $_POST['user_id'];
	        $fullname = $_POST['fullname'];
	        $start_date = $_POST['start_date'];
	        $end_date = $_POST['end_date'];
	        $reason = $_POST['reason'];
	        $status = $_POST['status'];

	        $sql = "INSERT INTO `leave_absences` (`user_id`, `fullname`, `reason`, `start_date`, `end_date`, `status`) VALUES ('$user_id','$fullname','$reason','$start_date','$end_date','$status')";
		        if (mysqli_query($conn,$sql)){
		        ?>
		        <style type="text/css">
		            #leave_absences_page {
		                display: block;
		            }
		            #activity_page {
						display: none;
					}
		        </style>
		        <script type="text/javascript">	            
		            $(window).load(function(){
		            	$('#activity').removeClass('active');
	   					$('#leave_absences').addClass('active');
		   			});
		   			window.alert('Application Successful');
		        </script>
		        
		        <?php 
		       
		    }
		}
		else if (isset($_POST["leave_response"])) {
	        $user_id = $_POST['user_id'];
	        $id = $_POST['id'];
	        $start_date = $_POST['start_date'];
	        $end_date = $_POST['end_date'];
	        $status = $_POST['status'];

	        $sql = "UPDATE `leave_absences` SET `start_date`='$start_date',`end_date`='$end_date',`status`='$status ' WHERE `user_id`='$user_id' AND `id`='$id'";
		        if (mysqli_query($conn,$sql)){
		        ?>
		        <style type="text/css">
		            #leave_absences_page {
		                display: block;
		            }
		            #activity_page {
						display: none;
					}
		        </style>
		        <script type="text/javascript">	            
		            $(window).load(function(){
		            	$('#activity').removeClass('active');
	   					$('#leave_absences').addClass('active');
		   			});
		   			window.alert('Response Successful');
		        </script>
		        
		        <?php 
		       
		    }
		}

    	else if (isset($_POST["edit_user_btn"])) {
			$username = $_POST['username'];
			$current_password = $_POST['current_password'];
			$new_password = $_POST['new_password'];
			$confirm_password = $_POST['confirm_password'];

			if ($new_password == $confirm_password && $session_password == $current_password) {
				$sql = "UPDATE `users` SET `username`= '$username',`password`= '$new_password' WHERE `username` = '$session_user' AND `password` = '$current_password' ";
				mysqli_query($conn,$sql);
				header('location: login.php');
				//$session_password = $new_password;
				?>
	        <style type="text/css">
	            #settings_page {
	                display: block;
	            }
	            #activity_page {
					display: none;
				}
	        </style>
	        <script type="text/javascript">	            
	            $(window).load(function(){
	            	$('#activity').removeClass('active');
	   				$('#settings').addClass('active');
	   			});
	   			window.alert('Username & Password changed Successfully');
	   			window.alert('Please re-login for password change to take effect');
	        </script>
	        
	        <?php 

			        }
		    else{
		    	?>
	        <style type="text/css">
	            #settings_page {
	                display: block;
	            }
	            #activity_page {
					display: none;
				}
	        </style>
	        <script type="text/javascript">	            
	            $(window).load(function(){
	            	$('#activity').removeClass('active');
	   				$('#settings').addClass('active');
	   			});
	   			window.alert('Sorry your passwords don\'t match');
	        </script>
	        
	        <?php 
		    	//$message = "Sorry your passwords don't match";
			    }
		}

		else if (isset($_POST["delete_btn"])) {
        $id = $_POST['user_id'];
        $sql = "DELETE FROM `personal_information` WHERE `user_id` = $id";
	        if (mysqli_query($conn,$sql)){
	        ?>
	        <style type="text/css">
	            #search_page {
	                display: block;
	            }
	            #activity_page {
					display: none;
				}
	        </style>
	        <script type="text/javascript">	            
	            $(window).load(function(){
	            	$('#activity').removeClass('active');
	   				$('#search').addClass('active');
	   			});
	   			window.alert('Delete Successful');
	        </script>
	        
	        <?php 
	       // header('location:admin.php');
	    }
		}

		else if(isset($_POST["update_btn"])) {
        $id = $_POST['user_id'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $subsidiary = $_POST['subsidiary'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $residential_address = $_POST['residential_address'];
        $marital_status = $_POST['marital_status'];
        $next_of_kin = $_POST['next_of_kin'];


        $sql = "UPDATE `personal_information` SET `FirstName`='$firstname',`LastName`='$lastname',`subsidiary`='$subsidiary',`Telephone_No`='$telephone', `Email_Address`='$email',`Residential_Address`='$residential_address',`Marital_Status`='$marital_status',`Next_of_Kin`='$next_of_kin' WHERE `user_id`= $id";
	        if (mysqli_query($conn,$sql)){
	        ?>
	        <style type="text/css">
	            #search_page {
	                display: block;
	            }
	            #activity_page {
							display: none;
				}
	        </style>
	        <script type="text/javascript">	            
	            $(window).load(function(){
	            	$('#activity').removeClass('active');
	   				$('#search').addClass('active');
	   			});
	   			window.alert('Update Successful');
	        </script>
	        
	        <?php 
	        //header('location:admin.php');
	    }
	}
			else if(isset($_POST['search'])){ 
				?>
				<style type="text/css">
					#search_page {
						display: block;
					}
					#activity_page {
						display: none;
					}
				</style>
				<script type="text/javascript">	            
		            $(window).load(function(){
		            	$('#activity').removeClass('active');
	   					$('#search').addClass('active');
		   			});
		        </script>
		        	
				<?php


			$search_filter = $_POST['search_filter'];
			$search_filter_input = $_POST['search_filter_input'];
			if ($search_filter == 'name') {
				$sql2 = "SELECT * FROM personal_information WHERE FirstName LIKE '$search_filter_input%' OR LastName LIKE '$search_filter_input%' ";
			}
			else{
				$sql2 = "SELECT * FROM personal_information WHERE $search_filter LIKE '$search_filter_input%' ";
			}


			$query2 = mysqli_query($conn,$sql2);


if ($query2 = mysqli_query($conn,$sql2)) {

    
    $row_count = mysqli_num_rows($query2);

    
	//echo $row_count;

    if ($row_count == 0 ) {
    	echo "<h3> sorry, there are no results with your query </h3>";
    }

}

			while ($row = mysqli_fetch_array($query2 , MYSQLI_ASSOC) ) {

			$fullname = $row['LastName'].' '.$row['FirstName'];

		
		?> 
			<tr>
				<td><?php echo $row['user_id'] ?></td>
				<td><?php echo $fullname ?></td>
				<td><?php echo $row['subsidiary'] ?></td>
				<td>
					<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-<?php echo $row['user_id'] ?>"><span class="glyphicon glyphicon-pencil"></span></button>
					<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-<?php echo $row['user_id'] ?>"><span class="glyphicon glyphicon-trash"></span></button>
				</td>
			</tr>



	<!-- Edit Modal -->
<div class="modal fade" id="edit-<?php echo $row['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editLabel-<?php echo $row['user_id'] ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editLabel-<?php echo $row['user_id'] ?>">Edit user -<?php echo $row['user_id'] ?></h4>
      </div>
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	      <div class="modal-body">
	       <img src="<?php echo $row['Passport_photograph'] ?>" style="width: 100px; height: 100px;" class="img-circle">
	       <br>
	       
	       <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id'] ?>">
	       <label>Last Name</label>
	       <input type="text" name="lastname" class="form-control" value="<?php echo $row['LastName'] ?>">
	       <label>First Name</label>
	       <input type="text" name="firstname" class="form-control" value="<?php echo $row['FirstName'] ?>">
	       <label>Subsidiary</label>
	       <select name="subsidiary" class="form-control">
	       			<option selected=""><?php echo $row['subsidiary'] ?></option>
	                <option>CBC INFRASTRUCTURE</option>
	                <option>GEDU TECHNOLOGIES</option>
	                <option>CBC ENERGY</option>
	                <option>CBC SURVEILLANCE</option>
	                <option>CBC PROPERTIES</option>
	                <option>CBC NETCOMMS</option>
	                <option>ADMINISTRATION / H.R.</option>
	       </select>
	       <label>Telephone No</label>
	       <input type="number" name="telephone" class="form-control" value="<?php echo $row['Telephone_No'] ?>">
	       <label>Email</label>
	       <input type="email" name="email" class="form-control" value="<?php echo $row['Email_Address'] ?>">
	       <label>Address</label>
	       <input type="text" name="residential_address" class="form-control" value="<?php echo $row['Residential_Address'] ?>">
	       <label>Marital Status</label>
	       <select name="marital_status" class="form-control">
	       			<option selected=""><?php echo $row['Marital_Status'] ?></option>
	                <option>Single</option>
	                <option>Married</option>
	                <option>Divorced</option>
	                <option>Widowed</option>
	       </select>
	       <label>Next of Kin</label>
	       <input type="text" name="next_of_kin" class="form-control" value="<?php echo $row['Next_of_Kin'] ?>">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <input type="submit" class="btn btn-primary" name="update_btn" value="Update">
      </form>

      </div>
    </div>
  </div>
</div>



<!-- Delete Modal -->
<div class="modal fade" id="delete-<?php echo $row['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel-<?php echo $row['user_id'] ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteLabel-<?php echo $row['user_id'] ?>">Warning delete user -<?php echo $row['user_id'] ?></h4>
      </div>
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	      <div class="modal-body">
	         <h4>Are you sure you wish to delete the the details of <?php echo $fullname ?> ?</h4>
		        <h5>Once you proceed, this action cannot be undone</h5>
		        <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
	        <input type="submit" class="btn btn-danger" name="delete_btn" value="Delete">
       </form>

      </div>
    </div>
  </div>
</div>
		<?php
		}

		}
		?>
		</table>
		</div>
	</div>


	</div>

        <!-- End  Search Page -->    




		<!-- Manage Staff Page -->

		<div id="manage_staff_page">
			<div class="row container">
				<div class="col-md-12"><?php include 'searchaction.php';?></div>
			</div>

		</div>

		<!-- End Manage Staff Page -->




       <!-- Events & Meetings Page -->

       <div id="events_meetings_page">
       		
       		<div class="row">
       			<div class="col-md-4">
       				<h4>Add New Event</h4>

       				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
       				
	       				<div class="row">
	       					<div class="col-md-12"><label>Event Title</label><input type="text" class="form-control" name="event_title" placeholder="Title" required=""></div>
	       				</div>
						<div class="row">
				            <div class="col-md-6"><label>Date From</label><input type="date" class="form-control" name="date_from" placeholder="from" required=""></div>
				       		<div class="col-md-6"><label>Date To</label><input type="date" class="form-control" name="date_to" placeholder="to"></div>
				       	</div>
				       	<div class="row">
	       					<div class="col-md-6"><label>Start Time</label><input type="time" class="form-control" name="start_time" placeholder="start time" required=""></div>
	       					<div class="col-md-6"><label>Finish Time</label><input type="time" class="form-control" name="finish_time" placeholder="end time"></div>
	       				</div>
	       				<p></p>
	       				<div class="row">
	       					<div class="col-md-3"><label>Select Color</label></div>
	       					<div class="col-md-9">
		       					<label class="btn" style="background-color:#ab47bc">
									<input type="radio" name="color" value="#ab47bc" checked="">						
								</label>
								<label class="btn" style="background-color:#84ffff">
									<input type="radio" name="color" value="#84ffff">
								</label>
								<label class="btn" style="background-color:#26c6da">
									<input type="radio" name="color" value="#26c6da">
								</label>
								
								<label class="btn" style="background-color:#4caf50">
									<input type="radio" name="color" value="#4caf50">
								</label>
								<label class="btn" style="background-color:#424242">
									<input type="radio" name="color" value="#424242">
								</label>
							</div>
							
	       				</div>

	       				<button type="submit" class="btn" name="add_event"><span class="glyphicon glyphicon-plus-sign"></span> Add Event</button>

       				</form>

       			</div>


       			<div class="col-md-8">
       				<div class="monthly" id="calendar"></div>
       			</div>
       		</div>
       		
       </div>

       <!-- End Events & Meetings Page -->


       <!-- Leave & Absences Page -->

       	<div id="leave_absences_page">

			<!-- <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#personal" style="color: #000"><h5>PERSONAL</h5></a></li>
			  <li><a data-toggle="tab" href="#general" style="color: #000"><h5>GENERAL</h5></a></li>
			</ul> -->

			<!-- <div class="tab-content"> -->

				<!-- <div id="personal" class="tab-pane fade in active row">    
					<div class="col-md-4" style="padding-top: 20px"><form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

							<?php
								$sql = "SELECT * FROM `users` WHERE `username` = '$session_user' ";
								$query = mysqli_query($conn,$sql); 
								while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {											
								//echo '<h5>'.$row['firstname'].'   '.$row['user_id'].'</h5>';							
							?>

						        <div class="row">
						           	<div class="col-md-4"><input type="number" class="form-control" name="user_id" readonly="" value="<?php echo $row['user_id'] ?>"></div>
						           	<div class="col-md-8"><input type="text" class="form-control" name="fullname" readonly="" value="<?php echo $row['lastname'].' '.$row['firstname'] ?>"></div>
						    	</div>

						        <div class="row">
						        	<div class="col-md-6"><label>From</label><input type="date" class="form-control" name="start_date"></div>
						        	<div class="col-md-6"><label>To</label><input type="date" class="form-control" name="end_date"></div>
						    	</div>

						        <div class="row">
							        <div class="col-md-6"><label>Reason</label><select class="form-control" name="reason">
							        	<option>OFFICIAL LEAVE</option>
							        	<option>SICK LEAVE</option>
							        	<option>STUDY LEAVE</option>
							       		<option>MATERNITY LEAVE</option>
							        	<option>PATERNITY LEAVE</option>
							        </select></div>
							        <div class="col-md-6"><label>Status</label><select class="form-control" name="status">
							        	<option selected="">PENDING</option>
							    	</select></div>
						    	</div>
						   			<p></p>
						       	<input type="submit" class="btn btn-primary" name="apply_leave_btn" value="Apply">

					</form></div>
						   	<?php
							}
							?>
				</div> -->


				<!-- <div id="general" class="tab-pane fade row">   -->
				    
					<div class="col-md-7">
						<?php
							$sql = "SELECT * FROM `leave_absences` WHERE `status`='PENDING' ";
							$query = mysqli_query($conn,$sql); 
							while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {											
							//echo '<h5>'.$row['fullname'].'   '.$row['user_id'].'</h5>';
						?>
						<table class="table table-responsive" >
							<tr><form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
								<td><?php echo $row['user_id'] ?></td>
								<td><?php echo $row['fullname'] ?></td>
								<td><?php echo $row['reason'] ?></td>
								<input type="hidden" class="form-control" name="user_id" value="<?php echo $row['user_id'] ?>">
								<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
								<td><input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'] ?>"></td>
								<td><input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'] ?>"></td>
								<td><select class="form-control" name="status">
									<option selected=""><?php echo $row['status'] ?></option>
									<option>GRANTED</option>
									<option>DENIED</option>
								</select></td>
								<td><button type="submit" class="btn btn-info" name="leave_response"><span class="glyphicon glyphicon-send"></span></button></td>
							</form></tr>
						</table>
						<?php
							}	
							$sql = "SELECT COUNT(*) FROM `leave_absences` WHERE `status`='PENDING' ";
							$query = mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($query,MYSQLI_NUM);
							//echo $row[0];
							if ($row[0] == 0) {
								echo "<h3> sorry, there are no new requests at this time </h3>";
								}						
						?>

					</div>	
						
					                	
					            		
					<div class="col-md-5">
						<?php		    			
							$sql = "SELECT * FROM `leave_absences` ";
							$query = mysqli_query($conn,$sql); 
							while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {											
							//echo '<h5>'.$row['firstname'].'   '.$row['user_id'].'</h5>';							
						?>
						<table class="table table-responsive">
							<tr>
								<td><?php echo $row['user_id'] ?></td>
								<td><?php echo $row['fullname'] ?></td>
								<td><?php echo $row['reason'] ?></td>
								<td><?php echo $row['start_date'] ?></td>
								<td><?php echo $row['end_date'] ?></td>
								<td><?php echo $row['status'] ?></td>
							</tr>
						</table>

						<?php 
						} 
						?>
					</div>
				                	
				<!-- </div> -->


			<!-- </div> -->
					

       	</div>

       	<!-- End Leave & Absences Page -->


        <!-- Settings Page --> 

       	<div id="settings_page">

		       		<h4>Update Username & Password </h4>
		       		<?php
						$sql = "SELECT * FROM `users` WHERE `username` = '$session_user' AND `status` = 'admin'";
						$query = mysqli_query($conn,$sql); 
						while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {
					?>
					<div class="row"> 
						<div class="col-md-4">
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			       			<label>Username</label>
				       		<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $row['username'] ?>" required="">
				       		<label>Current Password</label>
				       		<input type="password" class="form-control" name="current_password" placeholder="current password" required="">
				       		<label>New Password</label>
				       		<input type="password" class="form-control" name="new_password" placeholder="new password" required="" minlength="8">
				       		<label>Confirm Password</label>
				       		<input type="password" class="form-control" name="confirm_password" placeholder="confirm password" required="" minlength="8">
				       		<p></p>
				       		<input type="submit" class="btn btn-info" name="edit_user_btn" value="Save">
			       		</form>
			       		<h5>*Note if your password is changed successfully, you will be required to sign in again</h5>
			       		</div>
			       		
						<?php
							}

						?>
		       		</div>

		       	</div>



       	 <!-- End Settings Page --> 




            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


<!-- Menu Toggle script -->
<script type="text/javascript">
	   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

	   $(document).ready(function(){

	   	$('#activity').click(function(){
	   		$('#activity_page').css('display','block');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #events_meetings , #leave_absences, #settings').removeClass('active');
	   		$(this).addClass('active');

	   	});

	   	$('#view_all').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','block');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#search').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','block');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#manage_staff').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','block');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#events_meetings').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','block');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#leave_absences').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','block');
	   		$('#settings_page').css('display','none');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#settings').click(function(){
	   		$('#activity_page').css('display','none');
	   		$('#view_all_page').css('display','none');
	   		$('#search_page').css('display','none');
	   		$('#manage_staff_page').css('display','none');
	   		$('#events_meetings_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','block');

	   		$('#activity , #view_all , #search , #manage_staff , #events_meetings , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   });

	   $(window).load( function() {
        $('#calendar').monthly({
        	mode: 'event',
        	weekStart: 'Sun',
        	//stylePast: true,
			//disablePast: true,
        	xmlUrl: 'events.xml',
			dataType: 'xml'
        });
    });

</script>



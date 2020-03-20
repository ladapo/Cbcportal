

 <?php 

  if(isset($_POST["useredit_btn"])) {


    $id = $_POST['user_id'];
   
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
     $lastname = $_POST['lastname'];    $telephone = $_POST['telephone'];  $title = $_POST['title'];  $religion = $_POST['religion'];  $maritalstatus = $_POST['maritalstatus'];  $marriagedate = $_POST['marriagedate'];   $address = $_POST['address'];   $email = $_POST['email'];  $postalcode = $_POST['postalcode'];  $nextofkin = $_POST['nextofkin'];  $kinaddress = $_POST['kinaddress'];  $kinrelationship = $_POST['kinrelationship'];  $dependantname1 = $_POST['dependantname1'];  $dependantdob1 = $_POST['dependantdob1'];  $dependantaddress1 = $_POST['dependantaddress1'];  $dependantphone1 = $_POST['dependantphone1'];  $dependantname2 = $_POST['dependantname2'];  $dependantdob2 = $_POST['dependantdob2'];  $dependantaddress2 = $_POST['dependantaddress2'];  $dependantphone2 = $_POST['dependantphone2'];  $dependantname3 = $_POST['dependantname3'];  $dependantdob3 = $_POST['dependantdob3'];  $dependantaddress3 = $_POST['dependantaddress3']; $dependantphone3 = $_POST['dependantphone3'];  $hobbies = $_POST['hobbies'];  $familymember_name1 = $_POST['familymember_name1'];  $familymember_relationship1 = $_POST['familymember_relationship1'];  $familymember_dob1 = $_POST['familymember_dob1'];  $familymember_name2 = $_POST['familymember_name2'];  $familymember_relationship2 = $_POST['familymember_relationship2'];  $familymember_dob2 = $_POST['familymember_dob2'];  $familymember_name3 = $_POST['familymember_name3'];  $familymember_relationship3 = $_POST['familymember_relationship3'];  $familymember_dob3 = $_POST['familymember_dob3'];  $speak1 = $_POST['speak1'];  $write1 = $_POST['write1'];  $read1 = $_POST['read1'];  $speak2 = $_POST['speak2'];  $write2 = $_POST['write2'];  $read2 = $_POST['read2'];  $speak3 = $_POST['speak3'];  $write3 = $_POST['write3'];  $read3 = $_POST['read3']; $language1 = $_POST['language1']; $language2 = $_POST['language2'];  $language3 = $_POST['language3'];  

    $conn = mysqli_connect("localhost","root","","cbc"); //re-establishing connection

    $db = mysqli_select_db( $conn,"cbc"); // Selecting database.
     
   

    $sql_e= "UPDATE `personal_information` SET  `LastName`= '$lastname',   `Telephone_No`='$telephone',  `Title`='$title',  `Religion`='$religion', `Marital_Status`= '$maritalstatus', `Marriage_Date`= '$marriagedate',  `Residential_Address`= '$address', `Email_Address`= '$email', `Post_Code`= '$postalcode', `Next_of_Kin`= '$nextofkin', `Next_of_Kin_Address`= '$kinaddress', `Relationship_with_Next_of_Kin`= '$kinrelationship' WHERE `user_id`= '$id'";
    

           
    $sql_f= "UPDATE `family_details` SET   `Name_of_dependant1`='$dependantname1' , `DOB_of_dependant1`='$dependantdob1' , `Address_of_dependant1`='$dependantaddress1' , `MobileNo_of_dependant1`='$dependantphone1' , `Name_of_dependant2`='$dependantname2' , `DOB_of_dependant2`='$dependantdob2' , `Address_of_dependant2`='$dependantaddress2' , `MobileNo_of_dependant2`='$dependantphone2' , `Name_of_dependant3`='$dependantname3' , `DOB_of_dependant3`='$dependantdob3' , `Address_of_dependant3`='$dependantaddress3' , `MobileNo_of_dependant3`='$dependantphone3' , `Hobbies`='$hobbies' ,  `Familymember_name1`='$familymember_name1' , `Relationship_with_familymember1`='$familymember_relationship1' , `DOB_of_familymember1`='$familymember_dob1' , `Familymember_name2`='$familymember_name2' , `Relationship_with_familymember2`='$familymember_relationship2' , `DOB_of_familymember2`='$familymember_dob2' , `Familymember_name3`='$familymember_name3' , `Relationship_with_familymember3`='$familymember_relationship3' , `DOB_of_familymember3`='$familymember_dob3'  WHERE `user_id`= '$id'"; 


    $sql_g= "UPDATE  `educational_details` SET   `Language_spoken1`='$language1' , `Speaking_status1`='$speak1' , `Writing_status1`='$write1' , `Reading_status1`='$read1' , `Language_spoken2`='$language2' , `Speaking_status2`='$speak2' , `Writing_status2`='$write2' , `Reading_status2`='$read2' , `Language_spoken3`='$language3' , `Speaking_status3`='$speak3' , `Writing_status3`='$write3' , `Reading_status3`='$read3'  WHERE `user_id`= '$id'";





$result1= mysqli_query($conn, $sql_e);
$result2= mysqli_query($conn, $sql_f);
$result3= mysqli_query($conn, $sql_g);


//$id = mysqli_insert_id($conn);

if($result1){

   $result2; $result3; 
   ?>
 <style type="text/css">
              #my_details_page {
                  display: block;
              }
              #announcements_page {
          display: none;
        }
          </style>
          <script type="text/javascript">  
	            $(window).load(function(){
	            	$('#announcements').removeClass('active');
	   				$('#my_details').addClass('active');
	   			});
	   			window.alert('Update Successful');
	        </script>
         
<?php
   }


}

?>



<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

            	<li><a href="#" id="announcements" class="active">Announcements <span class="glyphicon glyphicon-bullhorn"></span></a></li>

                <li><a href="#" id="my_details">My Details <span class="glyphicon glyphicon-user"></span></a></li>

                <li><a href="#" id="leave_absences">Leave & Absences <span class="glyphicon glyphicon-log-out"></span></a></li>

                <li><a href="#" id="settings">Settings <span class="glyphicon glyphicon-cog"></span></a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                        
                <div class="row">
	                <div class="col-md-1">
	                   	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="background-color:#e6e6e6">&#9776; Menu</a>
	                </div>
	                <div class="col-md-3"></div>
	                <div class="col-md-6">
	                    <i><h4>Welcome <?php echo $session_user ?>, today is <?php echo date("l jS \of F Y ") ?></h4></i>
	                    
	                </div>
	                <div class="col-md-1">
	                    <a href="../logout.php" class="btn btn-default" style="background-color:#e6e6e6"><span class="glyphicon glyphicon-off"> Logout</span></a>
	                </div>
	                <div class="col-md-1"></div>
                </div>
                        <br>

		<?php
       	if (isset($_POST["edit_user_btn"])) {
			$username = $_POST['username'];
			$current_password = $_POST['current_password'];
			$new_password = $_POST['new_password'];
			$confirm_password = $_POST['confirm_password'];

			if ($new_password == $confirm_password && $session_password == $current_password) {
				$sql = "UPDATE `users` SET `username`= '$username',`password`= '$new_password' WHERE `username` = '$session_user' AND `password` = '$current_password' ";
				mysqli_query($conn,$sql);

				?>
	        <style type="text/css">
	            #settings_page {
	                display: block;
	            }
	            #announcements_page {
					display: none;
				}
	        </style>
	        <script type="text/javascript">	            
	            $(window).load(function(){
	            	$('#announcements').removeClass('active');
	   				$('#settings').addClass('active');
	   			});
	   			window.alert('Username & Password changed Successfully');
	   			window.alert('Please re-login for password change to take effect');
	        </script>
	        
	        <?php 
	        	//header('location: index.php');
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
		            #announcements_page {
						display: none;
					}
		        </style>
		        <script type="text/javascript">	            
		            $(window).load(function(){
		            	$('#announcements').removeClass('active');
	   					$('#leave_absences').addClass('active');
		   			});
		   			window.alert('Application Successful');
		        </script>
		        
		        <?php 
		       
		    }
		}

			?>



                <!-- Announcements page -->

                <div id="announcements_page">
     	
		    	<i><h1>Announcements</h1></i>
		    	
		    	<div class="row">

		    		<div class="col-md-2" id="events">
		    			<img src="../images/calendar.png" style="width: 100px;height: 100px;"><h5><b>Announcements for today</b></h5>
		    			<?php
							$date = date("Y-m-d").'%'; 
		    			
							$sql = "SELECT `event_title` , `start_time`  FROM `events_meetings` WHERE `date_from` LIKE '$date' AND `color` = '#26c6da' ORDER BY `start_time` ASC";
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
                <!-- End Announcements page -->




                <!-- My Details Page -->
                <div id="my_details_page">

		<?php
		
		
		$sql = 'SELECT * FROM personal_information AS pe INNER JOIN family_details AS fa ON pe.user_id=fa.user_id INNER JOIN educational_details AS ed ON pe.user_id=ed.user_id INNER JOIN employment_details AS em ON pe.user_id=em.user_id WHERE pe.user_id = '.$session_id;

		$query = mysqli_query($conn,$sql); 
		while ($row = mysqli_fetch_array($query , MYSQLI_ASSOC) ) {

			$fullname = $row['LastName'].' '.$row['FirstName'];
		
		?> 
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

         <div id="personal">
           

           <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-10">
             <div class="modal-body">
              <p></p>
             
                <img src="<?php echo $row['Passport_photograph'] ?>" style="width: 100px; height: 100px;" class="img-circle">
                 <br>
                <input type="hidden" name="user_id" class="form-control"   style="width: 100px;" value="<?php echo $row['user_id'] ?>">
                

              </div>
              </div>
              <div class="col-md-1"></div>
             </div>
           <div class="row">  
              <div class="col-md-1"></div>
              <div class="col-md-10">
                 <!-- <p><h3>PERSONAL INFORMATION </h3></p> -->
                 <p></p>
                
              <div class="col-md-3">
              <label>Last Name:</label><input type="text" class="form-control" name="lastname" value="<?php echo $row['LastName'] ?>" >
              
              </div>
                          
              <div class="col-md-3">
              <label>First Name:</label><input type="text" class="form-control" name="firstname" value="<?php echo $row['FirstName'] ?>" disabled="true">
              </div>
              
              <div class="col-md-3">
              <label>Other Name:</label><input type="text" class="form-control" name="othername" value="<?php echo $row['OtherName'] ?>" disabled="true"><br>
              </div>
              
              <div class="col-md-3">
              <label>Maiden Name:</label><input type="text" class="form-control" name="maidenname"  value="<?php echo $row['MaidenName'] ?>" disabled="true"><br>
              </div>
            </div>
            <div class="col-md-1"></div>
           </div>

           <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <div class="col-md-3">
              <label>Date of Birth:</label><input type="date" class="form-control" name="dob"   value="<?php echo $row['D_O_B'] ?>" disabled="true">
              </div>

              <div class="col-md-3">
              <label>Nationality:</label><input type="text" class="form-control" name="nationality"   value="<?php echo $row['Nationality'] ?>" disabled="true">
              </div>
              
              <div class="col-md-3">
              <label>State Of Origin:</label><input type="text" class="form-control" name="state"   value="<?php echo $row['State_of_Origin'] ?>" disabled="true">
              </div>

              <div class="col-md-3">
              <label>Telephone No:</label><input type="number" class="form-control" name="telephone" minlength="11"  value="<?php echo $row['Telephone_No'] ?>">
              </div>
            </div>
            <div class="col-md-1"></div>
           </div>
           <br>

           <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <div class="col-md-4">
                <label>Title:</label><br><select name="title" class="form-control" >
                      <option selected=""><?php echo $row['Title'] ?></option>
                      <option>Mr</option>
                      <option>Mrs</option>
                      <option>Miss</option>
                      <option>Ms</option>
                    </select>
              </div>
              
              <div class="col-md-4">
                <label>Religion:</label><br><select name="religion" class="form-control">
                      <option selected=""><?php echo $row['Religion'] ?></option>
                      <option>Christianity</option>
                      <option>Islam</option>
                      <option>Others</option>
                      </select>
              </div>

              
              <div class="col-md-4">
                <label>Marital Status:</label><select name="maritalstatus" class="form-control">
                      <option selected=""><?php echo $row['Marital_Status'] ?></option>
                      <option>Single</option>
                      <option>Married</option>
                      <option>Divorced</option>
                      <option>Widowed</option>
                      </select>
              </div>
            </div>
            <div class="col-md-1"></div>
           </div>

           <br>


            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <div class="col-md-3">
              <label>Marriage Date:</label><input type="date" class="form-control" name="marriagedate" value="<?php echo $row['Marriage_Date'] ?>" >
              </div>

              <div class="col-md-3">
              <label>Spouse Name:</label><input type="text" class="form-control" name="spousename"  value="<?php echo $row['Spouse_Name'] ?>" disabled="true">
              </div>
              
              <div class="col-md-3">
              <label>Nationality Of Spouse:</label><input type="text" class="form-control" name="spousenat"  value="<?php echo $row['Spouse_Nationality'] ?>" disabled="true">
              </div>

              <div class="col-md-3">
              <label>Spouse Profession:</label><input type="text" class="form-control" name="spousepro"  value="<?php echo $row['Spouse_Profession'] ?>" disabled="true">
              </div>
            </div>
             <div class="col-md-1"></div>
           </div>
           <br>


           <div class="row">

              <div class="col-md-1"></div>
               <div class="col-md-10">
               <div class="col-md-12">
              <label>Residential/Postal Address:</label><input type="text" class="form-control" row="2" name="address"  value="<?php echo $row['Residential_Address'] ?>">
              </div>
              </div>
              <div class="col-md-1"></div>
              </div>
              <br>

              <div class="row">
              <div class="col-md-1"></div> 
              <div class="col-md-10"> 
              <div class="col-md-3">
                <label>Subsidiary:</label>
                <select name="subsidiary" class="form-control" disabled="true">
                      <option selected=""><?php echo $row['subsidiary'] ?></option>
                      <option>CBC INFRASTRUCTURE</option>
                      <option>GEDU TECHNOLOGIES</option>
                      <option>CBC ENERGY</option>
                      <option>CBC SURVEILLANCE</option>
                      <option>CBC PROPERTIES</option>
                      <option>CBC NETCOMMS</option>
                      <option>ADMINISTRATION / H.R.</option>
                  </select>
              </div>
             
              <div class="col-md-3">
              <label>Staff ID No:</label><input type="number" class="form-control" name="staff_id"   value="<?php echo $row['user_id'] ?>" disabled="true">
              </div>
              

              <div class="col-md-3">
              <label>Date Of Employment:</label><input type="date" class="form-control" name="employmentdate"   value="<?php echo $row['Date_of_Employment'] ?>" disabled="true">
              </div>

              <div class="col-md-3">
              <label>Email Address:</label><input type="email" class="form-control" name="email"   value="<?php echo $row['Email_Address'] ?>">
              </div> 
              </div>
              <div class="col-md-1"></div> 

           </div>

            
            <br>

           <div class="row">


              <div class="col-md-1"></div>
              <div class="col-md-10"> 
              <div class="col-md-3">
              <label>Post Code:</label><input type="number" class="form-control" name="postalcode"   value="<?php echo $row['Post_Code'] ?>" >
              </div>
            

              <div class="col-md-3">
              <label>Next of Kin</label><input type="text" class="form-control" name="nextofkin"   value="<?php echo $row['Next_of_Kin'] ?>">
              </div>

          

              <div class="col-md-3">
              <label>Next of Kin's Address</label><input type="text" class="form-control" name="kinaddress"   value="<?php echo $row['Next_of_Kin_Address'] ?>">
              </div>

              <div class="col-md-3">
              <label>Relationship</label><input type="text" class="form-control" name="kinrelationship"   value="<?php echo $row['Relationship_with_Next_of_Kin'] ?>">
              </div>
        
                </div>
                 <div class="col-md-1"></div>
           </div>
              <br>
              <br>


            

                          <!--family page-->
            
            <div class="row">
                
              <div class="col-md-1"></div>
              <div class="col-md-10"> 
              <p><h3>DEPENDANTS</h3></p>
                  <div class="col-md-3">
                  <label>1. Dependants Full Name</label><input type="text" class="form-control" name="dependantname1" value="<?php echo $row['Name_of_dependant1'] ?>">
                  
                  </div>

                  <div class="col-md-3">
                  <label>Date of Birth:</label><input type="date" class="form-control" name="dependantdob1" value="<?php echo $row['DOB_of_dependant1'] ?>">
                  </div>
                           
                  <div class="col-md-3">
                  <label>Address</label><input type="text" class="form-control" name="dependantaddress1" value="<?php echo $row['Address_of_dependant1'] ?>">
                  </div>

                  <div class="col-md-3">
                  <label>Phone No</label><input type="number" class="form-control" name="dependantphone1" value="<?php echo $row['MobileNo_of_dependant1'] ?>">
                  </div>

              </div>
              <div class="col-md-1"></div>
              </div>       
              <br>

             <div class="row">  
                 <div class="col-md-1"></div>
                 <div class="col-md-10">         

               <div class="col-md-3">
                              <label>2. Dependants Full Name</label><input type="text" class="form-control" name="dependantname2" value="<?php echo $row['Name_of_dependant2'] ?>">
                </div>

                <div class="col-md-3">
                              <label>Date of Birth:</label><input type="date" class="form-control" name="dependantdob2" value="<?php echo $row['DOB_of_dependant2'] ?>">
                </div>

                <div class="col-md-3">
                              <label>Address</label><input type="text" class="form-control" name="dependantaddress2" value="<?php echo $row['Address_of_dependant2'] ?>">
                </div>

                <div class="col-md-3">
                              <label>Phone No</label><input type="number" class="form-control" name="dependantphone2" value="<?php echo $row['MobileNo_of_dependant2'] ?>">

                </div>
                </div>
                <div class= "col-md-1"></div>
             </div> 
             <br>


                 <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-md-10">
                              
                    <div class="col-md-3">
                    <label>3. Dependants Full Name</label><input type="text" class="form-control" name="dependantname3" value="<?php echo $row['Name_of_dependant3'] ?>">
                    </div>

                    <div class="col-md-3">
                    <label>Date of Birth</label><input type="date" class="form-control" name="dependantdob3" value="<?php echo $row['DOB_of_dependant3'] ?>">
                    </div>

                    <div class="col-md-3">
                    <label>Address</label><input type="text" class="form-control" name="dependantaddress3" value="<?php echo $row['Address_of_dependant3'] ?>">
                    </div>

                    <div class="col-md-3">
                    <label>Phone No</label><input type="number" class="form-control" name="dependantphone3" value="<?php echo $row['MobileNo_of_dependant3'] ?>">
                    </div>
                 </div>

                      <div class="col-md-1"></div>
                 </div>
                  
                  <br>
                  <br>

                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                          <div class="col-md-3">
                          <label>Hobbies</label><input type="text" class="form-control" name="hobbies" value="<?php echo $row['Hobbies'] ?>" >
                          </div>
                            

                          <div class="col-md-3">
                          <label>Convict Status</label><select name="conviction" class="form-control" disabled="true">
                          <option selected=""><?php echo $row['Convict_status'] ?></option> 
                          <option>Yes</option> 
                          <option>No</option>

                          </select>
                          </div>
                          <div class="col-md-6">
                          <label>If Yes, please specify</label><input type="text" class="form-control" name="convictionreason" value="<?php echo $row['Conviction_reason'] ?>" disabled="true">
                          </div>
                 </div>
                 <div class="col-md-1"></div>
                 </div>
                  <br>

                  <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                          <div class="col-md-4">
                          <label>Do you have any relatives in CBCemea ? </label><select name="cbcrelative" class="form-control" disabled="true">
                          <option selected=""><?php echo $row['CBC_Relative_status'] ?></option>  
                          <option>Yes</option>
                          <option>No</option>

                          </select>
                          </div>
                        

                          <div class="col-md-4">
                          <label>Relative's Name</label><input type="text" class="form-control" name="cbcrelative_name" value="<?php echo $row['Name_of_relative'] ?>" disabled="true">
                          </div>

                          <div class="col-md-4">
                          <label>Relationship</label><input type="text" class="form-control" name="cbcrelative_relationship" value="<?php echo $row['Relationship_with_relative'] ?>" disabled="true">
                          </div>
                  </div>
                  <div class="col-md-1"></div>
                    </div>
                  <br>
                  <br>

                  
                  <div class="row">
                
                  <div class="col-md-1"></div>
                  <div class="col-md-10"> 
                          
                          <h3> FAMILY DETAILS</h3>
                              
                            <div class="col-md-4">
                            <label>1. Family Member's Name</label><input type="text" class="form-control" name="familymember_name1" value="<?php echo $row['Familymember_name1'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship1" value="<?php echo $row['Relationship_with_familymember1'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob1" value="<?php echo $row['DOB_of_familymember1'] ?>">
                            </div>

                  </div>
                  <div class="col-md-1"></div>
                  </div>
                  

                  <br>

                  <div class="row">
                
                  <div class="col-md-1"></div>
                  <div class="col-md-10"> 
                              
                            <div class="col-md-4">
                            <label>2. Family Member's Name</label><input type="text" class="form-control" name="familymember_name2" value="<?php echo $row['Familymember_name2'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship2" value="<?php echo $row['Relationship_with_familymember2'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob2" value="<?php echo $row['DOB_of_familymember2'] ?>">
                            </div>

                  </div>
                  <div class="col-md-1"></div>
                  </div>
                  

                  <br>

                   <div class="row">
                
                  <div class="col-md-1"></div>
                  <div class="col-md-10"> 
                              
                            <div class="col-md-4">
                            <label>3. Family Member's Name</label><input type="text" class="form-control" name="familymember_name3" value="<?php echo $row['Familymember_name3'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship3" value="<?php echo $row['Relationship_with_familymember3'] ?>">
                            </div>

                            <div class="col-md-4">
                            <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob3" value="<?php echo $row['DOB_of_familymember3'] ?>">
                            </div>

                  </div>
                  <div class="col-md-1"></div>
                  </div>
                  

                  <br> 
                  <br>

                  

                   <div class="row">

                  <div class="col-md-1"></div>
                  <div class="col-md-10"> 

                   <h3> EDUCATIONAL/PROFESSIONAL DETAILS</h3>
                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><label>Institution</label></div>
                    <div class="col-md-3"><label>Date (From)</label></div>
                    <div class="col-md-3"><label>Date (To)</label></div>
                    <div class="col-md-2"><label>Certificate/Qualifying Grade</label></div>
                  </div>
                  <div class="row">
                    <div class="col-md-2"><label>College/University/ Polytechnic</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="college_name" value="<?php echo $row['College_name'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="college_start" value="<?php echo $row['College_entry'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="college_finish" value="<?php echo $row['College_exit'] ?>" disabled="true"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="college_certificate" value="<?php echo $row['College_certification'] ?>" disabled="true"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"><label>Secondary/Technical School</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="highschool_name" value="<?php echo $row['Highschool_name'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="highschool_start" value="<?php echo $row['Highschool_entry'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="highschool_finish" value="<?php echo $row['Highschool_exit'] ?>" disabled="true"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="highschool_certificate"  value="<?php echo $row['Highschool_certification'] ?>" disabled="true"></div>
                  </div>

                  <div class="row">
                    <div class="col-md-2"><label>Professional Certifications</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="professional_name" value="<?php echo $row['Professional_name'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="professional_start" value="<?php echo $row['Professional_entry'] ?>" disabled="true"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="professional_finish" value="<?php echo $row['Professional_exit'] ?>" disabled="true"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="professional_certificate" value="<?php echo $row['Professional_certification'] ?>" disabled="true"></div>
                  </div>
                  </div>
                  <div class="col-md-1"></div>
                  </div>
                  <br>



                  <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10"> 
                    <h3>LANGUAGE PROFICIENCY (Select appropriate Options)</h3>

                    <div class="row">
                    <div class="col-md-3"><label>Language</label></div>
                    <div class="col-md-3"><label>Speaking</label></div>
                    <div class="col-md-3"><label>Writing</label></div>
                    <div class="col-md-3"><label>Reading</label></div>
               
                    </div>

                   <div class="row">

                    <div class="col-md-3"><input type="text" class="form-control" name="language1" value="<?php echo $row['Language_spoken1']?>"></div>

                    <div class="col-md-3"><select name="speak1" class="form-control">
                          <option selected=""><?php echo $row['Speaking_status1'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="write1" class="form-control">
                          <option selected=""><?php echo $row['Writing_status1'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="read1" class="form-control">
                          <option selected=""><?php echo $row['Reading_status1'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>

                   </div>
      

                    <div class="row">

                    <div class="col-md-3"><input type="text" class="form-control" name="language2" value="<?php echo $row['Language_spoken2']?>"></div>

                    <div class="col-md-3"><select name="speak2" class="form-control">
                          <option selected=""><?php echo $row['Speaking_status2'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="write2" class="form-control">
                          <option selected=""><?php echo $row['Writing_status2'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="read2" class="form-control">
                          <option selected=""><?php echo $row['Reading_status2'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>

                   
                   </div>

                    <div class="row">

                    <div class="col-md-3"><input type="text" class="form-control" name="language3" value="<?php echo $row['Language_spoken3']?>"></div>

                    <div class="col-md-3"><select name="speak3" class="form-control">
                          <option selected=""><?php echo $row['Speaking_status3'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="write3" class="form-control">
                          <option selected=""><?php echo $row['Writing_status3'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>
                     <div class="col-md-3"><select name="read3" class="form-control">
                          <option selected=""><?php echo $row['Reading_status3'] ?></option> 
                          <option>Low</option> 
                          <option>Medium</option>
                          <option>High</option>
                          </select>
                    </div>

                   
                   </div>
                   
                 <div class="col-md-1"></div>
                 </div>
                 </div>
                    <br>
                    <br>

             <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">

            <h3>PREVIOUS EMPLOYMENT DETAILS</h3>
                 <div class="row">
                  <h3>Employer:1</h3>

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg1" value="<?php echo $row['Prev_organisation1'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle1" value="<?php echo $row['Job_title1'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty1" value="<?php echo $row['Job_description1'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start1" value="<?php echo $row['Job_entry1'] ?>" disabled="true"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish1" value="<?php echo $row['Job_exit1'] ?>" disabled="true"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start1" value="<?php echo $row['Salary_on_entry1'] ?>" disabled="true" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish1" value="<?php echo $row['Salary_on_exit1'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start1" value="<?php echo $row['Allowance_on_entry1'] ?>" disabled="true" ></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish1" value="<?php echo $row['Allowance_on_exit1'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason1" value="<?php echo $row['Reason_for_leave2'] ?>" disabled="true"></div>
                </div>
              </div>
              <div class="col-md-1"></div>
              </div>
              <br>


              <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">

                 <div class="row">
                  <h3>Employer:2</h3>

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg2" value="<?php echo $row['Prev_organisation2'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle2" value="<?php echo $row['Job_title2'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty2" value="<?php echo $row['Job_description2'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start2" value="<?php echo $row['Job_entry2'] ?>" disabled="true"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish2" value="<?php echo $row['Job_exit2'] ?>" disabled="true"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start2" value="<?php echo $row['Salary_on_entry2'] ?>" disabled="true" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish2" value="<?php echo $row['Salary_on_exit2'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start2" value="<?php echo $row['Allowance_on_entry2'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish2" value="<?php echo $row['Allowance_on_exit2'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason2" value="<?php echo $row['Reason_for_leave2'] ?>" disabled="true"></div>
                </div>
              </div>
              <div class="col-md-1"></div>
              </div>
              <br>


              <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">

                 <div class="row">
                  <h3>Employer:3</h3>

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg3" value="<?php echo $row['Prev_organisation3'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle3" value="<?php echo $row['Job_title3'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty3" value="<?php echo $row['Job_description3'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start3" value="<?php echo $row['Job_entry3'] ?>" disabled="true"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish3" value="<?php echo $row['Job_exit3'] ?>" disabled="true"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start3" value="<?php echo $row['Salary_on_entry3'] ?>" disabled="true" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish3" value="<?php echo $row['Salary_on_exit3'] ?>" disabled="true"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start3" value="<?php echo $row['Allowance_on_entry3'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish3" value="<?php echo $row['Allowance_on_exit3'] ?>" disabled="true"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason3" value="<?php echo $row['Reason_for_leave3'] ?>" disabled="true"></div>
                </div>
              </div>
              <div class="col-md-1"></div>
              </div>
              <br>

               

             
              <br>

              <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                    
            <h3>REFERENCES</h3>
                 <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-2"><label>Name</label></div>
                  <div class="col-md-2"><label>Official Designation</label></div>
                  <div class="col-md-3"><label>Company Address</label></div>
                  <div class="col-md-2"><label>Contact No</label></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Personal Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreename" value="<?php echo $row['Referee1'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreedesignation" value="<?php echo $row['RefereeDesignation1'] ?>" disabled="true"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="p_refreeaddress" value="<?php echo $row['RefereeAddress1'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="p_refreenumber" value="<?php echo $row['RefereeNumber1'] ?>" disabled="true"></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Academic Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreename" value="<?php echo $row['Referee2'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreedesignation" value="<?php echo $row['RefereeDesignation2'] ?>" disabled="true"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="a_refreeaddress" value="<?php echo $row['RefereeAddress2'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="a_refreenumber" value="<?php echo $row['RefereeNumber2'] ?>" disabled="true"></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Professional Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreename" value="<?php echo $row['Referee3'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreedesignation" value="<?php echo $row['RefereeDesignation3'] ?>" disabled="true"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="pr_refreeaddress" value="<?php echo $row['RefereeAddress3'] ?>" disabled="true"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="pr_refreenumber" value="<?php echo $row['RefereeNumber3'] ?>" disabled="true"></div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
    <br>

   
     
        
                 <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                <button type="submit" class="btn btn-info" name="useredit_btn" ><span class="glyphicon glyphicon-pencil"></span> Update Details</button>
                
                </div>
                <div class="col-md-1"></div>
                </div>
           </div>
             
           

              

                  <br>

         </div>
        </form>
   
		<?php
		}

		?>



			    </div>
                <!-- End My Details Page -->




                <!-- Leave & Absences Page -->

                <div id="leave_absences_page">

                	<h3>Leave & Absences</h3>
						
                	<div class="row">
	                	<div class="col-md-4"><form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

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
		                		<div class="col-md-6"><label>Status</label><select class="form-control" name="status" readonly="">
		                			<option selected="">PENDING</option>
		                		</select></div>
	                		</div>
	                		<p></p>
	                		<input type="submit" class="btn btn-primary" name="apply_leave_btn" value="Apply">

	                	</form></div>

	                	<div class="col-md-6">
	                		<?php		    			
							$sql = "SELECT * FROM `leave_absences` WHERE `user_id` = '$session_id' ";
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



                	</div>
                	<?php
                	}
                	?>


                </div>

                <!-- End Leave & Absences Page -->




				<!-- Settings Page --> 

		       	<div id="settings_page">

		       		<h4>Update Username & Password </h4>
		       		<?php
						$sql = "SELECT * FROM `users` WHERE `username` = '$session_user' AND `status` = 'staff'";
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


<script type="text/javascript">
	   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

	   $(document).ready(function(){

	   	$('#announcements').click(function(){
	   		$('#announcements_page').css('display','block');
	   		$('#my_details_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#announcements , #my_details , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');

	   	});

	   	$('#my_details').click(function(){
	   		$('#announcements_page').css('display','none');
	   		$('#my_details_page').css('display','block');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','none');

	   		$('#announcements , #my_details , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});


	   	$('#leave_absences').click(function(){
	   		$('#announcements_page').css('display','none');
	   		$('#my_details_page').css('display','none');
	   		$('#leave_absences_page').css('display','block');
	   		$('#settings_page').css('display','none');

	   		$('#announcements , #my_details , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	   	$('#settings').click(function(){
	   		$('#announcements_page').css('display','none');
	   		$('#my_details_page').css('display','none');
	   		$('#leave_absences_page').css('display','none');
	   		$('#settings_page').css('display','block');

	   		$('#announcements , #my_details , #leave_absences , #settings').removeClass('active');
	   		$(this).addClass('active');
	   	});

	});


</script>

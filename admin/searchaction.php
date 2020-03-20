 <!-- employee info search-->
    <div class= "row">
        
        <div class="col-md-4">
          <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" name="search_employee_form">
            <br>
            <label>Search By: </label>
            <select class="form-control" name="search_employee_filter">
              <option value="name">Name</option>
              <option value="user_id">Staff ID</option>
              <!--<option value="subsidiary">Subsidiary</option> -->
            </select>
            <div class="input-group">
              <input type="text" name="search_employee_input" class="form-control" placeholder="Who would you like to search for?">

              <div class="input-group-btn">
                <button type="submit" name="search_staff" class="btn btn-info btn-flat"><span class="glyphicon glyphicon-search"></span></button>
              </div>
            </div>
         </form>
       </div>
        
      </div>

 


       
        
 
   <?php 

  if(isset($_POST["staffedit_btn"])) {
?>

<script>
  $(window).load(function(){
            $('#activity').removeClass('active');
            $('#manage_staff').addClass('active');
          });
</script>


<?php



error_reporting(0);

    $id = $_POST['user_id'];
    $subsidiary = $_POST['subsidiary'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $lastname = $lastname = $_POST['lastname'];  $firstname = $_POST['firstname'];  $othername = $_POST['othername'];  $dob = $_POST['dob'];  $nationality = $_POST['nationality'];  $maidenname = $_POST['maidenname'];  $state = $_POST['state'];  $telephone = $_POST['telephone'];  $title = $_POST['title'];  $religion = $_POST['religion'];  $maritalstatus = $_POST['maritalstatus'];  $marriagedate = $_POST['marriagedate'];  $spousename = $_POST['spousename'];  $spousenat = $_POST['spousenat'];  $spousepro = $_POST['spousepro'];  $address = $_POST['address'];  $employmentdate = $_POST['employmentdate'];  $email = $_POST['email'];  $postalcode = $_POST['postalcode'];  $nextofkin = $_POST['nextofkin'];  $kinaddress = $_POST['kinaddress'];  $kinrelationship = $_POST['kinrelationship'];  $dependantname1 = $_POST['dependantname1'];  $dependantdob1 = $_POST['dependantdob1'];  $dependantaddress1 = $_POST['dependantaddress1'];  $dependantphone1 = $_POST['dependantphone1'];  $dependantname2 = $_POST['dependantname2'];  $dependantdob2 = $_POST['dependantdob2'];  $dependantaddress2 = $_POST['dependantaddress2'];  $dependantphone2 = $_POST['dependantphone2'];  $dependantname3 = $_POST['dependantname3'];  $dependantdob3 = $_POST['dependantdob3'];  $dependantaddress3 = $_POST['dependantaddress3']; $dependantphone3 = $_POST['dependantphone3'];  $hobbies = $_POST['hobbies'];  $conviction = $_POST['conviction'];  $convictionreason = $_POST['convictionreason'];  $cbcrelative = $_POST['cbcrelative'];  $cbcrelative_name = $_POST['cbcrelative_name'];  $cbcrelative_relationship = $_POST['cbcrelative_relationship'];  $familymember_name1 = $_POST['familymember_name1'];  $familymember_relationship1 = $_POST['familymember_relationship1'];  $familymember_dob1 = $_POST['familymember_dob1'];  $familymember_name2 = $_POST['familymember_name2'];  $familymember_relationship2 = $_POST['familymember_relationship2'];  $familymember_dob2 = $_POST['familymember_dob2'];  $familymember_name3 = $_POST['familymember_name3'];  $familymember_relationship3 = $_POST['familymember_relationship3'];  $familymember_dob3 = $_POST['familymember_dob3'];  $college_name = $_POST['college_name'];  $college_start = $_POST['college_start'];  $college_finish = $_POST['college_finish'];  $college_certificate = $_POST['college_certificate'];  $highschool_name = $_POST['highschool_name'];  $highschool_start = $_POST['highschool_start'];  $highschool_finish = $_POST['highschool_finish'];  $highschool_certificate = $_POST['highschool_certificate'];  $professional_name = $_POST['professional_name'];  $professional_start = $_POST['professional_start'];  $professional_finish = $_POST['professional_finish'];  $professional_certificate = $_POST['professional_certificate']; $speak1 = $_POST['speak1'];  $write1 = $_POST['write1'];  $read1 = $_POST['read1'];  $speak2 = $_POST['speak2'];  $write2 = $_POST['write2'];  $read2 = $_POST['read2'];  $speak3 = $_POST['speak3'];  $write3 = $_POST['write3'];  $read3 = $_POST['read3'];   $prevjoborg1 = $_POST['prevjoborg1'];  $prevjobtitle1 = $_POST['prevjobtitle1'];  $prevjobduty1 = $_POST['prevjobduty1'];  $prevdate_start1 = $_POST['prevdate_start1'];  $prevdate_finish1 = $_POST['prevdate_finish1'];  $prevsalary_start1 = $_POST['prevsalary_start1'];  $prevsalary_finish1 = $_POST['prevsalary_finish1'];  $prevallowance_start1 = $_POST['prevallowance_start1'];  $prevallowance_finish1 = $_POST['prevallowance_finish1'];  $leave_reason1 = $_POST['leave_reason1'];  $prevjoborg2 = $_POST['prevjoborg2'];  $prevjobtitle2 = $_POST['prevjobtitle2'];  $prevjobduty2 = $_POST['prevjobduty2'];  $prevdate_start2 = $_POST['prevdate_start2'];  $prevdate_finish2 = $_POST['prevdate_finish2'];  $prevsalary_start2 = $_POST['prevsalary_start2'];  $prevsalary_finish2 = $_POST['prevsalary_finish2'];  $prevallowance_start2 = $_POST['prevallowance_start2'];  $prevallowance_finish2 = $_POST['prevallowance_finish2'];  $leave_reason2 = $_POST['leave_reason2'];  $prevjoborg3 = $_POST['prevjoborg3'];  $prevjobtitle3 = $_POST['prevjobtitle3'];  $prevjobduty3 = $_POST['prevjobduty3'];  $prevdate_start3 = $_POST['prevdate_start3'];  $prevdate_finish3 = $_POST['prevdate_finish3'];  $prevsalary_start3 = $_POST['prevsalary_start3'];  $prevsalary_finish3 = $_POST['prevsalary_finish3'];  $prevallowance_start3 = $_POST['prevallowance_start3'];  $prevallowance_finish3 = $_POST['prevallowance_finish3'];  $leave_reason3 = $_POST['leave_reason3'];  $p_refreename = $_POST['p_refreename'];  $p_refreedesignation = $_POST['p_refreedesignation'];  $p_refreeaddress = $_POST['p_refreeaddress'];  $p_refreenumber = $_POST['p_refreenumber'];  $a_refreename = $_POST['a_refreename'];  $a_refreedesignation = $_POST['a_refreedesignation'];  $a_refreeaddress = $_POST['a_refreeaddress'];  $a_refreenumber = $_POST['a_refreenumber'];  $pr_refreename = $_POST['pr_refreename'];  $pr_refreedesignation = $_POST['pr_refreedesignation'];  $pr_refreeaddress = $_POST['pr_refreeaddress'];  $pr_refreenumber = $_POST['pr_refreenumber'];    $subsidiary = $_POST['subsidiary']; $staff_id = $_POST['staff_id']; $language1 = $_POST['language1']; $language2 = $_POST['language2']; $language3 = $_POST['language3'];  $user_id = $_POST['staff_id'];

    //$conn = mysqli_connect("localhost","root","","cbc"); //re-establishing connection

    //$db = mysqli_select_db( $conn,"cbc"); // Selecting database.
     
    $fullname = $lastname.' '.$firstname;

    $sql_e= "UPDATE `personal_information` SET  `LastName`= '$lastname', `FirstName` ='$firstname' , `OtherName` ='$othername', `MaidenName` ='$maidenname', `D_O_B`= '$dob', `Nationality` ='$nationality', `State_of_Origin` ='$state', `Telephone_No`='$telephone',  `Title`='$title',  `Religion`='$religion', `Marital_Status`= '$maritalstatus', `Marriage_Date`= '$marriagedate', `Spouse_Name`= '$spousename', `Spouse_Nationality`= '$spousenat', `Spouse_Profession`= '$spousepro', `Residential_Address`= '$address', `Date_of_Employment`= '$employmentdate', `Email_Address`= '$email', `Post_Code`= '$postalcode', `Next_of_Kin`= '$nextofkin', `Next_of_Kin_Address`= '$kinaddress', `Relationship_with_Next_of_Kin`= '$kinrelationship', `subsidiary`='$subsidiary' WHERE `user_id`= '$id'";
    

     
$sql_f= "UPDATE `family_details` SET   `Name_of_dependant1`='$dependantname1' , `DOB_of_dependant1`='$dependantdob1' , `Address_of_dependant1`='$dependantaddress1' , `MobileNo_of_dependant1`='$dependantphone1' , `Name_of_dependant2`='$dependantname2' , `DOB_of_dependant2`='$dependantdob2' , `Address_of_dependant2`='$dependantaddress2' , `MobileNo_of_dependant2`='$dependantphone2' , `Name_of_dependant3`='$dependantname3' , `DOB_of_dependant3`='$dependantdob3' , `Address_of_dependant3`='$dependantaddress3' , `MobileNo_of_dependant3`='$dependantphone3' , `Hobbies`='$hobbies' , `Convict_status`='$conviction' , `Conviction_reason`='$convictionreason' , `CBC_Relative_status`='$cbcrelative' , `Name_of_relative`='$cbcrelative_name' , `Relationship_with_relative`='$cbcrelative_relationship' , `Familymember_name1`='$familymember_name1' , `Relationship_with_familymember1`='$familymember_relationship1' , `DOB_of_familymember1`='$familymember_dob1' , `Familymember_name2`='$familymember_name2' , `Relationship_with_familymember2`='$familymember_relationship2' , `DOB_of_familymember2`='$familymember_dob2' , `Familymember_name3`='$familymember_name3' , `Relationship_with_familymember3`='$familymember_relationship3' , `DOB_of_familymember3`='$familymember_dob3'  WHERE `user_id`= '$id'"; 


$sql_g= "UPDATE  `educational_details` SET  `College_name`='$college_name' , `College_entry`='$college_start' , `College_exit`='$college_finish' , `College_certification`='$college_certificate' , `Highschool_name`='$highschool_name' , `Highschool_entry`='$highschool_start' , `Highschool_exit`='$highschool_finish' , `Highschool_certification`='$highschool_certificate' , `Professional_name`='$professional_name' , `Professional_entry`='$professional_start' , `Professional_exit`='$professional_finish' , `Professional_certification`='$professional_certificate' , `Language_spoken1`='$language1' , `Speaking_status1`='$speak1' , `Writing_status1`='$write1' , `Reading_status1`='$read1' , `Language_spoken2`='$language2' , `Speaking_status2`='$speak2' , `Writing_status2`='$write2' , `Reading_status2`='$read2' , `Language_spoken3`='$language3' , `Speaking_status3`='$speak3' , `Writing_status3`='$write3' , `Reading_status3`='$read3'  WHERE `user_id`= '$id'";


$sql_h= "UPDATE `employment_details` SET  `Prev_organisation1`= '$prevjoborg1' , `Job_title1`='$prevjobtitle1', `Job_description1`='$prevjobduty1' , `Job_entry1`='$prevdate_start1' , `Job_exit1`='$prevdate_finish1'  , `Salary_on_entry1`='$prevsalary_start1' , `Salary_on_exit1`='$prevsalary_finish1', `Allowance_on_entry1`='$prevallowance_start1' , `Allowance_on_exit1`='$prevallowance_finish1' , `Reason_for_leave1`='$leave_reason1' , `Prev_organisation2`='$prevjoborg2' , `Job_title2`= '$prevjobtitle1' , `Job_description2`='$prevjobduty2' , `Job_entry2`='$prevdate_start2' , `Job_exit2`='$prevdate_finish2'  , `Salary_on_entry2`='$prevsalary_start2' , `Salary_on_exit2`='$prevsalary_finish2',`Allowance_on_entry2`='$prevallowance_start2' , `Allowance_on_exit2`='$prevallowance_finish2' , `Reason_for_leave2`='$leave_reason2' , `Prev_organisation3`= '$prevjoborg3' , `Job_title3`='$prevjobtitle3' , `Job_description3`='$prevjobduty3' , `Job_entry3`='$prevdate_start3' , `Job_exit3`='$prevdate_finish3' , `Salary_on_entry3`='$prevsalary_start3' , `Salary_on_exit3`='$prevsalary_finish3', `Allowance_on_entry3`='$prevallowance_start3' , `Allowance_on_exit3`='$prevallowance_finish3' , `Reason_for_leave3`='$leave_reason3' , `Referee1`='$p_refreename' , `RefereeDesignation1`='$p_refreedesignation' , `RefereeAddress1`= '$p_refreeaddress', `RefereeNumber1`= '$p_refreenumber', `Referee2`='$a_refreename' , `RefereeDesignation2`='$a_refreedesignation' , `RefereeAddress2`='$a_refreeaddress' , `RefereeNumber2`='$a_refreenumber' , `Referee3`='$pr_refreename' , `RefereeDesignation3`='$pr_refreedesignation' , `RefereeAddress3`='$pr_refreeaddress' , `RefereeNumber3`='$pr_refreenumber'  WHERE `user_id`= '$id'";




$result1= mysqli_query($conn, $sql_e);
$result2= mysqli_query($conn, $sql_f);
$result3= mysqli_query($conn, $sql_g);
$result4= mysqli_query($conn, $sql_h);

//$id = mysqli_insert_id($conn);

if($result1){

   $result2; $result3; $result4;
   }
if($result2 ){?>
 <style type="text/css">
      #manage_staff_page {
      display: block;}
      #activity_page {
      display: none;}
      </style>
       <script type="text/javascript">
       $(window).load(function(){
            $('#activity').removeClass('active');
            $('#manage_staff').addClass('active');
          });
        window.alert('Update Successful');
       </script>
   <?php
} else{
    echo " ERROR: Could not able to execute  " . mysqli_error($conn);

}
}

  else if (isset($_POST["staffdel_btn"])) {
    $id = $_POST['user_id'];
    $sql = "DELETE FROM `personal_information` WHERE `user_id` = $id";
    if (mysqli_query($conn,$sql)){?>
          
      <style type="text/css">
      #manage_staff_page {
      display: block;}
      #activity_page {
      display: none;}
      </style>
       <script type="text/javascript">
        $(window).load(function(){
            $('#activity').removeClass('active');
            $('#manage_staff').addClass('active');
          });
        window.alert('Delete Successful');
       </script>
          
          <?php 
         // header('location:admin.php');
    }
  }



  $search_employee_filter= '';
  $search_employee_input= '';
 
  if(isset($_POST['search_staff'])){ 
    if (isset($search_employee_input)) {
      $search_employee_filter = $_POST['search_employee_filter'];
      $search_employee_input = $_POST['search_employee_input'];
       ?>

          
     <style type="text/css">
       #manage_staff_page {display: block;}
       #activity_page { display: none;}
     </style>
     <script type="text/javascript">
       $(window).load(function(){
            $('#activity').removeClass('active');
            $('#manage_staff').addClass('active');
          });
       </script>
     <?php

      if ($search_employee_filter == 'name') {
            $sql2 = " SELECT * FROM `personal_information` AS pe INNER JOIN `family_details` AS fa ON pe.user_id = fa.user_id INNER JOIN `educational_details` AS ed ON pe.user_id = ed.user_id INNER JOIN `employment_details` AS em ON pe.user_id = em.user_id  WHERE FirstName LIKE '$search_employee_input%' OR LastName LIKE '$search_employee_input%'";
      }
      else if ($search_employee_filter == 'user_id'){
            $sql2 = "SELECT * FROM personal_information AS pe INNER JOIN family_details AS fa ON pe.user_id=fa.user_id INNER JOIN educational_details AS ed ON pe.user_id=ed.user_id INNER JOIN employment_details AS em ON pe.user_id=em.user_id WHERE pe.user_id LIKE '$search_employee_input%'";
      }

      $query2 = mysqli_query($conn,$sql2);

    
    $row_count = mysqli_num_rows($query2);

    
  //echo $row_count;

    if ($row_count == 0 ) {
      echo "<h3> sorry, there are no results with your query </h3>";
    }
    elseif ($row_count > 1) {
      echo "<h3> sorry you can only search for one user </h3>";
      while ($row = mysqli_fetch_array($query2 , MYSQLI_ASSOC)) {
        $fullname = $row['LastName'].' '.$row['FirstName'];
        echo "<ul><li><h4>".$fullname." - ".$row['user_id']."</h4></li></ul>";
      }
    }


           
      while ($row_count == 1 && $row = mysqli_fetch_array($query2 , MYSQLI_ASSOC) ) {

          
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
                <!--  <p><h3>PERSONAL INFORMATION </h3></p> -->
                 <p></p>
                
              <div class="col-md-3">
              <label>Last Name:</label><input type="text" class="form-control" name="lastname" value="<?php echo $row['LastName'] ?>">
              
              </div>
                          
              <div class="col-md-3">
              <label>First Name:</label><input type="text" class="form-control" name="firstname" value="<?php echo $row['FirstName'] ?>">
              </div>
              
              <div class="col-md-3">
              <label>Other Name:</label><input type="text" class="form-control" name="othername" value="<?php echo $row['OtherName'] ?>"><br>
              </div>
              
              <div class="col-md-3">
              <label>Maiden Name (if applicable):</label><input type="text" class="form-control" name="maidenname"  value="<?php echo $row['MaidenName'] ?>"><br>
              </div>
            </div>
            <div class="col-md-1"></div>
           </div>

           <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <div class="col-md-3">
              <label>Date of Birth:</label><input type="date" class="form-control" name="dob"   value="<?php echo $row['D_O_B'] ?>">
              </div>

              <div class="col-md-3">
              <label>Nationality:</label><input type="text" class="form-control" name="nationality"   value="<?php echo $row['Nationality'] ?>">
              </div>
              
              <div class="col-md-3">
              <label>State Of Origin:</label><input type="text" class="form-control" name="state"   value="<?php echo $row['State_of_Origin'] ?>">
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
                <label>Title:</label><br><select name="title" class="form-control">
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
              <label>Marriage Date:</label><input type="date" class="form-control" name="marriagedate" value="<?php echo $row['Marriage_Date'] ?>">
              </div>

              <div class="col-md-3">
              <label>Spouse Name:</label><input type="text" class="form-control" name="spousename"  value="<?php echo $row['Spouse_Name'] ?>">
              </div>
              
              <div class="col-md-3">
              <label>Nationality Of Spouse:</label><input type="text" class="form-control" name="spousenat"  value="<?php echo $row['Spouse_Nationality'] ?>">
              </div>

              <div class="col-md-3">
              <label>Spouse Profession:</label><input type="text" class="form-control" name="spousepro"  value="<?php echo $row['Spouse_Profession'] ?>">
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
              </div>
             
              <div class="col-md-3">
              <label>Staff ID No:</label><input type="number" class="form-control" name="staff_id"   value="<?php echo $row['user_id'] ?>" disabled>
              </div>
              

              <div class="col-md-3">
              <label>Date Of Employment:</label><input type="date" class="form-control" name="employmentdate"   value="<?php echo $row['Date_of_Employment'] ?>">
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
              <label>Post Code:</label><input type="number" class="form-control" name="postalcode"   value="<?php echo $row['Post_Code'] ?>">
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
                          <label>Hobbies</label><input type="text" class="form-control" name="hobbies" value="<?php echo $row['Hobbies'] ?>">
                          </div>
                            

                          <div class="col-md-3">
                          <label>Convict Status</label><select name="conviction" class="form-control">
                          <option selected=""><?php echo $row['Convict_status'] ?></option> 
                          <option>Yes</option> 
                          <option>No</option>

                          </select>
                          </div>
                          <div class="col-md-6">
                          <label>If Yes, please specify</label><input type="text" class="form-control" name="convictionreason" value="<?php echo $row['Conviction_reason'] ?>">
                          </div>
                 </div>
                 <div class="col-md-1"></div>
                 </div>
                  <br>

                  <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                          <div class="col-md-4">
                          <label>Do you have any relatives in CBCemea ? </label><select name="cbcrelative" class="form-control">
                          <option selected=""><?php echo $row['CBC_Relative_status'] ?></option>  
                          <option>Yes</option>
                          <option>No</option>

                          </select>
                          </div>
                        

                          <div class="col-md-4">
                          <label>Relative's Name</label><input type="text" class="form-control" name="cbcrelative_name" value="<?php echo $row['Name_of_relative'] ?>">
                          </div>

                          <div class="col-md-4">
                          <label>Relationship</label><input type="text" class="form-control" name="cbcrelative_relationship" value="<?php echo $row['Relationship_with_relative'] ?>">
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
                    <div class="col-md-2"><input type="text" class="form-control" name="college_name" value="<?php echo $row['College_name'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="college_start" value="<?php echo $row['College_entry'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="college_finish" value="<?php echo $row['College_exit'] ?>"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="college_certificate" value="<?php echo $row['College_certification'] ?>"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"><label>Secondary/Technical School</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="highschool_name" value="<?php echo $row['Highschool_name'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="highschool_start" value="<?php echo $row['Highschool_entry'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="highschool_finish" value="<?php echo $row['Highschool_exit'] ?>"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="highschool_certificate"  value="<?php echo $row['Highschool_certification'] ?>"></div>
                  </div>

                  <div class="row">
                    <div class="col-md-2"><label>Professional Certifications</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="professional_name" value="<?php echo $row['Professional_name'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="professional_start" value="<?php echo $row['Professional_entry'] ?>"></div>
                    <div class="col-md-3"><input type="date" class="form-control" name="professional_finish" value="<?php echo $row['Professional_exit'] ?>"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="professional_certificate" value="<?php echo $row['Professional_certification'] ?>"></div>
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

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg1" value="<?php echo $row['Prev_organisation1'] ?>"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle1" value="<?php echo $row['Job_title1'] ?>"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty1" value="<?php echo $row['Job_description1'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start1" value="<?php echo $row['Job_entry1'] ?>"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish1" value="<?php echo $row['Job_exit1'] ?>"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start1" value="<?php echo $row['Salary_on_entry1'] ?>" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish1" value="<?php echo $row['Salary_on_exit1'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start1" value="<?php echo $row['Allowance_on_entry1'] ?>" ></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish1" value="<?php echo $row['Allowance_on_exit1'] ?>"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason1" value="<?php echo $row['Reason_for_leave2'] ?>"></div>
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

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg2" value="<?php echo $row['Prev_organisation2'] ?>"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle2" value="<?php echo $row['Job_title2'] ?>"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty2" value="<?php echo $row['Job_description2'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start2" value="<?php echo $row['Job_entry2'] ?>"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish2" value="<?php echo $row['Job_exit2'] ?>"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start2" value="<?php echo $row['Salary_on_entry2'] ?>" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish2" value="<?php echo $row['Salary_on_exit2'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start2" value="<?php echo $row['Allowance_on_entry2'] ?>" ></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish2" value="<?php echo $row['Allowance_on_exit2'] ?>"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason2" value="<?php echo $row['Reason_for_leave2'] ?>"></div>
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

                  <div class="col-md-4"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg3" value="<?php echo $row['Prev_organisation3'] ?>"></div>
                  <div class="col-md-4"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle3" value="<?php echo $row['Job_title3'] ?>"></div>
                  <div class="col-md-4"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty3" value="<?php echo $row['Job_description3'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-3"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start3" value="<?php echo $row['Job_entry3'] ?>"></div> 
                  <div class="col-md-3"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish3" value="<?php echo $row['Job_exit3'] ?>"></div>
                  <div class="col-md-3"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start3" value="<?php echo $row['Salary_on_entry3'] ?>" ></div>
                  <div class="col-md-3"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish3" value="<?php echo $row['Salary_on_exit3'] ?>"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start3" value="<?php echo $row['Allowance_on_entry3'] ?>" ></div>
                  <div class="col-md-4"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish3" value="<?php echo $row['Allowance_on_exit3'] ?>"></div>
                  <div class="col-md-4"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason3" value="<?php echo $row['Reason_for_leave3'] ?>"></div>
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
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreename" value="<?php echo $row['Referee1'] ?>"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreedesignation" value="<?php echo $row['RefereeDesignation1'] ?>"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="p_refreeaddress" value="<?php echo $row['RefereeAddress1'] ?>"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="p_refreenumber" value="<?php echo $row['RefereeNumber1'] ?>"></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Academic Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreename" value="<?php echo $row['Referee2'] ?>"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreedesignation" value="<?php echo $row['RefereeDesignation2'] ?>"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="a_refreeaddress" value="<?php echo $row['RefereeAddress2'] ?>"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="a_refreenumber" value="<?php echo $row['RefereeNumber2'] ?>"></div>
                </div>
                <div class="row">
                  <div class="col-md-2"><label>Professional Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreename" value="<?php echo $row['Referee3'] ?>"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreedesignation" value="<?php echo $row['RefereeDesignation3'] ?>"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="pr_refreeaddress" value="<?php echo $row['RefereeAddress3'] ?>"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="pr_refreenumber" value="<?php echo $row['RefereeNumber3'] ?>"></div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
    <br>

   
     
        
                 <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                <button type="submit" class="btn btn-info" name="staffedit_btn" ><span class="glyphicon glyphicon-pencil"></span> Update Info</button>
                <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal-<?php echo $row['user_id'] ?>"><span class="glyphicon glyphicon-trash"></span> Delete User</button>
                </div>
                <div class="col-md-1"></div>
                </div>
           </div>
             
           

              

                  <br>

         </div>
        </form>
   

        <!-- Delete Modal -->
        
        <div class="modal fade" id="deletemodal-<?php echo $row['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deletemodalLabel-<?php echo $row['user_id'] ?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="deletemodalLabel-<?php echo $row['user_id'] ?>">DELETE USER CONFIRMATION -<?php echo $row['user_id'] ?></h4>
              </div>
              <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
              <div class="modal-body">
                
                <h4>Are you sure you wish to delete the details of -<?php echo $fullname ?>?</h4>
                    <h5>Once you proceed, action cannot be undone!!!</h5>
                   <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-danger" name="staffdel_btn" value="Delete"></button>
              </form>
              </div>
            </div>
          </div>
        </div>


        <?php

      }
    }               
  }
  ?>


 

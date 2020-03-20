<?php
error_reporting(0);
include '../dbconnect.php';


  $staff_id='';$lastname='';$firstname='';$othername='';$dob='';$nationality='';$maidenname='';$state='';$telephone='';$title='';$religion='';$maritalstatus='';$marriagedate='';$spousename='';$spousenat='';$spousepro='';$address='';$employmentdate='';$email='';$postalcode='';$nextofkin='';$kinaddress='';$kinrelationship='';$dependantname1='';$dependantdob1='';$dependantaddress1='';$dependantphone1='';$dependantname2='';$dependantdob2='';$dependantaddress2='';$dependantphone2='';$dependantname3='';$dependantdob3='';$dependantaddress3='';$dependantphone3='';$hobbies='';$conviction='';$convictionreason='';$cbcrelative='';$cbcrelative_name='';$cbcrelative_relationship='';$familymember_name1='';$familymember_relationship1='';$familymember_dob1='';$familymember_name2='';$familymember_relationship2='';$familymember_dob2='';$familymember_name3='';$familymember_relationship3='';$familymember_dob3='';$college_name='';$college_start='';$college_finish='';$college_certificate='';$highschool_name='';$highschool_start='';$highschool_finish='';$highschool_certificate='';$professional_name='';$professional_start='';$professional_finish='';$professional_certificate='';$language1='';$speak1='';$write1='';$read1='';$language2='';$speak2='';$write2='';$read2='';$language3='';$speak3='';$write3='';$read3='';$prevjoborg1='';$prevjobtitle1='';$prevjobduty1='';$prevdate_start1='';$prevdate_finish1='';$prevsalary_start1='';$prevsalary_finish1='';$prevallowance_start1='';$prevallowance_finish1='';$leave_reason1='';$prevjoborg2='';$prevjobtitle2='';$prevjobduty2='';$prevdate_start2='';$prevdate_finish2='';$prevsalary_start2='';$prevsalary_finish2='';$prevallowance_start2='';$prevallowance_finish2='';$leave_reason2='';$prevjoborg3='';$prevjobtitle3='';$prevjobduty3='';$prevdate_start3='';$prevdate_finish3='';$prevsalary_start3='';$prevsalary_finish3='';$prevallowance_start3='';$prevallowance_finish3='';$leave_reason3='';$p_refreename='';$p_refreedesignation='';$p_refreeaddress='';$p_refreenumber='';$a_refreename='';$a_refreedesignation='';$a_refreeaddress='';$a_refreenumber='';$pr_refreename='';$pr_refreedesignation='';$pr_refreeaddress='';$pr_refreenumber='';$agreement='';$image_location='';$subsidiary='';$user_id='';

?>

<?php
if(isset($_POST["submit"])) {


$lastname = $_POST['lastname'];  $firstname = $_POST['firstname'];  $othername = $_POST['othername'];  $dob = $_POST['dob'];  $nationality = $_POST['nationality'];  $maidenname = $_POST['maidenname'];  $state = $_POST['state'];  $telephone = $_POST['telephone'];  $title = $_POST['title'];  $religion = $_POST['religion'];  $maritalstatus = $_POST['maritalstatus'];  $marriagedate = $_POST['marriagedate'];  $spousename = $_POST['spousename'];  $spousenat = $_POST['spousenat'];  $spousepro = $_POST['spousepro'];  $address = $_POST['address'];  $employmentdate = $_POST['employmentdate'];  $email = $_POST['email'];  $postalcode = $_POST['postalcode'];  $nextofkin = $_POST['nextofkin'];  $kinaddress = $_POST['kinaddress'];  $kinrelationship = $_POST['kinrelationship'];  $dependantname1 = $_POST['dependantname1'];  $dependantdob1 = $_POST['dependantdob1'];  $dependantaddress1 = $_POST['dependantaddress1'];  $dependantphone1 = $_POST['dependantphone1'];  $dependantname2 = $_POST['dependantname2'];  $dependantdob2 = $_POST['dependantdob2'];  $dependantaddress2 = $_POST['dependantaddress2'];  $dependantphone2 = $_POST['dependantphone2'];  $dependantname3 = $_POST['dependantname3'];  $dependantdob3 = $_POST['dependantdob3'];  $dependantaddress3 = $_POST['dependantaddress3']; $dependantphone3 = $_POST['dependantphone3'];  $hobbies = $_POST['hobbies'];  $conviction = $_POST['conviction'];  $convictionreason = $_POST['convictionreason'];  $cbcrelative = $_POST['cbcrelative'];  $cbcrelative_name = $_POST['cbcrelative_name'];  $cbcrelative_relationship = $_POST['cbcrelative_relationship'];  $familymember_name1 = $_POST['familymember_name1'];  $familymember_relationship1 = $_POST['familymember_relationship1'];  $familymember_dob1 = $_POST['familymember_dob1'];  $familymember_name2 = $_POST['familymember_name2'];  $familymember_relationship2 = $_POST['familymember_relationship2'];  $familymember_dob2 = $_POST['familymember_dob2'];  $familymember_name3 = $_POST['familymember_name3'];  $familymember_relationship3 = $_POST['familymember_relationship3'];  $familymember_dob3 = $_POST['familymember_dob3'];  $college_name = $_POST['college_name'];  $college_start = $_POST['college_start'];  $college_finish = $_POST['college_finish'];  $college_certificate = $_POST['college_certificate'];  $highschool_name = $_POST['highschool_name'];  $highschool_start = $_POST['highschool_start'];  $highschool_finish = $_POST['highschool_finish'];  $highschool_certificate = $_POST['highschool_certificate'];  $professional_name = $_POST['professional_name'];  $professional_start = $_POST['professional_start'];  $professional_finish = $_POST['professional_finish'];  $professional_certificate = $_POST['professional_certificate'];  $speak1 = $_POST['speak1'];  $write1 = $_POST['write1'];  $read1 = $_POST['read1'];  $speak2 = $_POST['speak2'];  $write2 = $_POST['write2'];  $read2 = $_POST['read2'];  $speak3 = $_POST['speak3'];  $write3 = $_POST['write3'];  $read3 = $_POST['read3'];   $prevjoborg1 = $_POST['prevjoborg1'];  $prevjobtitle1 = $_POST['prevjobtitle1'];  $prevjobduty1 = $_POST['prevjobduty1'];  $prevdate_start1 = $_POST['prevdate_start1'];  $prevdate_finish1 = $_POST['prevdate_finish1'];  $prevsalary_start1 = $_POST['prevsalary_start1'];  $prevsalary_finish1 = $_POST['prevsalary_finish1'];  $prevallowance_start1 = $_POST['prevallowance_start1'];  $prevallowance_finish1 = $_POST['prevallowance_finish1'];  $leave_reason1 = $_POST['leave_reason1'];  $prevjoborg2 = $_POST['prevjoborg2'];  $prevjobtitle2 = $_POST['prevjobtitle2'];  $prevjobduty2 = $_POST['prevjobduty2'];  $prevdate_start2 = $_POST['prevdate_start2'];  $prevdate_finish2 = $_POST['prevdate_finish2'];  $prevsalary_start2 = $_POST['prevsalary_start2'];  $prevsalary_finish2 = $_POST['prevsalary_finish2'];  $prevallowance_start2 = $_POST['prevallowance_start2'];  $prevallowance_finish2 = $_POST['prevallowance_finish2'];  $leave_reason2 = $_POST['leave_reason2'];  $prevjoborg3 = $_POST['prevjoborg3'];  $prevjobtitle3 = $_POST['prevjobtitle3'];  $prevjobduty3 = $_POST['prevjobduty3'];  $prevdate_start3 = $_POST['prevdate_start3'];  $prevdate_finish3 = $_POST['prevdate_finish3'];  $prevsalary_start3 = $_POST['prevsalary_start3'];  $prevsalary_finish3 = $_POST['prevsalary_finish3'];  $prevallowance_start3 = $_POST['prevallowance_start3'];  $prevallowance_finish3 = $_POST['prevallowance_finish3'];  $leave_reason3 = $_POST['leave_reason3'];  $p_refreename = $_POST['p_refreename'];  $p_refreedesignation = $_POST['p_refreedesignation'];  $p_refreeaddress = $_POST['p_refreeaddress'];  $p_refreenumber = $_POST['p_refreenumber'];  $a_refreename = $_POST['a_refreename'];  $a_refreedesignation = $_POST['a_refreedesignation'];  $a_refreeaddress = $_POST['a_refreeaddress'];  $a_refreenumber = $_POST['a_refreenumber'];  $pr_refreename = $_POST['pr_refreename'];  $pr_refreedesignation = $_POST['pr_refreedesignation'];  $pr_refreeaddress = $_POST['pr_refreeaddress'];  $pr_refreenumber = $_POST['pr_refreenumber'];  $agreement = $_POST['agreement']; $error = ' '; $subsidiary = $_POST['subsidiary']; $staff_id = $_POST['staff_id']; $language1 = $_POST['language1']; $language2 = $_POST['language2']; $language3 = $_POST['language3'];$user_id = $_POST['staff_id'];



$target_dir = "../uploads/";
$file_name = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($file_name,PATHINFO_EXTENSION);
$image_location = $file_name;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
    
       $error .= 'please select an image ';
        //window.location.href='';
        
        $uploadOk = 0;
    }
}
   // Check if file already exists
// if (file_exists($file_name)) {
     
//         $error .= 'sorry image already exists ';
//         //window.location.href='';
        
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["image"]["size"] > 500000) {
     
        $error .= 'sorry max image size: 500KB  ';
        //window.location.href='';
        
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
        $error .= 'Sorry, only JPG, JPEG, PNG & GIF files are allowed  ';
        //window.location.href='';
        
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ?>
        <script>
        alert('sorry image was not uploaded: '+ '<?php echo $error; ?>' );
        //window.location.href='';
        </script>
    <?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)) {
        ?>
        <script>
        //alert('<?php //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded."; ?>');
        //window.location.href='';
        </script>
    <?php
    } else {
       ?>
        <script>
        alert('sorry there was a error uploading your file');
        //window.location.href='';
        </script>
    <?php
    die();
    }
}





 $conn = mysqli_connect("localhost","root","","cbc"); //re-establishing connection

 $db = mysqli_select_db( $conn,"cbc"); // Selecting database.
 
 $fullname = $lastname.' '.$firstname;

$sql_1= "INSERT INTO `personal_information`(`user_id`, `LastName`, `FirstName`, `OtherName`, `MaidenName`, `D_O_B`, `Nationality`, `State_of_Origin`, `Telephone_No`, `Title`, `Religion`, `Marital_Status`, `Marriage_Date`, `Spouse_Name`, `Spouse_Nationality`, `Spouse_Profession`, `Residential_Address`, `Date_of_Employment`, `Email_Address`, `Post_Code`, `Next_of_Kin`, `Next_of_Kin_Address`, `Relationship_with_Next_of_Kin`, `Passport_photograph`, `subsidiary`) VALUES ('$staff_id','$lastname', '$firstname','$othername','$maidenname','$dob','$nationality','$state','$telephone','$title','$religion','$maritalstatus','$marriagedate', '$spousename','$spousenat','$spousepro','$address','$employmentdate','$email','$postalcode','$nextofkin','$kinaddress','$kinrelationship', '$image_location' , '$subsidiary')";


$sql_2= "INSERT INTO `family_details`(`user_id`, `Full_name`, `Name_of_dependant1`, `DOB_of_dependant1`, `Address_of_dependant1`, `MobileNo_of_dependant1`, `Name_of_dependant2`, `DOB_of_dependant2`, `Address_of_dependant2`, `MobileNo_of_dependant2`, `Name_of_dependant3`, `DOB_of_dependant3`, `Address_of_dependant3`, `MobileNo_of_dependant3`, `Hobbies`, `Convict_status`, `Conviction_reason`, `CBC_Relative_status`, `Name_of_relative`, `Relationship_with_relative`, `Familymember_name1`, `Relationship_with_familymember1`, `DOB_of_familymember1`, `Familymember_name2`, `Relationship_with_familymember2`, `DOB_of_familymember2`, `Familymember_name3`, `Relationship_with_familymember3`, `DOB_of_familymember3`) VALUES ('$staff_id','$fullname','$dependantname1','$dependantdob1',' $dependantaddress1','$dependantphone1',' $dependantname2','$dependantdob2',' $dependantaddress2','$dependantphone2',' $dependantname3', '$dependantdob3',' $dependantaddress3','$dependantphone3',' $hobbies','$conviction','$convictionreason',' $cbcrelative',  ' $cbcrelative_name','$cbcrelative_relationship', ' $familymember_name1','$familymember_relationship1','$familymember_dob1', ' $familymember_name2','$familymember_relationship2','$familymember_dob2',' $familymember_name3','$familymember_relationship3', '$familymember_dob3') ";


$sql_3= "INSERT INTO `educational_details`(`user_id`, `College_name`, `College_entry`, `College_exit`, `College_certification`, `Highschool_name`, `Highschool_entry`, `Highschool_exit`, `Highschool_certification`, `Professional_name`, `Professional_entry`, `Professional_exit`, `Professional_certification`, `Language_spoken1`, `Speaking_status1`, `Writing_status1`, `Reading_status1`, `Language_spoken2`, `Speaking_status2`, `Writing_status2`, `Reading_status2`, `Language_spoken3`, `Speaking_status3`, `Writing_status3`, `Reading_status3`) VALUES ('$staff_id', '$college_name','$college_start','$college_finish','$college_certificate','$highschool_name','$highschool_start', '$highschool_finish','$highschool_certificate','$professional_name','$professional_start','$professional_finish','$professional_certificate', '$language1', '$speak1','$write1','$read1', '$language2','$speak2','$write2','$read2', '$language3', '$speak3','$write3','$read3')";

$sql_4= "INSERT INTO `employment_details`(`user_id`, `Prev_organisation1`, `Job_title1`, `Job_description1`, `Job_entry1`, `Job_exit1`, `Salary_on_entry1`, `Salary_on_exit1`, `Allowance_on_entry1`, `Allowance_on_exit1`, `Reason_for_leave1`, `Prev_organisation2`, `Job_title2`, `Job_description2`, `Job_entry2`, `Job_exit2`, `Salary_on_entry2`, `Salary_on_exit2`, `Allowance_on_entry2`, `Allowance_on_exit2`, `Reason_for_leave2`, `Prev_organisation3`, `Job_title3`, `Job_description3`, `Job_entry3`, `Job_exit3`, `Salary_on_entry3`, `Salary_on_exit3`, `Allowance_on_entry3`, `Allowance_on_exit3`, `Reason_for_leave3`, `Referee1`, `RefereeDesignation1`, `RefereeAddress1`, `RefereeNumber1`, `Referee2`, `RefereeDesignation2`, `RefereeAddress2`, `RefereeNumber2`, `Referee3`, `RefereeDesignation3`, `RefereeAddress3`, `RefereeNumber3`, `Agreement`) VALUES ('$staff_id' , '$prevjoborg1','$prevjobtitle1','$prevjobduty1',' $prevdate_start1', '$prevdate_finish1','$prevsalary_start1',' $prevsalary_finish1',' $prevallowance_start1','$prevallowance_finish1','$leave_reason1', '$prevjoborg2','$prevjobtitle2','$prevjobduty2',' $prevdate_start2','$prevdate_finish2','$prevsalary_start2','$prevsalary_finish2', '$prevallowance_start2','$prevallowance_finish2','$leave_reason2',' $prevjoborg3','$prevjobtitle3','$prevjobduty3',' $prevdate_start3', '$prevdate_finish3','$prevsalary_start3',' $prevsalary_finish3',' $prevallowance_start3','$prevallowance_finish3','$leave_reason3', '$p_refreename','$p_refreedesignation','$p_refreeaddress',' $p_refreenumber','$a_refreename','$a_refreedesignation','$a_refreeaddress', '$a_refreenumber','$pr_refreename','$pr_refreedesignation','$pr_refreeaddress',' $pr_refreenumber','$agreement')";




$result1= mysqli_query($conn, $sql_1);
$result2= mysqli_query($conn, $sql_2);
$result3= mysqli_query($conn, $sql_3);
$result4= mysqli_query($conn, $sql_4);

//$id = mysqli_insert_id($conn);

if($result1){

    $result2; $result3; $result4;
    session_start();
    $_SESSION['user_id'] = $staff_id;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
   
 }



if($result2 ){
    ?>
        <script>
        alert('Records Added Successfully');
        </script>
    <?php
    header('location: login_registration.php');
} else{
    echo " ERROR: Could not able to execute  " . mysqli_error($conn);

}

      
        
 }


     
    


?>

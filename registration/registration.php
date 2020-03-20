
<!DOCTYPE html>
<html>
<head>
<title>CBC e-Portal</title>
  
  <link rel="stylesheet" type="text/css"  href= "../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href= "../css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

  <script type="text/javascript" src='../js/jquery.js'></script>
  <script type="text/javascript" src='../js/script.js'></script>
  <link id="favicon" rel="shortcut icon" href="../images/emea.png" type="image/png" />
</head>
<body>
<div class="logo"><img src="../images/emea.png" class="emea"></div>

     
<header><h1 align="center">Employee Profile Registration Form</h1></header>



           
<form action="upload.php" method="post" class="container" enctype="multipart/form-data">

   <!-- Personal Information page --> 
<div id="personal">
    <p><h3>PERSONAL INFORMATION </h3></p>
    <div class="row">


        <div class="col-md-3">
        <label>Last Name:</label><input type="text" class="form-control" name="lastname" required>
        </div>
                    
        <div class="col-md-3">
        <label>First Name:</label><input type="text" class="form-control" name="firstname" required>
        </div>
        
        <div class="col-md-3">
        <label>Other Name:</label><input type="text" class="form-control" name="othername" required><br>
        </div>
        
        <div class="col-md-3">
        <label>Maiden Name (if applicable):</label><input type="text" class="form-control" name="maidenname"><br>
        </div>

    </div>

    <div class="row">

        <div class="col-md-3">
        <label>Date of Birth:</label><input type="date" class="form-control" name="dob" required>
        </div>

        <div class="col-md-3">
        <label>Nationality:</label><input type="text" class="form-control" name="nationality" required>
        </div>
        
        <div class="col-md-3">
        <label>State Of Origin:</label><input type="text" class="form-control" name="state" required>
        </div>

        <div class="col-md-3">
        <label>Telephone No:</label><input type="number" class="form-control" name="telephone" minlength="11">
        </div>

    </div>
    <br>

    <div class="row">

        <div class="col-md-3">
        <label>Title:</label><input type="radio" name="title" value="mr" checked>Mr
                             <input type="radio" name="title" value="mrs">Mrs
                             <input type="radio" name="title" value="miss">Miss
                             <input type="radio" name="title" value="ms">Ms
        </div>

        <div class="col-md-3">
        <label>Religion:</label><input type="radio" name="religion" value="christianity" checked>Christianity
                                <input type="radio" name="religion" value="islam">Islam
                                <input type="radio" name="religion" value="others">Others
        </div>

        
        
        <div class="col-md-4"><label>Marital Status:</label><input type="radio" name="maritalstatus" value="single" checked>Single
                                      <input type="radio" name="maritalstatus" value="married">Married
                                      <input type="radio" name="maritalstatus" value="divorced">Divorced
                                      <input type="radio" name="maritalstatus" value="widowed">Widowed
        </div>

    </div>

    <br>


    <div class="row">

        <div class="col-md-3">
        <label>Marriage Date:</label><input type="date" class="form-control" name="marriagedate">
        </div>

        <div class="col-md-3">
        <label>Spouse Name:</label><input type="text" class="form-control" name="spousename">
        </div>
        
        <div class="col-md-3">
        <label>Nationality Of Spouse:</label><input type="text" class="form-control" name="spousenat">
        </div>

        <div class="col-md-3">
        <label>Spouse Profession:</label><input type="text" class="form-control" name="spousepro">
        </div>

    </div>
    <br>


    <div class="row">

        
        <div class="col-md-5">
        <label>Residential/Postal Address:</label><input type="text" class="form-control" name="address">
        </div>

        <div class="col-md-3">
        <label>Passport Photograph:</label>
        <input id="file" name="image" type="file">
        </div>

        <div class="col-md-3">
        <label>Subsidiary:</label>
            <select name="subsidiary" class="form-control">
                <option>CBC INFRASTRUCTURE</option>
                <option>GEDU TECHNOLOGIES</option>
                <option>CBC ENERGY</option>
                <option>CBC SURVEILLANCE</option>
                <option>CBC PROPERTIES</option>
                <option>CBC NETCOMMS</option>
                <option>ADMINISTRATION / H.R.</option>
            </select>
        </div>



    </div>

        
        <br>

    <div class="row">

        <div class="col-md-2">
        <label>Staff ID No:</label><input type="number" class="form-control" name="staff_id">
        </div>

        <div class="col-md-3">
        <label>Date Of Employment:</label><input type="date" class="form-control" name="employmentdate">
        </div>

        <div class="col-md-3">
        <label>Email Address:</label><input type="email" class="form-control" name="email">
        </div>

        <div class="col-md-3">
        <label>Post Code:</label><input type="number" class="form-control" name="postalcode">
        </div>
        <br>

    </div>

        

    <div class="row">

        <div class="col-md-3">
        <label>Next of Kin</label><input type="text" class="form-control" name="nextofkin">
        </div>

    

        <div class="col-md-3">
        <label>Next of Kin's Address</label><input type="text" class="form-control" name="kinaddress">
        </div>

        <div class="col-md-3">
        <label>Relationship</label><input type="text" class="form-control" name="kinrelationship">
        </div>

    </div>
    <br>
    <a href="#family" name="next1" class="btn btn-info" id="next1">Next Page <span class="glyphicon glyphicon-forward"></span></a>
    <br>

</div>

        
<!-- Family details page -->
<div id="family">
    <div class="row" id="dependant1">

        <h3>DEPENDANTS</h3>

                 <div class="col-md-3">
                 <label>1. Dependants Full Name</label><input type="text" class="form-control" name="dependantname1">
                 </div>

                <div class="col-md-3">
                <label>Date of Birth:</label><input type="date" class="form-control" name="dependantdob1">
                </div>
             
                <div class="col-md-3">
                <label>Address</label><input type="text" class="form-control" name="dependantaddress1">
                </div>

                <div class="col-md-3">
                <label>Phone No</label><input type="number" class="form-control" name="dependantphone1">
                </div>

              
    </div>

    <div class="row">
        <div class="col-md-1"><a href="#dependant1" class="btn btn-default" id="add_dependant2">&#43; Add</a></div>
        <br>
    </div>

    

    <div class="row" id="dependant2">  

            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-1"><a href="#dependant1" class="btn btn-default" id="remove_dependant2">&#215; Remove</a></div>
            </div>          

                <div class="col-md-3">
                <label>2. Dependants Full Name</label><input type="text" class="form-control" name="dependantname2">
                </div>

                <div class="col-md-3">
                <label>Date of Birth:</label><input type="date" class="form-control" name="dependantdob2">
                </div>

                <div class="col-md-3">
                <label>Address</label><input type="text" class="form-control" name="dependantaddress2">
                </div>

                <div class="col-md-3">
                <label>Phone No</label><input type="number" class="form-control" name="dependantphone2">
                </div>


        <div class="row">
            <div class="col-md-1"><a href="#dependant1" class="btn btn-default" id="add_dependant3">&#43; Add</a></div>
        </div>
        <br>
    </div>


    <div class="row" id="dependant3"> 

            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-1"><a href="#dependant1" class="btn btn-default" id="remove_dependant3">&#215; Remove</a></div>
            </div>            

                <div class="col-md-3">
                <label>3. Dependants Full Name</label><input type="text" class="form-control" name="dependantname3">
                </div>

                <div class="col-md-3">
                <label>Date of Birth</label><input type="date" class="form-control" name="dependantdob3">
                </div>

                <div class="col-md-3">
                <label>Address</label><input type="text" class="form-control" name="dependantaddress3">
                </div>

                <div class="col-md-3">
                <label>Phone No</label><input type="number" class="form-control" name="dependantphone3">
                </div>

    </div>
    
    <br>

    <div class="row">

            <div class="col-md-3">
            <label>Hobbies</label><input type="text" class="form-control" name="hobbies">
            </div>
              <br>

            <div class="col-md-3">
            <label>Have you ever been convicted?</label><input type="radio" name="conviction" value="yes" checked>Yes
                                                        <input type="radio" name="conviction" value="no">No
            </div>

            <div class="col-md-3">
            <label>If Yes, please specify</label><input type="text" class="form-control" name="convictionreason">
            </div>
    </div>

    <br>

    <div class="row">

            <div class="col-md-4">
            <label>Do you have any relatives in CBCemea ? </label><input name="cbcrelative" type="radio" value="yes">Yes
                                                                <input name="cbcrelative" type="radio" value="no" checked>No
            </div>
    </div>

    <br>

    <div class="row">
            
            <p><label>If yes please give details below:</label></p>

            <div class="col-md-3">
            <label>Relative's Name</label><input type="text" class="form-control" name="cbcrelative_name">
            </div>

            <div class="col-md-3">
            <label>Relationship</label><input type="text" class="form-control" name="cbcrelative_relationship">
            </div>
    </div>

    <br>

    <div class="row" id="familymember1">
            
            <h3> FAMILY DETAILS</h3>
                
              <div class="col-md-4">
              <label>1. Family Member's Name</label><input type="text" class="form-control" name="familymember_name1">
              </div>

              <div class="col-md-4">
              <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship1">
              </div>

              <div class="col-md-4">
              <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob1">
              </div>

    </div>

    <div class="row">
        <div class="col-md-1"><a href="#familymember1" class="btn btn-default" id="add_familymember2">&#43; Add</a></div>
    </div>
    

    <br>

    <div class="row" id="familymember2">

        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="#familymember1" class="btn btn-default" id="remove_familymember2">&#215; Remove</a></div>
        </div>
            
              <div class="col-md-4">
              <label>2. Family Member's Name</label><input type="text" class="form-control" name="familymember_name2">
              </div>

              <div class="col-md-4">
              <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship2">
              </div>

              <div class="col-md-4">
              <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob2">
              </div>

        <div class="row">
            <div class="col-md-1"><a href="#familymember1" class="btn btn-default" id="add_familymember3">&#43; Add</a></div>
        </div>

        <br>
    </div>

    

    <div class="row" id="familymember3">

        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="#familymember1" class="btn btn-default" id="remove_familymember3">&#215; Remove</a></div>
        </div>

            
              <div class="col-md-4">
              <label>3. Family Member's Name</label><input type="text" class="form-control" name="familymember_name3">
              </div>

              <div class="col-md-4">
              <label>Relationship</label><input type="text" class="form-control" name="familymember_relationship3">
              </div>

              <div class="col-md-4">
              <label>Date of Birth</label><input type="date" class="form-control" name="familymember_dob3">
              </div>

    </div>

    <br>
    <a href="#personal" name="prev2" class="btn btn-info" id="prev2"><span class="glyphicon glyphicon-backward"></span> Prev Page </a>
    <a href="#education" name="next2" class="btn btn-info" id="next2"> Next Page <span class="glyphicon glyphicon-forward"></span></a>

</div>

    <br>
<!-- Educational details page -->
<div id="education">
    <div class="row">
          <h3> EDUCATIONAL/PROFESSIONAL DETAILS</h3>
                    <div class="col-md-2"></div>
                    <div class="col-md-3"><label>Institution</label></div>
                    <div class="col-md-2"><label>Date (From)</label></div>
                    <div class="col-md-2"><label>Date (To)</label></div>
                    <div class="col-md-2"><label>Certificate/Qualifying Grade</label></div>
    </div>
    <div class="row">
                    <div class="col-md-2"><label>College/University/ Polytechnic</label></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="college_name"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="college_start"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="college_finish"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="college_certificate"></div>
    </div>

    <div class="row">
                    <div class="col-md-2"><label>Secondary/Technical School</label></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="highschool_name"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="highschool_start"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="highschool_finish"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="highschool_certificate"></div>
    </div>

    <div class="row">
                    <div class="col-md-2"><label>Professional Certifications</label></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="professional_name"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="professional_start"></div>
                    <div class="col-md-2"><input type="date" class="form-control" name="professional_finish"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="professional_certificate"></div>
    </div>
<br>

    <div class="row">
        
            
            <h3>LANGUAGE PROFICIENCY (Select appropriate Options)</h3>

              
                    <div class="col-md-2"><label>Language</label></div>
                    <div class="col-md-2"><label>Speaking</label></div>
                    <div class="col-md-2"><label>Writing</label></div>
                    <div class="col-md-2"><label>Reading</label></div>
               
    </div>

    <div class="row">

                    <div class="col-md-2"><input type="text" class="form-control" name="language1"></div>

                    <div class="col-md-2"><select class="form-control" name="speak1">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select> 
                    </div>

                    <div class="col-md-2"><select class="form-control" name="write1">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>

                    <div class="col-md-2"><select class="form-control" name="read1">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>
    </div>

    <div class="row">
                    <div class="col-md-2"><input type="text" class="form-control" name="language2"></div>

                    <div class="col-md-2"><select class="form-control" name="speak2">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select> 
                    </div>

                    <div class="col-md-2"><select class="form-control" name="write2">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>

                    <div class="col-md-2"><select class="form-control" name="read2">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>
    </div>

    <div class="row">
                    <div class="col-md-2"><input type="text" class="form-control" name="language3"></div>

                        <div class="col-md-2"><select class="form-control" name="speak3">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select> 
                    </div>

                    <div class="col-md-2"><select class="form-control" name="write3">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>

                    <div class="col-md-2"><select class="form-control" name="read3">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        </select>  
                    </div>
    </div>

<br>
    <div id="employer1"><div class="row">

            <h3>PREVIOUS EMPLOYMENT DETAILS</h3>
                  <p><label>List previous employment details, starting from the most recently held position.</label></p>

                  <h3>Employer:1</h3>

                  <div class="col-md-3"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg1"></div>
                  <div class="col-md-3"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle1"></div>
                  <div class="col-md-3"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty1"></div>
    </div>

    <div class="row">
                  <div class="col-md-2"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start1"></div> 
                  <div class="col-md-2"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish1"></div>
                  <div class="col-md-2"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start1" placeholder="(naira)"></div>
                  <div class="col-md-2"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish1" placeholder="(naira)"></div>
    </div>

    <div class="row">
                  <div class="col-md-3"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start1" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish1" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason1"></div>
    </div></div>

    <div class="row">
        <div class="col-md-1"><a href="#employer1" class="btn btn-default" id="add_employer2">&#43; Add</a></div>
    </div>

    <br>
    <div id="employer2"><div class="row">

        <div class="row">
            <div class="col-md-9"><h3>Employer:2</h3></div>
            <div class="col-md-1"><a href="#employer1" class="btn btn-default" id="remove_employer2">&#215; Remove</a></div>
        </div>

                  <div class="col-md-3"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg2"></div>
                  <div class="col-md-3"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle2"></div>
                  <div class="col-md-3"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty2"></div>
    </div>

    <div class="row">
                  <div class="col-md-2"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start2"></div> 
                  <div class="col-md-2"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish2"></div>
                  <div class="col-md-2"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start2" placeholder="(naira)"></div>
                  <div class="col-md-2"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish2" placeholder="(naira)"></div>
    </div>

    <div class="row">
                  <div class="col-md-3"><label>Other Allowances (Start):</label><input type ="text" class="form-control" name="prevallowance_start2" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Other Allowances (Final):</label><input type ="text" class="form-control" name="prevallowance_finish2" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason2"></div>
    </div>

    <div class="row">
        <div class="col-md-1"><a href="#employer2" class="btn btn-default" id="add_employer3">&#43; Add</a></div>
    </div>

    </div>

    <br>
    <div id="employer3"><div class="row">
            <div class="row">
                <div class="col-md-9"><h3>Employer:3</h3></div>
                <div class="col-md-1"><a href="#employer1" class="btn btn-default" id="remove_employer3">&#215; Remove</a></div>
            </div>

                  <div class="col-md-3"><label>Organisation:</label><input type="text" class="form-control" name="prevjoborg3"></div>
                  <div class="col-md-3"><label>Position Held:</label><input type="text" class="form-control" name="prevjobtitle3"></div>
                  <div class="col-md-3"><label>Job Responsibilities:</label><input type="text" class="form-control" name="prevjobduty3"></div>
    </div>

    <div class="row">
                  <div class="col-md-2"><label>Date Employed (From):</label><input type="date" class="form-control" name="prevdate_start3"></div> 
                  <div class="col-md-2"><label>Date Employed (To):</label> <input type="date" class="form-control" name="prevdate_finish3"></div>
                  <div class="col-md-2"><label>Basic Salary (Start):</label><input type="number" class="form-control" name="prevsalary_start3" placeholder="(naira)"></div>
                  <div class="col-md-2"><label>Basic Salary (Final):</label><input type="number" class="form-control" name="prevsalary_finish3" placeholder="(naira)"></div>
    </div>

    <div class="row">
                  <div class="col-md-3"><label>Other Allowances (Start):</label><input type ="text" class="form-control"name="prevallowance_start3" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Other Allowances (Final):</label><input type ="text" class="form-control"name="prevallowance_finish3" placeholder="(naira)"></div>
                  <div class="col-md-3"><label>Reason(s) For Leaving:</label><input type="text" class="form-control" name="leave_reason3"></div>
    </div></div>
<br>

    <div class="row">
                    
            <h3>REFERENCES</h3>
                
                  <div class="col-md-2"></div>
                  <div class="col-md-2"><label>Name</label></div>
                  <div class="col-md-2"><label>Official Designation</label></div>
                  <div class="col-md-3"><label>Company Address</label></div>
                  <div class="col-md-2"><label>Contact No</label></div>
    </div>
    <div class="row">
                  <div class="col-md-2"><label>Personal Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreename"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="p_refreedesignation"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="p_refreeaddress"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="p_refreenumber"></div>
    </div>
    <div class="row">
                  <div class="col-md-2"><label>Academic Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreename"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="a_refreedesignation"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="a_refreeaddress"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="a_refreenumber"></div>
    </div>
    <div class="row">
                  <div class="col-md-2"><label>Professional Referee</label></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreename"></div>
                  <div class="col-md-2"><input type="text" class="form-control" name="pr_refreedesignation"></div>
                  <div class="col-md-3"><input type="text" class="form-control" name="pr_refreeaddress"></div>
                  <div class="col-md-2"><input type="number" class="form-control" name="pr_refreenumber"></div>
    </div>
    <br>

    <a href="#family" name="prev3" class="btn btn-info" id="prev3"><span class="glyphicon glyphicon-backward"></span> Prev Page </a>
     
           
          <h3>DECLARATION</h3>
         <input type ="checkbox" name="agreement" required>
          <p>I agree that the answers given by me to all the questions of this application are to the best of my knowledge true, correct and without mental reservations of any kind whatsoever & affirm that I have not withheld any facts or circumstances that would detrimentally affect this application.</p>
          <button type="submit" class="btn btn-primary" name ="submit">Submit</button>


</div>



</form>



<br><br>

<script type="text/javascript">
    $(document).ready(function(){

    $("#next1").click(function(){
        $("#personal").css('display','none');
        $("#family").css('display','block');
        $("#education").css('display','none');
    });
    $("#prev2").click(function(){
        $("#personal").css('display','block');
        $("#family").css('display','none');
        $("#education").css('display','none');
    });
    $("#next2").click(function(){
        $("#personal").css('display','none');
        $("#family").css('display','none');
        $("#education").css('display','block');
    });
    $("#prev3").click(function(){
        $("#personal").css('display','none');
        $("#family").css('display','block');
        $("#education").css('display','none');
    });
    
});
</script>
          



</body> 

</html>
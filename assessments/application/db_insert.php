<html>
<head>
<h1 align="center">Student Information</h1>
<title>Student Information</title>
<style type = "text/css">
.button 
{
    text-align : center;
    color : red;
    background : yellow;
    padding : 2px;
}
.error
{
    color : red;
}
</style>
</head>
<?php
error_reporting(1);
require 'db_connect.php';
if (isset($_POST['submit'])) {
    $studentNameError = "please enter name";
    $departmentError = "please enter department";
    $genderError = "please enter gender";
    $Roll_noError = "please enter Roll_no";
    $subject1Error = "please enter subject1";
    $subject2Error = "please enter subject2";
    $subject3Error = "please enter subject3";
    $studentName = $_POST['studentName'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $Roll_no = $_POST['Roll_no'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    if (!empty($_POST['studentName']) && (!empty($_POST['department'])) && (!empty($_POST['gender'])) && (!empty($_POST['Roll_no'])) && (!empty($_POST['subject1'])) && (!empty($_POST['subject2'])) && (!empty($_POST['subject3']))) {
        $insert_query = "INSERT INTO Student1( studentName, Department, Gender, Roll_no, Subject1, Subject2, Subject3, Total, Percentage ) VALUES ( '$studentName', '$department', '$gender', '$Roll_no', '$subject1', '$subject2', '$subject3', '$total', '$percentage' )";
        if (mysqli_query($conn,$insert_query)) {
             echo "record inserted into database successfully";
        } else if (!mysqli_query($conn,$insert_query)) {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    } else {
?>
        <span class="error"><?php echo "Error:please enter the required fields"; ?>      
        </span><?php
    }
} 
mysqli_close($conn);
?>
<body bgcolor="pink">
<form method="post" action="" background="yellow">
<p>Enter your name</p>
Student Name<input type="text" name="studentName"  value="" />
<?php  
if (empty($studentName)) {
    echo $studentNameError;
}  
?>
<br/>
<p>Enter your Department</p>
<select name="department" >
<option value="0">select</option>
<option value="Computer Science">Computer Science</option>
<option value="Electronics">Electronics</option>
<option value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option value="Electrical">Electrical</option>
<option value="Aeronatics">Aeronatics</option>
<option value="Chemical">Chemical</option>
<option value="Metallurgy">Metallurgy</option>
<option value="Medical electronics">Medical electronics</option>
</select>
<?php 
if (empty($department)) {
    echo $departmentError;
}  
?>
<br/>
<p>Enter your gender</p>
<input type="radio" name="gender" value="male" />Male<br />
<input type="radio" name="gender" value="female" />Female<br />
<?php 
if (empty($gender)) {
    echo $genderError;
}  
?>
<br/>
<p>Enter your Roll_no</p>
Roll_no<input type="text" name="Roll_no" value="" />
<?php 
if (empty($Roll_no)) {
    echo $Roll_noError;
}  
?>
<br/>
<p>Enter marks of Subject1</p>
Subject1<input type="text" name="subject1" value="" />
<?php 
if (empty($subject1)) {
    echo $subject1Error;
}  
?>
<br/>
<p>Enter marks of Subject2</p>
Subject2<input type="text" name="subject2" value=""  />
<?php 
if (empty($subject2)) {
    echo $subject2Error;
}
?>
<br/>
<p>Enter marks of Subject3</p>
Subject3<input type="text" name="subject3" value=""  />
<?php 
if (empty($subject3)) {
    echo $subject3Error;
}  
?>
<br/>
<p>Enter total</p>
total<input type="text" name="total" value="" />
<br/>
<p>Enter percentage</p>
percentage<input type="text" name="percentage" value="" />
<br/>
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
</html>

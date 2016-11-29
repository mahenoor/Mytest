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
    font : bold;
}
</style>
</head>
<?php
error_reporting(1);
require 'db_connect.php';
if (isset($_POST['submit'])) {
    $studentName = $_POST['studentName'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $Roll_no = $_POST['Roll_no'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $studentName = $_POST['studentName'];
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    $value = true;
    if(empty($studentName)) {
       $studentNameError = "plz enter name";
       $value = false; 
    } 
    if(empty($department)) {
        $departmentError = "plz enter dept";
        $value = false; 
    } 
    if(empty($gender)) {
        $genderError = "plz enter gender";
       $value = false; 
    } 
     if(empty( $Roll_no)) {
        $Roll_noError = "plz enter roll_no";
        $value = false; 
    } 
     if(empty($subject1)) {
        $subject1Error = "plz enter subject1";
        $value = false; 
    } 
     if(empty( $subject2)) {
        $subject2Error = "plz enter subject2";
       $value = false; 
    } 
     if(empty( $subject3)) {
        $subject3Error = "plz enter subject3";
        $value = false; 
    } 
    if($value) {
        $insert_query = "INSERT INTO Student1( studentName, Department, Gender, Roll_no, Subject1, Subject2, Subject3, Total, Percentage ) VALUES ( '$studentName', '$department', '$gender', '$Roll_no', '$subject1', '$subject2', '$subject3', '$total', '$percentage' )";
        if (mysqli_query($conn,$insert_query)) {
             echo "record inserted into database successfully";
        } else if (!mysqli_query($conn,$insert_query)) {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    } else {
?>
        <span class="error"><?php echo "Error:please enter the required fields"; ?></span>
<?php
    }
} 
mysqli_close($conn);
?>
<body bgcolor="pink">
<form method="post" action="" >
<table>
<tr>
<td><label>Student Name</label></td>
<td><input type="text" name="studentName"  value="<?php if(!empty($_POST['studentName'])) echo $_POST['studentName'] ?> "/>
<?php  
if (empty($studentName)) {
   echo $studentNameError;
   $value = false;
}  
?>
</td>
</tr>
<br/>
<tr>
<td><label>Enter your Department</label></td>
<td><select name="department" >
<option value="0">select</option>
<option <?php if ($department == 'Computer Science') { ?> selected <?php } ?> value="Computer Science ">Computer Science</option>
<option <?php if ($department == 'Electronics') { ?> selected <?php } ?> value="Electronics">Electronics</option>
<option <?php if ($department == 'Mechanical') { ?> selected <?php } ?> value="Mechanical">Mechanical</option>
<option <?php if ($department == 'Civil') { ?> selected <?php } ?> value="Civil">Civil</option>
<option <?php if ($department == 'Electrical') { ?> selected <?php } ?> value="Electrical">Electrical</option>
<option <?php if ($department == 'Aeronatics') { ?> selected <?php } ?> value="Aeronatics">Aeronatics</option>
<option <?php if ($department == 'Chemical') { ?> selected <?php } ?> value="Chemical">Chemical</option>
<option <?php if ($department == 'Metallurgy') { ?> selected <?php } ?> value="Metallurgy">Metallurgy</option>
<option <?php if ($department == 'Medical electronics') { ?> selected <?php } ?> value="Medical electronics">Medical electronics</option>
</select>
<?php 
if (empty($department)) {
    echo $departmentError;
    $value = false;
}  
?>
</td>
</tr>
<br/>
<tr>
<td><label>Gender</label></td>
<td><input type="radio" <?php if($gender == "male") { echo "checked"; } ?>  name="gender" value="male" />Male<br />
<input type="radio" <?php if($gender == "female") echo "checked" ?> name="gender" value="female" />Female<br />
<?php 
if (empty($gender)) {
    echo $genderError;
    $value = false;
}  
?>
</td>
</tr>
<br/>
<tr>
<td><label>Enter your Roll_no</label></td>
<td><input type="text" name="Roll_no" value="<?php if(!empty($_POST['Roll_no'])) echo $_POST['Roll_no'] ?>" />
<?php 
if (empty($Roll_no)) {
    echo $Roll_noError;
    $value = false;
}  
?>
</td>
</tr>
<br/>
<tr>
<td><label>Enter marks of Subject1</label></td>
<td><input type="text" name="subject1" value="<?php if(!empty($_POST['subject1'])) echo $_POST['subject1'] ?>" />
<?php 
if (empty($subject1)) {
    echo $subject1Error;
    $value = false;
}
?>
</td>
</tr>
<br/>
<tr>
<td><label>Enter marks of Subject2</label></td>
<td><input type="text" name="subject2" value="<?php if(!empty($_POST['subject2'])) echo $_POST['subject2'] ?>"  />
<?php 
if (empty($subject2)) {
    echo $subject2Error;
    $value = false;
}  
?>
</td>
</tr>
<br/>
<tr>
<td><label>Enter marks of Subject3</label></td>
<td><input type="text" name="subject3" value="<?php if(!empty($_POST['subject3'])) echo $_POST['subject3'] ?>"  />
<?php 
if (empty($subject3)) {
    echo $subject3Error;
    $value = false;
}
?>
</td>
</tr>
<br/>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
</html>



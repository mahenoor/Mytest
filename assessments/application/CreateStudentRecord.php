<?php
require 'config.php';
?>
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
$gender = "";
$department = "";
if (isset($_POST['submit'])) {
    $studentName = $_POST['studentName'];
    $department = $_POST['department'];
    if (!isset($_POST['gender'])) {
        $genderError = "*****please enter gender";
    } else {
        $gender = $_POST['gender'];
    }
    $Roll_no = $_POST['Roll_no'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $studentName = $_POST['studentName'];
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    if (empty($studentName)) {
       $studentNameError = "*****please enter the name";
    } 
    if (empty($department)) {
        $departmentError = "*****please enter dept";
    } 
    if (empty($gender)) {
        $genderError = "*****please enter gender";
    } 
    if (empty($Roll_no)) {
        $Roll_noError = "*****please enter roll_no";
    } 
    if (empty($subject1)) {
        $subject1Error = "*****please enter subject1";
    } 
    if (empty($subject2)) {
        $subject2Error = "*****please enter subject2";
    } 
    if (empty($subject3)) {
        $subject3Error = "*****please enter subject3";
    } 
    if (!empty($studentName) && !empty($department) && !empty($department) && !empty($gender) && !empty($Roll_no) && !empty($subject1) && !empty($subject1) && !empty($subject1)) {
        $insert_query = "INSERT INTO Student( studentName, Department, Gender, Roll_no, Subject1, Subject2, Subject3, Total, Percentage ) VALUES ( '$studentName', '$department', '$gender', '$Roll_no', '$subject1', '$subject2', '$subject3', '$total', '$percentage' )";
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
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="studentName"  value="<?php if(!empty($_POST['studentName'])) echo $_POST['studentName'] ?>" />
<?php  
if (!empty($studentNameError)) {
   echo $studentNameError;
}  
?>
</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
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
if (!empty($departmentError)) {
    echo $departmentError;
}  
?>
</td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" <?php if($gender == "male") { echo "checked"; } ?>  name="gender" value="male" />Male<br />
<input type="radio" <?php if($gender == "female") echo "checked" ?> name="gender" value="female" />Female<br />
<?php 
if (!empty($genderError)) {
    echo $genderError;
}  
?>
</td>
</tr>
<tr>
<td><label>Enter the Roll_no:</label></td>
<td><input type="text" name="Roll_no" value="<?php if(!empty($_POST['Roll_no'])) echo $_POST['Roll_no'] ?>" />
<?php 
if (!empty($Roll_noError)) {
    echo $Roll_noError;
}  
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Subject1:</label></td>
<td><input type="text" name="subject1" value="<?php if(!empty($_POST['subject1'])) echo $_POST['subject1'] ?>" />
<?php 
if (!empty($subject1Error)) {
    echo $subject1Error;
}   
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Subject2:</label></td>
<td><input type="text" name="subject2" value="<?php if(!empty($_POST['subject2'])) echo $_POST['subject2'] ?>"  />
<?php 
if (!empty($subject2Error)) {
    echo $subject2Error;
}  
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Subject3:</label></td>
<td><input type="text" name="subject3" value="<?php if(!empty($_POST['subject3'])) echo $_POST['subject3'] ?>"  />
<?php 
if (!empty($subject3Error)) {
    echo $subject3Error;
}
?>
</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form>
<a href="index.php">Go to index page</a>
</body>
</html>



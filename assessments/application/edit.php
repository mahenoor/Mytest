<?php
require 'config.php';
require 'validation.php';
require 'calculation.php';
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $studentNameError = "";
    $departmentError = "";  
    $genderError = "";
    $Roll_noError = "";
    $subject1Error = "";
    $subject2Error = "";
    $subject3Error = "";
    $errorMessage = "";
    if (isset($_POST['update'])) {
        //on the click of update button if the data entered is valid it will be stored in respective variables
        $studentName = $_POST['studentName'];
        if (!isset($_POST['department'])) {
            $departmentError = "***please enter department";
        } else {
            $department = $_POST['department'];
        }
        if (!isset($_POST['gender'])) {
            $genderError = "***please enter gender";
        } else {
            $gender = $_POST['gender'];
        }
        $Roll_no = $_POST['Roll_no'];
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];
        //object created for Validation class and then the result returned by the Validation() is stored in $ValidationResult 
        $validation = new Validation();
        $ValidationResult = $validation -> validate($_POST);
        //object created for Calculation class and then total and percentage is stored in $total and $percentage variable
        $calculation = new Calculation();
        $total = $calculation->total($_POST['subject1'], $_POST['subject2'], $_POST['subject3']);
        $percentage = $calculation->percentage($_POST['subject1'], $_POST['subject2'], $_POST['subject3']);
        //if all the fields are entered in specified format then the record is stored in db
        if ($ValidationResult['status'] === true) {
            $update_query = "UPDATE Student SET studentName = '$studentName', department = '$department', 
            gender = '$gender', Roll_no = '$Roll_no', subject1 = '$subject1', subject2 = '$subject2', subject3 = '$subject3', total = '$total',  percentage = '$percentage' WHERE id = '$id'"; 
            session_start();
            if (mysqli_query($conn, $update_query)) {
                $_SESSION['success'] = 1;
                header("Location:index.php"); 
                session_end();
            } else if (!mysqli_query($conn, $update_query)) {
                echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
            }
        } else {
            $errorMessage = $ValidationResult['message'];
        }
    } 
} else {
    echo "Error:please obtain the id by linking this file with index.php file";
}
?>
<?php

$view_query = "SELECT * FROM Student where id=$id";
$result = $conn->query($view_query);
$studentData = $result->fetch_assoc();
$studentName = $studentData['studentName']; 
$department = $studentData['Department'];
$gender = $studentData['Gender'];
$Roll_no = $studentData['Roll_no'];
$subject1 = $studentData['Subject1'];
$subject2 = $studentData['Subject2'];
$subject3 = $studentData['Subject3'];
$total = $studentData['Total'];
$percentage = $studentData['Percentage']; 
?>
<html>
<head>
<h1 align="center">Update Information</h1>
<title>Student Information</title>
<style>
.error
{
    color :yellow;
    background : red;
}
</style>
</head>
<body bgcolor="pink">
<form method="post" action="">
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="studentName" value="<?php echo $studentName; ?>" />
<?php 
if (!empty($errorMessage['studentName'])) {
    echo $errorMessage['studentName'];
} else {
    echo '';
}
?> 
</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td><select name="department">
<option disable selected value>select</option>
<option <?php if ($department == 'Computer Science') { ?> selected <?php } ?> value="Computer Science">Computer Science</option>
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
if (!empty($errorMessage['department'])) {
    echo $errorMessage['department']; 
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" <?php if($gender == "male") echo "checked" ?> name="gender" value="male" />Male
<input type="radio" <?php if($gender == "female") echo "checked" ?> name="gender" value="female" />Female
<?php 
if (!empty($errorMessage['gender'])) {
    echo $errorMessage['gender'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Roll_no:</label></td>
<td><input type="text" name="Roll_no" value="<?php echo $Roll_no; ?>" />
<?php 
if (!empty($errorMessage['Roll_no'])) {
    echo $errorMessage['Roll_no'];
} else {
    echo '';
}
?> 
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject1:</label></td>
<td><input type="text" name="subject1" value="<?php echo $subject1; ?>" />
<?php 
if (!empty($errorMessage['subject1'])) {
    echo $errorMessage['subject1'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject2:</label></td>
<td><input type="text" name="subject2" value="<?php echo $subject2; ?>" />
<?php 
if (!empty($errorMessage['subject2'])) {
    echo $errorMessage['subject2'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject3:</label></td>
<td><input type="text" name="subject3" value="<?php echo $subject3; ?>" />
<?php 
if (!empty($errorMessage['subject3'])) {
    echo $errorMessage['subject3'];
} else {
    echo '';
}
?>
</td>
</tr>
</table>
<input type="submit" name="update" value="update" class="error">
</form>
</body>
</html>
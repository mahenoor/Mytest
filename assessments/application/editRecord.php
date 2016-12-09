<?php
require 'dboperations.php';
require 'validation.php';
$id='';
$crudObj = new CRUDOperations();
if (!empty($_GET['id'])) {
	$studentData = $crudObj -> getId($id);
    $studentName = $studentData['studentName']; 
	$department = $studentData['Department'];
	$gender = $studentData['Gender'];
	$Roll_no = $studentData['Roll_no'];
	$subject1 = $studentData['Subject1'];
	$subject2 = $studentData['Subject2'];
	$subject3 = $studentData['Subject3'];
	$total = $studentData['Total'];
	$percentage = $studentData['Percentage'];
}
if($_POST) {
	$validationObject = new Validation();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];
    if($responseOfValidation['status']) {
        $responseOfValidation = $crudObj->editStudentRecord($_POST);
        if($responseOfValidation)
            header('Location:index.php');
    }    
}  
$studentName = '';
$department = '';
$gender = '';
$Roll_no = '';
$subject1 = '';
$subject2 = '';
$subject3 = '';

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
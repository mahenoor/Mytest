<?php
require 'dboperations.php';
require 'validation.php';
if (isset($_POST['submit'])) {
    $crudObj = new CRUDOperations();
    $validationObject = new Validation();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];
    if($responseOfValidation['status']) {
        $responseOfValidation = $crudObj->createStudentRecord($_POST);
        if($responseOfValidation)
            header('Location:index.php');
    }    
}
$department = '';
$gender = '';
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
<body bgcolor="pink">
<form method="post" action="" >
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="studentName"  value="<?php if (!empty($_POST['studentName'])) echo $_POST['studentName'] ?>" />
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
<td><input type="radio" <?php if ($gender == "male") { echo "checked"; } ?>  name="gender" value="male" />Male<br />
<input type="radio" <?php if ($gender == "female") echo "checked" ?> name="gender" value="female" />Female<br />
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
<td><input type="text" name="Roll_no" value="<?php if (!empty($_POST['Roll_no'])) echo $_POST['Roll_no'] ?>" />
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
<td><label>Enter marks of Subject1:</label></td>
<td><input type="text" name="subject1" value="<?php if (!empty($_POST['subject1'])) echo $_POST['subject1'] ?>" />
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
<td><label>Enter marks of Subject2:</label></td>
<td><input type="text" name="subject2" value="<?php if (!empty($_POST['subject2'])) echo $_POST['subject2'] ?>"  />
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
<td><label>Enter marks of Subject3:</label></td>
<td><input type="text" name="subject3" value="<?php if (!empty($_POST['subject3'])) echo $_POST['subject3'] ?>"  />
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
<input type="submit" name="submit" value="submit" class="button" />
<a href="index.php">Go to index page</a></form>
</body>
</html>
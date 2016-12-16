<?php
require 'crudoperations.php';
require 'validatingLeave.php';
//$studentId = $_GET['id'];
if (isset($_POST['submit'])) {
    $crudObj = new CrudOperations();
    $validationObject = new ValidatingLeave();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];

    if ($responseOfValidation['status']) {
        $responseOfValidation = $crudObj->studentLeave($_POST, $_GET['id']);
    }
    if ($responseOfValidation === true) {
        header("Location:index.php");
    }
}
?>
<html>
<head>
<h1 align="center">Attendance eligibility to appear for the exam</h1>
<title>Attendance eligibility to appear for the exam</title>
<style type = "text/css">
.button 
{
    text-align : center;
    color : purple;
    background : red;
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
<td><label>Enter the start date:</label></td>
<td><input type="date" name="startDate" value="<?php if (!empty($_POST['startDate'])) echo $_POST['startDate'] ?>" >
<?php 
if (!empty($errorMessage['startDate'])) {
    echo $errorMessage['startDate'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the end date:</label></td>
<td><input type="date" name="endDate" value="<?php if (!empty($_POST['endDate'])) echo $_POST['endDate'] ?>" >
<?php 
if (!empty($errorMessage['endDate'])) {
    echo $errorMessage['endDate'];
} else {
    echo '';
}
?>
</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form></body></html>
<a href="indexOfLeave.php">view the studentLeave db</a>



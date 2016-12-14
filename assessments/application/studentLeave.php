<?php
require 'crudoperations.php';
require 'validatingeligibility.php';
if (isset($_POST['submit'])) {
    $crudObj = new CrudOperations();
    $validationObject = new ValidatingEligibility();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];
    if ($responseOfValidation['status']) {
            $responseOfValidation = $crudObj->studentLeave($_POST);
    }
    if ($responseOfValidation) {
        header('Location:index.php');
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
<td><input type="date" name="startDate" value="">
</td>
</tr>
<tr>
<td><label>Enter the end date:</label></td>
<td><input type="date" name="endDate" value="">
</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form></body></html>

<?php
require 'crudoperations.php';
require 'validatingLeave.php';
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
/*if(isset($_POST['noOfDays'])) {
    $crudObj = new CrudOperations();
    $calculation = new Calculation();
    $studentLeave = $calculation->studentLeave($inputData['startDate'], $inputData['endDate']);
}*/
?>
<html>
<head>
<script>
function myFunction(){
  var dat1 = document.getElementById('form').value;
                var date1 = new Date(dat1)//converts string to date object
                alert(date1);
                var dat2 = document.getElementById('inputFinishDate').value;
                var date2 = new Date(dat2)
                alert(date2);

                var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
                var diffDays = Math.abs((date1.getTime() - date2.getTime()) / (oneDay));
                alert(diffDays);</script>
}
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
<form id="form" method="post" action="" >
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
<input type="submit" name="submit" value="noOfDays" class="button">

</form></body>
<a href="index.php">Go to index page</a>
</html>



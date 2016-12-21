<?php
require 'crudoperations.php'; 
if (!empty($_GET['id'])) {
	$crudObj = new CrudOperations();
	$studentData = $crudObj->readRecord($_GET['id']);
	$startDate = $studentData['startDate'];
	$endDate = $studentData['endDate'];
	$studentLeave = $studentData['studentLeave'];
	$responseOfStudentLeave = $crudObj-> editStudentLeaveRecord($_POST, $_GET['id']);
    if ($responseOfStudentLeave === true) {
        header('Location:index.php');
	}
}
?>
<html>
<head>
<h1 align="center">Update Information</h1>
<title>Student Information</title>
<style>
.button
{
    color :yellow;
    background : red;
}
</style>
</head>
<body bgcolor="pink">
<form method="post" name="form" id="form" action="">
<table border=3 width=40%>
<tr>
<th>Enter the Start date of leave</th>
<td><input type="text" name="startDate" value="<?php echo $startDate; ?>"/>
</td>
</tr>
<tr>
<th>Enter the End date of leave</th>
<td><input type="text" name="endDate" value="<?php echo $endDate; ?>" />
</td>
</tr
<th>Numbers of days the student will be on leave</th>
<td><input type="text" name="studentLeave" id="leave" value="<?php echo $studentLeave; ?>"/>
</td>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
<a href="index.php">Go to index page</a>
</html>


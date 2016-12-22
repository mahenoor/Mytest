<?php
require "crudoperations.php";
if (!empty($_GET['id'])) {
    $crudObj = new CrudOperations();
    $studentData = $crudObj->readRecord($_GET['id']);
	$studentName = $studentData['studentName'];
	$Department = $studentData['Department'];
	$Gender = $studentData['Gender'];
	$Roll_no = $studentData['Roll_no'];
	$Physics = $studentData['Physics'];
	$Chemistry = $studentData['Chemistry'];
	$Maths = $studentData['Maths'];
	$Total = $studentData['Total'];
	$Percentage = $studentData['Percentage'];
	$studentLeaveData = $crudObj->readRecordOfIndividualStudent($_GET['id']);
}
?>
<html>
<head>
<h3 align=center>Student Details</h1>
</head>
<body bgcolor = "sky blue">
<table width=80% border=3>
<tr>
<th>Student Name</th>
<th>Department</th>
<th>Gender</th>
<th>Roll_no</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Maths</th>
<th>Total</th>
<th>Percentage</th>
</tr>
<tr>
<td><?php echo $studentName ?></td>
<td><?php echo $Department ?></td>
<td><?php echo $Gender ?></td>
<td><?php echo $Roll_no ?></td>
<td><?php echo $Physics ?></td>
<td><?php echo $Chemistry ?></td>
<td><?php echo $Maths ?></td>
<td><?php echo $Total ?></td>
<td><?php echo $Percentage ?></td>
</tr>
</table>
<h3 align=center>Student Leave table</h3>
<table width=80% border=3>
<tr>
<th>Start Date</th>
<th>End Date</th>
<th>Student Leave</th>
</tr>
<?php
foreach ($studentLeaveData as $studentLeaveRecords) {
?>
	<tr>
	<td><?php echo $studentLeaveRecords['startDate'] ?></td>
	<td><?php echo $studentLeaveRecords['endDate'] ?></td>
	<td><?php echo $studentLeaveRecords['studentLeave'] ?></td>
	</tr>
<?php
}
?>
</table>
</body>
<a href="index.php">Go to index page</a>
</html>

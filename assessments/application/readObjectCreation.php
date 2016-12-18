<?php
require "crudoperations.php";
//require "studentLeave.php";
if (!empty($_GET['id'])) {
    $crudObj = new CrudOperations();
    $studentData = $crudObj->readRecord($_GET['id']);
    $input = $studentData['studentName'];
	$input = $studentData['Department'];
	$input = $studentData['Gender'];
	$input = $studentData['Roll_no'];
	$input = $studentData['Physics'];
	$input= $studentData['Chemistry'];
	$input= $studentData['Maths'];
	$input = $studentData['Total'];
	$input = $studentData['Percentage'];
	$input = $studentData['startDate'];
	$input= $studentData['endDate'];
	$input =$studentData['studentLeave'];
}
?>
<html>
<body bgcolor = "sky blue">
<table>
<tr>
<th>Student Name</th>
<th>Department</th>
<th>gender</th>
<th>Roll_no</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Maths</th>
<th>Total</th>
<th>Percentage</th>
<th>startDate</th>
<th>endDate</th>
<th>studentLeave</th>
</tr>
<tr>
<td><?php echo $studentData['studentName'] ?></td>
<td><?php echo $studentData['Department']?></td>
<td><?php echo $studentData['Gender'] ?></td>
<td><?php echo $studentData['Roll_no'] ?></td>
<td><?php echo $studentData['Physics'] ?></td>
<td><?php echo $studentData['Chemistry'] ?></td>
<td><?php echo $studentData['Maths'] ?></td>
<td><?php echo $studentData['Total'] ?></td>
<td><?php echo $studentData['Percentage'] ?></td>
<td><?php echo $studentData['startDate'] ?></td>
<td><?php echo $studentData['endDate'] ?></td>
<td><?php echo $studentData['studentLeave'] ?></td>
</tr>
</table>
</body>
</html>
<a href="index.php">Go to index page</a>
<?php
require "dboperations.php";
if (!empty($_GET['id'])) {
    $crudObj = new CRUDOperations();
    $studentData = $crudObj->readRecord($_GET['id']);
    $studentName = $studentData['studentName'];
	$Department = $studentData['Department'];
	$Gender = $studentData['Gender'];
	$Roll_no = $studentData['Roll_no'];
	$Physics = $studentData['Physics'];
	$Chemistry= $studentData['Chemistry'];
	$Maths = $studentData['Maths'];
	$Total = $studentData['Total'];
	$Percentage = $studentData['Percentage'];
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
</body>
</html>
<?php
require "dboperations.php";
if (!empty($_GET['id'])) {
    $readObj = new CRUDOperations();
    $studentData = $readObj->ReadRecord($_GET['id']);
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
?>
<body bgcolor = "blue">
		<table>
		<tr>
		<th>Student Name</th>
		<th>Department</th>
		<th>gender</th>
		<th>Roll_no</th>
		<th>Subject1</th>
		<th>Subject2</th>
		<th>Subject3</th>
		<th>Total</th>
		<th>Percentage</th>
		</tr>
		<tr>
		<td><?php echo $studentName ?></td>
		<td><?php echo $department ?></td>
		<td><?php echo $gender ?></td>
		<td><?php echo $Roll_no ?></td>
		<td><?php echo $subject1 ?></td>
		<td><?php echo $subject2 ?></td>
		<td><?php echo $subject3 ?></td>
		<td><?php echo $total ?></td>
		<td><?php echo $percentage ?></td>
		</tr>
		</table>
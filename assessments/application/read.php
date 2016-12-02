<?php
require 'config.php';
$id = $_GET['id'];
$read_query = "SELECT * FROM Student where id=$id";
$result = $conn->query($read_query);
$studentData = $result->fetch_assoc();
$studentName = $studentData['studentName'];
$department = $studentData['Department'];
$gender = $studentData['Gender'];
$Roll_no = $studentData['Roll_no'];
$subject1 = $studentData['Subject1'];
$subject2 = $studentData['Subject2'];
$subject3 = $studentData['Subject3'];
$total = $studentData['Total'];
$percentage = $studentData['Percentage'];
?>
<html>
<head>
<h1 align="center">Reading the record</h1>
</head>
<body bgcolor="#DDA0DD">
<table width="8%" border="3">
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
<br />
<a href="index.php">Back to index page</a>
</body>
</html>




  

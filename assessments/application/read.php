<?php
require 'db_connect.php';
$id = $_GET['id'];
$read_query = "SELECT * FROM Student1 where id=$id";
$result = $conn->query($read_query);
$row = $result->fetch_assoc();
$studentName = $row['studentName'];
$department = $row['Department'];
$gender = $row['Gender'];
$Roll_no = $row['Roll_no'];
$subject1 = $row['Subject1'];
$subject2 = $row['Subject2'];
$subject3 = $row['Subject3'];
$total = $row['Total'];
$percentage = $row['Percentage'];
?>
<html>
<head>
<h1 align="center">Reading the record</h1>
</head>
<body bgcolor="pink">
<table width="8%" border="3">
<tr>
<th>Student Name</th>
<th>Department</th>
<th>gender</th>
<th>Roll_no</th>
<th>Subject1</th>
<th>Subject2</th>
<th>Subject3</th>
</tr>
<tr>
<td><?php echo $studentName ?></td>
<td><?php echo $department ?></td>
<td><?php echo $gender ?></td>
<td><?php echo $Roll_no ?></td>
<td><?php echo $subject1 ?></td>
<td><?php echo $subject2 ?></td>
<td><?php echo $subject3 ?></td>
</tr>
</table>
</body>




  
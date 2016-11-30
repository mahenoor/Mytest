<?php
require 'config.php';
$id = $_GET['id'];
$read_query = "SELECT * FROM Student where id=$id";
$result = $conn->query($read_query);
$data = $result->fetch_assoc();
$studentName = $data['studentName'];
$department = $data['Department'];
$gender = $data['Gender'];
$Roll_no = $data['Roll_no'];
$subject1 = $data['Subject1'];
$subject2 = $data['Subject2'];
$subject3 = $data['Subject3'];
$total = $data['Total'];
$percentage = $data['Percentage'];
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
<br />
<a href="index.php">Back to index page</a>
</body>
</html>




  

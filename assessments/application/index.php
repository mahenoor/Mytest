<?php
?> 
<html>
<body bgcolor="#7FFFD4">
<table align="center" width="90%" border="5">
<tr>
<th>id</th>
<th>studentName</th>
<th>Department</th>
<th>Gender</th>
<th>Roll_no</th>
<th>Physics</th>
<th>Chemistry</th>
<th>Maths</th>
<th>Total</th>
<th>Percentage</th>
<th>CRUD</th>
</tr>
<?php
foreach ($studentRecords as $studentData) {
?>
    <tr>
    <td><?php echo $studentData["id"] ?></td>
    <td><?php echo $studentData["studentName"] ?></td>
    <td><?php echo $studentData["Department"] ?></td>
    <td><?php echo $studentData["Gender"] ?></td>
    <td><?php echo $studentData["Roll_no"] ?></td>
    <td><?php echo $studentData["Physics"] ?></td>
    <td><?php echo $studentData["Chemistry"] ?></td>
    <td><?php echo $studentData["Maths"] ?></td>
    <td><?php echo $studentData["Total"] ?></td>
    <td><?php echo $studentData["Percentage"] ?></td>
    <td width=250>
    <a href="studentRecordController.php?action=readRecord&id=<?php echo $studentData['id']  ?>">Read</a>
    <a href="studentRecordController.php?action=edit&id=<?php echo $studentData['id']  ?>">Edit</a>
    <a href="studentRecordController.php?action=delete&id=<?php echo $studentData['id']  ?>">Delete</a>
    <a href="studentRecordController.php?action=studentLeave&id=<?php echo $studentData['id']  ?>">Leave</a>
    </td>
    </tr>
<?php
}
?>
</table>
<br />
<a href="studentRecordController.php?action=createStudentRecord_view">Insert a new student record</a>
<br />
<a href="studentRecordController.php?action=viewRecordsOfLeaveTable">View the studentLeave table</a>
</body>
</html>

<?php
?>
<html>
<h1 align="center">Student Information</h1>
<?php
?>  
    <body bgcolor="#7FFFD4">
    <form method="post" action="studentRecordController.php?action=editStudentLeave_view">
    <input type="hidden" name="id" value="<?php echo $id ?>" /> 
    <table align="center" width="79%" border="5">
    <tr>
    <th>id</th>
    <th>student_id</th>
    <th>startDate</th>
    <th>endDate</th>
    <th>studentLeave</th>
    </tr>
    <?php
    foreach($studentLeaveRecords as $studentData) {
?>  
        <tr>
        <td><?php echo $studentData["id"] ?></td>
        <td><?php echo $studentData["student_id"] ?></td>
        <td><?php echo $studentData["startDate"] ?></td>
        <td><?php echo $studentData["endDate"] ?></td>
        <td><?php echo $studentData["studentLeave"] ?></td>
        <td width=250>
        <a href="studentRecordController.php?action=editStudentLeave&id=<?php echo $studentData["id"] ?>">Edit</a>
        </tr>
       <?php
    }
?>
</table>
<a href="studentRecordController.php?action=viewRecords">Back to index page</a>
</body>
</html>
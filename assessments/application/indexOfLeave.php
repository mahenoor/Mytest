<?php
session_start();
require 'crudoperations.php';
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?>
<html>
<h1 align="center">Student Information</h1>
<?php
$crudObj = new CrudOperations();
$resultOfLeaveTable = $crudObj->viewRecordsOfLeaveTable();
if ($resultOfLeaveTable->num_rows > 0) {
?>  
    <body bgcolor="#7FFFD4">
    <form method="post" action="">
    <table align="center" width="79%" border="5">
    <tr>
    <th>id</th>
    <th>student_id</th>
    <th>startDate</th>
    <th>endDate</th>
    <th>studentLeave</th>
    </tr>
    <?php
    while ($studentData = $resultOfLeaveTable ->fetch_assoc()) {
?>  
        <tr>
        <td><?php echo $studentData["id"] ?></td>
        <td><?php echo $studentData["student_id"] ?></td>
        <td><?php echo $studentData["startDate"] ?></td>
        <td><?php echo $studentData["endDate"] ?></td>
        <td><?php echo $studentData["studentLeave"] ?></td>
        <td width=250>
        <a href="editOfStudentLeave.php?id=<?php echo $studentData['id'] ?>">Edit</a>
        </tr>
       <?php
    }
?>
    </table>
    <?php
    } else {
    echo "0 results";
}
?>
<a href="studentRecordController.php?action=viewRecords">Back to index page</a>
</body>
</html>
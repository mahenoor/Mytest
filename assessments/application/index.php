<?php
/*session_start();
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
require 'crudoperations.php';
?>
<html>
<h1 align="center">Student Information</h1>
<?php
//s$crudObj = new CrudOperations();
/*if (!empty($_GET['id'])) {
    $responseOfStudentLeaveDelete = $crudObj->deleteRecordOfStudentLeave($_GET['id']);
    $responseOfDelete = $crudObj->deleteRecord($_GET['id']);
}
$resultOfView = $crudObj->viewRecords();
if ($resultOfView->num_rows > 0) {
?> */?> <html>
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
        </td>
        </tr>
        <?php
    }
?>
    </table>
   <?php/*
    } else {
    echo "0 results";
}*/
?>
<br />
<a href="StudentRecordController.php?action=createStudentRecord_view">Insert a new student record</a>
<br />
<a href="indexOfLeave.php">View the studentLeave table</a>

</body>
</html>

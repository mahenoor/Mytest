<?php
require 'crudoperations.php';
?>
<html>
<h1 align="center">Student Information</h1>
<?php
$crudObj = new CrudOperations();
if (!empty($_GET['id'])) {
    $responseOfDelete = $crudObj->deleteRecord($_GET['id']);
}
$resultOfView = $crudObj->viewRecords();
if ($resultOfView->num_rows > 0) {
?>  
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
    while ($studentData = $resultOfView->fetch_assoc()) {
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
        <a href="readObjectCreation.php?id=<?php echo $studentData['id'] ?>">Read</a>
        <a href="index.php?id=<?php echo $studentData['id'] ?>">Delete</a>
        <a href="editRecord.php?id=<?php echo $studentData['id'] ?>">Edit</a>
        <a href="studentLeave.php?id=<?php echo $studentData['id'] ?>">Leave</a>
        </td>
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
<br />
<a href="CreateStudentRecord.php">Insert a new student record</a>
<br />
<a href="indexOfLeave.php">View the studentLeave table</a>

</body>
</html>

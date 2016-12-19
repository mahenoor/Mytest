<?php
require 'crudoperations.php';
?>
<html>
<h1 align="center">Student Information</h1>
<?php
$crudObj = new CrudOperations();
$resultOfLeaveTable = $crudObj->viewRecordsOfLeaveTable();
if ($resultOfLeaveTable->num_rows > 0) {
?>  
    <body bgcolor="#7FFFD4">
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
<a href="index.php">Back to index page</a>
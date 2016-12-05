<?php
require 'config.php';
?>
<html>
<h1 align="center">Student Information</h1>
<?php
session_start();
if(isset($_SESSION['success'])){
   echo "record inserted into database successfully!";
   unset($_SESSION['success']);
}
$view_query = "SELECT * FROM Student";
$result = $conn->query($view_query);
if ($result->num_rows > 0) {
?>  
    <body bgcolor="#7FFFD4">
    <table align="center" width="8%" border="3">
    <tr>
    <th>id</th>
    <th>studentName</th>
    <th>Department</th>
    <th>Gender</th>
    <th>Roll_no</th>
    <th>Subject1</th>
    <th>Subject2</th>
    <th>Subject3</th>
    <th>Total</th>
    <th>Percentage</th>
    </tr>
    <?php
    while ($studentData = $result->fetch_assoc()) {
?>
        <tr>
        <td><?php echo $studentData["id"] ?></td>
        <td><?php echo $studentData["studentName"] ?></td>
        <td><?php echo $studentData["Department"] ?></td>
        <td><?php echo $studentData["Gender"] ?></td>
        <td><?php echo $studentData["Roll_no"] ?></td>
        <td><?php echo $studentData["Subject1"] ?></td>
        <td><?php echo $studentData["Subject2"] ?></td>
        <td><?php echo $studentData["Subject3"] ?></td>
        <td><?php echo $studentData["Total"] ?></td>
        <td><?php echo $studentData["Percentage"] ?></td>
        <td width=250>
        <a href="read.php?id=<?php echo $studentData['id'] ?>">Read</a>
        <a href="delete.php?id=<?php echo $studentData['id'] ?>">Delete</a>
        <a href="edit.php?id=<?php echo $studentData['id'] ?>">Edit</a>
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
mysqli_close($conn);
?>
<br />
<a href="CreateStudentRecord.php">Insert a new student record</a>
</body>
</html>

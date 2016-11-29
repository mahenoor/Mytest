<?php
require 'config.php';
?>
<html>
<h1 align="center">Student Information</h1>
<a href="InsertStudentRecord.php">Insert a new student record</a>
<br />
<?php
$view_query = "SELECT * FROM Student";
$result = $conn->query($view_query);
if ($result->num_rows > 0) {
?>  
    <body bgcolor="sky blue">
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
    while ($percentage = $result->fetch_assoc()) {
?>
        <tr>
        <td><?php echo $percentage["id"] ?></td>
        <td><?php echo $percentage["studentName"] ?></td>
        <td><?php echo $percentage["Department"] ?></td>
        <td><?php echo $percentage["Gender"] ?></td>
        <td><?php echo $percentage["Roll_no"] ?></td>
        <td><?php echo $percentage["Subject1"] ?></td>
        <td><?php echo $percentage["Subject2"] ?></td>
        <td><?php echo $percentage["Subject3"] ?></td>
        <td><?php echo $percentage["Total"] ?></td>
        <td><?php echo $percentage["Percentage"] ?></td>
        <td width=250>
        <a href="read.php?id=<?php echo $row['id'] ?>">Read</a>
        <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
        <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
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
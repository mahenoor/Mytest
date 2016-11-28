<html>
<h1 align="center">View Student Information</h1>
<?php
require 'db_config.php';
$view_query = "SELECT * FROM Student1";
$result = $conn->query($view_query);
if ($result->num_rows > 0) {
?>  
    <body bgcolor="sky blue">
    <table width="8%" border="3">
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
    while ($row = $result->fetch_assoc()) {
?>
        <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["studentName"] ?></td>
        <td><?php echo $row["Department"] ?></td>
        <td><?php echo $row["Gender"] ?></td>
        <td><?php echo $row["Roll_no"] ?></td>
        <td><?php echo $row["Subject1"] ?></td>
        <td><?php echo $row["Subject2"] ?></td>
        <td><?php echo $row["Subject3"] ?></td>
        <td><?php echo $row["Total"] ?></td>
        <td><?php echo $row["Percentage"] ?></td>
        <td width=250>
        <a href="db_delete.php?id=<?php echo $row['id'] ?>">delete</a>
        &nbsp
        <a href="db_update1.php?id=<?php echo $row['id'] ?>">update</a>
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
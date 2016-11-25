<html><?php
$db_hostname = 'localhost';        
$db_username = 'root';              
$db_password = 'compass';                  
$db_name = 'studentInformation';                
 $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
 if(!$conn) {
    echo "Unable to connect database".mysqli_error($conn);
}
else
{
    echo "Database connected successfully";
}
if(isset($_POST['submit'])) {
    $studentName=$_POST['studentName'];
    $department=$_POST['department'];
    $gender=$_POST['gender'];
    $Roll_no=$_POST['Roll_no'];
    $subject1=$_POST['subject1'];
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $total=$_POST['total'];
    $percentage=$_POST['percentage'];
    $sql1 = "SELECT * FROM Student1";
    $result = $conn->query($sql1);
    if ($result->num_rows > 0) {
    ?>
    <table>
    <tr>
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
    while($row = $result->fetch_assoc()) {
       
        echo "<tr>
        <td>".$row["studentName"]."</td>
        <td>".$row["Department"]."</td>
        <td>".$row["Gender"]."</td>
        <td>".$row["Roll_no"]."</td>
        <td>".$row["Subject1"]."</td>
        <td>".$row["Subject2"]."</td>
        <td>".$row["Subject3"]."</td>
        <td>".$row["Total"]."</td>
        <td>".$row["Percentage"]."</td>
        </tr>";
    }
    ?>
    </table>
    <?php
    } else {
     echo "0 results";
    }
}
mysqli_close($conn);
?>
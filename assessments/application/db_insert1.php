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
    $sql = "INSERT INTO Student1(studentName,Department,Gender,Roll_no,Subject1,Subject2,Subject3,Total,Percentage) VALUES ('$studentName','$department','$gender','$Roll_no','$subject1','$subject2','$subject3','$total','$percentage')";
    if(mysqli_query($conn,$sql)) {
        echo "inserted";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //header("view3.php");
    /*$sql1 = "SELECT * FROM Student1";
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
    /*$sql = "DELETE FROM Student1 WHERE studentName=mahenoor";
    if (mysqli_query($conn, $sql)) {
       echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }*/
} 
mysqli_close($conn);
?>
<body>
<form method="post" action="">
<p>Enter your name</p>
Student Name<input type="text" name="studentName" value="" required/>
<br/>
<p>Enter your Department</p>
<select name="department" required>
<option  value="0">select</option>
<option value="1">Computer Science</option>
<option value="2">Electronics</option>
<option value="3">Mechanical</option>
<option value="4">Civil</option>
<option value="5">Electrical</option>
<option value="6">Aeronatics</option>
<option value="7">Chemical</option>
<option value="8">Metallurgy</option>
<option value="9">Medical electronics</option>
</select>
<br/>
<p>Enter your gender</p>
<input type="radio" name="gender" value="male" required/>Male<br />
<input type="radio" name="gender" value="female" required/>Female<br />
<br/>
<p>Enter your Roll_no</p>
Roll_no<input type="text" name="Roll_no" value="" required/>
<br/>
<p>Enter marks of Subject1</p>
Subject1<input type="text" name="subject1" value="" required/>
<br/>
<p>Enter marks of Subject2</p>
Subject2<input type="text" name="subject2" value="" required/>
<br/>
<p>Enter marks of Subject3</p>
Subject3<input type="text" name="subject3" value="" required/>
<br/>
<p>Enter total</p>
total<input type="text" name="total" value="" required/>
<br/>
<p>Enter percentage</p>
percentage<input type="text" name="percentage" value="" required/>
<br/>
<input type="submit" name="submit" value="submit">
</form></body></html>



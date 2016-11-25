<html>
<head>
<title>Student Information</title>
</head>
<?php
require 'db_connect.php';
if (isset($_POST['submit'])) {
    $studentName = $_POST['studentName'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $Roll_no = $_POST['Roll_no'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    $insert_query = "INSERT INTO Student1( studentName, Department, Gender, Roll_no, Subject1, Subject2, Subject3, Total, Percentage ) VALUES ( '$studentName', '$department', '$gender', '$Roll_no', '$subject1', '$subject2', 
        '$subject3', '$total', '$percentage' )";
    if (mysqli_query($conn,$insert_query)) {
        echo "record inserted into database successfully";
    } else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
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
<option value="0">select</option>
<option value="Computer Science">Computer Science</option>
<option value="Electronics">Electronics</option>
<option value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option value="Electrical">Electrical</option>
<option value="Aeronatics">Aeronatics</option>
<option value="Chemical">Chemical</option>
<option value="Metallurgy">Metallurgy</option>
<option value="Medical electronics">Medical electronics</option>
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
total<input type="text" name="total" value="" />
<br/>
<p>Enter percentage</p>
percentage<input type="text" name="percentage" value="" />
<br/>
<input type="submit" name="submit" value="submit">
</form></body></html>



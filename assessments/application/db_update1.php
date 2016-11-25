<?php
require 'db_connect.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
	$studentName = $_POST['studentName'];
    $department = $_POST['department'];
	$gender = $_POST['gender'];
    $Roll_no = $_POST['Roll_no'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
    $percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
    $update_query = "UPDATE Student1 SET studentName = '$studentName', ";
	if($_POST['department']) {
    	$update_query .= " department = '$department', ";
    }
	$update_query .= "gender = '$gender', Roll_no = '$Roll_no', subject1 = '$subject1', subject2 = '$subject2', subject3 = '$subject3', total = '$total',  percentage = '$percentage' WHERE id = '$id'"; 
    $result = $conn->query($update_query);
	if($result) {
    	echo "updated successfully";
    } else {
    	echo "error in updating records " .mysqli_error($conn);
    }
}
?>
<a href = "db_view1.php">back to view page</a>
<?php
$view_query = "SELECT * FROM Student1 where id=$id";
$result = $conn->query($view_query);
$row = $result->fetch_assoc();
$studentName = $row['studentName'];
$department = $row['Department'];
$gender = $row['Gender'];
$Roll_no = $row['Roll_no'];
$subject1 = $row['Subject1'];
$subject2 = $row['Subject2'];
$subject3 = $row['Subject3'];
$total = $row['Total'];
$percentage = $row['Percentage'];
?>
<html>
<head>
<title>Student Information</title>
</head>
<body>
<form method="post" action="">
<p>Enter your name</p>
Student Name<input type="text" name="studentName" value="<?php echo $studentName; ?>" required/>
<br/>
<p>Enter your Department</p>
<select name="department">
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
<input type="radio" <?php if($gender == "male") echo "checked" ?> name="gender" value="male" required/>Male<br />
<input type="radio" <?php if($gender == "female") echo "checked" ?> name="gender" value="female" required/>Female<br />
<br/>
<p>Enter your Roll_no</p>
Roll_no<input type="text" name="Roll_no" value="<?php echo $Roll_no; ?>" required/>
<br/>
<p>Enter marks of Subject1</p>
Subject1<input type="text" name="subject1" value="<?php echo $subject1; ?>" required/>
<br/>
<p>Enter marks of Subject2</p>
Subject2<input type="text" name="subject2" value="<?php echo $subject2; ?>" required/>
<br/>
<p>Enter marks of Subject3</p>
Subject3<input type="text" name="subject3" value="<?php echo $subject3; ?>" required/>
<br/>
<input type="submit" name="update" value="update">
</form></body></html>
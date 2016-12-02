<?php
require 'config.php';
$id = $_GET['id'];
$studentNameError = "";
$departmentError = "";  
$genderError = "";
$Roll_noError = "";
$subject1Error = "";
$subject2Error = "";
$subject3Error = "";
if (isset($_POST['update'])) {
    require 'validation.php';
    if (!empty($studentName)  && !empty($department) && !empty($gender) && !empty($Roll_no) &&  
    !empty($subject1)  && !empty($subject2) && !empty($subject3) && preg_match("/^['a-zA-Z']*$/", $studentName)
    && preg_match("/^[a-z0-9]*$/", $Roll_no) && preg_match("/^[0-9]*$/", $subject1) && 
    preg_match("/^[0-9]*$/", $subject2) && preg_match("/^[0-9]*$/", $subject3)) {
        $update_query = "UPDATE Student SET studentName = '$studentName', department = '$department', 
        gender = '$gender', Roll_no = '$Roll_no', subject1 = '$subject1', subject2 = '$subject2', subject3 = '$subject3', total = '$total',  percentage = '$percentage' WHERE id = '$id'"; 
        if (mysqli_query($conn, $update_query)) {
            echo "record updated into database successfully";
        } else if (!mysqli_query($conn, $update_query)) {
            echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
        }
    } else {
    ?>
        <span class="error"><?php echo "Error:please enter the required fields in proper specified format"; ?></span>
<?php
    }
}
?>
<br />
<br />
<a href = "index.php">back to index page</a>
<?php
$view_query = "SELECT * FROM Student where id=$id";
$result = $conn->query($view_query);
$studentData = $result->fetch_assoc();
$studentName = $studentData['studentName']; 
$department = $studentData['Department'];
$gender = $studentData['Gender'];
$Roll_no = $studentData['Roll_no'];
$subject1 = $studentData['Subject1'];
$subject2 = $studentData['Subject2'];
$subject3 = $studentData['Subject3'];
$total = $studentData['Total'];
$percentage = $studentData['Percentage'];
?>
<html>
<head>
<h1 align="center">Update Information</h1>
<title>Student Information</title>
<style>
.error
{
    color :yellow;
    background : red;
}
</style>
</head>
<body bgcolor="pink">
<form method="post" action="">
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="studentName" value="<?php echo $studentName; ?>" />
<?php 
//echo $studentNameError; 
?>
</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td><select name="department">
<option value="0">select</option>
<option <?php if ($department == 'Computer Science') { ?> selected <?php } ?> value="Computer Science">Computer Science</option>
<option <?php if ($department == 'Electronics') { ?> selected <?php } ?> value="Electronics">Electronics</option>
<option <?php if ($department == 'Mechanical') { ?> selected <?php } ?> value="Mechanical">Mechanical</option>
<option <?php if ($department == 'Civil') { ?> selected <?php } ?> value="Civil">Civil</option>
<option <?php if ($department == 'Electrical') { ?> selected <?php } ?> value="Electrical">Electrical</option>
<option <?php if ($department == 'Aeronatics') { ?> selected <?php } ?> value="Aeronatics">Aeronatics</option>
<option <?php if ($department == 'Chemical') { ?> selected <?php } ?> value="Chemical">Chemical</option>
<option <?php if ($department == 'Metallurgy') { ?> selected <?php } ?> value="Metallurgy">Metallurgy</option>
<option <?php if ($department == 'Medical electronics') { ?> selected <?php } ?> value="Medical electronics">Medical electronics</option>
</select>
<?php 
//echo $departmentError;
?>
</td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" <?php if($gender == "male") echo "checked" ?> name="gender" value="male" />Male
<input type="radio" <?php if($gender == "female") echo "checked" ?> name="gender" value="female" />Female
<?php 
//echo $genderError;
?>
</td>
</tr>
<tr>
<td><label>Enter the Roll_no:</label></td>
<td><input type="text" name="Roll_no" value="<?php echo $Roll_no; ?>" />
<?php 
//echo $Roll_noError;
?>
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject1:</label></td>
<td><input type="text" name="subject1" value="<?php echo $subject1; ?>" />
<?php 
//echo $subject1Error;
?>
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject2:</label></td>
<td><input type="text" name="subject2" value="<?php echo $subject2; ?>" />
<?php 
//echo $subject2Error;
?>
</td>
</tr>
<tr>
<td><label>Enter the marks of Subject3:</label></td>
<td><input type="text" name="subject3" value="<?php echo $subject3; ?>" />
<?php 
//echo $subject3Error;
?>
</td>
</tr>
</table>
<input type="submit" name="update" value="update" class="error">
</form>
</body>
</html>
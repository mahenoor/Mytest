<html>
<head>
<h1 align="center">Student Information</h1>
<title>Student Information</title>
<style type = "text/css">
.button 
{
    text-align : center;
    color : red;
    background : yellow;
    padding : 2px;
}
.error
{
    color : red;
    font : bold;
}
</style>
</head><body bgcolor="pink">
<form method="post" action="" >
<table>
<tr>
<td><label>Enter the studentName:</label></td>
<td><input type="text" name="studentName"  value=""></td>
<?php 
if(!empty($studentNameError)) {
	echo $studentNameError;
}
?>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td><select name="department">
<option disable selected value>select</option>
<option  value="Computer Science ">Computer Science</option>
<option  value="Electronics">Electronics</option>
<option  value="Mechanical">Mechanical</option>
<option value="Civil">Civil</option>
<option  value="Electrical">Electrical</option>
<option value="Aeronatics">Aeronatics</option>
<option value="Chemical">Chemical</option>
<option value="Metallurgy">Metallurgy</option>
<option  value="Medical electronics">Medical electronics</option>
</select>
<?php
if(!empty($departmentError)) {
	echo $departmentError;
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio"   name="gender" value="male" />Male<br />
<input type="radio" name="gender" value="female" />Female<br />
<?php
if(!empty($genderError)) {
	echo $genderError;
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Roll_no:</label></td>
<td><input type="text" name="Roll_no" value="" />
<?php
if(!empty($Roll_noError)) {
	echo $Roll_noError;
}
?> 
</td>
</tr>
<tr>
<td><label>Enter marks of Subject1:</label></td>
<td><input type="text" name="subject1" value="" />
<?php
if(!empty($subject1Error)) {
	echo $subject1Error;
}
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Subject2:</label></td>
<td><input type="text" name="subject2" value=""  />
<?php
if(!empty($subject2Error)) {
	echo $subject2Error;
}
?>

</td>
</tr>
<tr>
<td><label>Enter marks of Subject3:</label></td>
<td><input type="text" name="subject3" value=""  />
<?php
if(!empty($subject3Error)) {
	echo $subject3Error;
}
?>

</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button" />
<a href="index.php">Go to index page</a></form>
</body>
</html>

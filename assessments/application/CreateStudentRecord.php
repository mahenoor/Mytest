<?php
require 'crudoperations.php';
require 'validation.php';
if (isset($_POST['submit'])) {
    $crudObj = new CrudOperations();
    $validationObject = new Validation();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];
    if ($responseOfValidation['status']) {
        $responseOfValidation = $crudObj->createStudentRecord($_POST);
        if ($responseOfValidation) {
            header('Location:index.php');
        }
    }    
}
$Department = !empty($Department) ? $Department : '' ;
$Gender = !empty($Gender) ? $Gender : '' ;
?>
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
</head>
<body bgcolor="pink">
<form method="post" action="" >
<table>
<tr>
<td><label>Enter the Student Name:</label></td>
<td><input type="text" name="studentName"  value="<?php if (!empty($_POST['studentName'])) echo $_POST['studentName'] ?>" />
<?php 
if (!empty($errorMessage['studentName'])) {
    echo $errorMessage['studentName'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Department:</label></td>
<td><select name="Department">
<option disable selected value>select</option>
<option <?php if ($Department == 'Computer Science') { ?> selected <?php } ?> value="Computer Science">Computer Science</option>
<option <?php if ($Department == 'Electronics') { ?> selected <?php } ?> value="Electronics">Electronics</option>
<option <?php if ($Department == 'Mechanical') { ?> selected <?php } ?> value="Mechanical">Mechanical</option>
<option <?php if ($Department == 'Civil') { ?> selected <?php } ?> value="Civil">Civil</option>
<option <?php if ($Department == 'Electrical') { ?> selected <?php } ?> value="Electrical">Electrical</option>
<option <?php if ($Department == 'Aeronatics') { ?> selected <?php } ?> value="Aeronatics">Aeronatics</option>
<option <?php if ($Department == 'Chemical') { ?> selected <?php } ?> value="Chemical">Chemical</option>
<option <?php if ($Department == 'Metallurgy') { ?> selected <?php } ?> value="Metallurgy">Metallurgy</option>
<option <?php if ($Department == 'Medical electronics') { ?> selected <?php } ?> value="Medical electronics">Medical electronics</option>
</select>
<?php 
if (!empty($errorMessage['Department'])) {
    echo $errorMessage['Department']; 
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter the Gender:</label></td>
<td><input type="radio" <?php if ($Gender == "male") { echo "checked"; } ?> name="Gender" value="male <?php if 
(!empty($_POST['Gender'])) echo $_POST['Gender'] ?>" />Male<br />
<input type="radio" <?php if ($Gender == "female") { echo "checked"; } ?> name="Gender" value="female <?php if 
(!empty($_POST['Gender'])) echo $_POST['Gender'] ?>"/>Female<br />
<?php
if (!empty($errorMessage['Gender'])) {
    echo $errorMessage['Gender'];
} else {
    echo '';
}
?> 
</td>
</tr>
<tr>
<td><label>Enter the Roll_no:</label></td>
<td><input type="text" name="Roll_no" value="<?php if (!empty($_POST['Roll_no'])) echo $_POST['Roll_no'] ?>" />
<?php 
if (!empty($errorMessage['Roll_no'])) {
    echo $errorMessage['Roll_no'];
} else {
    echo '';
}
?> 
</td>
</tr>
<tr>
<td><label>Enter marks of Physics:</label></td>
<td><input type="text" name="Physics" value="<?php if (!empty($_POST['Physics'])) echo $_POST['Physics'] ?>" />
<?php 
if (!empty($errorMessage['Physics'])) {
    echo $errorMessage['Physics'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Chemistry:</label></td>
<td><input type="text" name="Chemistry" value="<?php if (!empty($_POST['Chemistry'])) echo $_POST['Chemistry'] ?>"  />
<?php 
if (!empty($errorMessage['Chemistry'])) {
    echo $errorMessage['Chemistry'];
} else {
    echo '';
}
?>
</td>
</tr>
<tr>
<td><label>Enter marks of Maths:</label></td>
<td><input type="text" name="Maths" value="<?php if (!empty($_POST['Maths'])) echo $_POST['Maths'] ?>"  />
<?php 
if (!empty($errorMessage['Maths'])) {
    echo $errorMessage['Maths'];
} else {
    echo '';
}
?>
</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button" />
<a href="index.php">Go to index page</a></form>
</body>
</html>
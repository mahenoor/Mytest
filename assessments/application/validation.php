<?php
$studentName = $_POST['studentName'];
if (!isset($_POST['department'])) {
    $departmentError = "***please enter department";
} else {
    $department = $_POST['department'];
}
if (!isset($_POST['gender'])) {
    $genderError = "***please enter gender";
} else {
    $gender = $_POST['gender'];
}
$Roll_no = $_POST['Roll_no'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$total = $_POST['subject1'] + $_POST['subject2'] + $_POST['subject3'];
$percentage = (($_POST['subject1'] + $_POST['subject2'] + $_POST['subject3']) / 3);
if (empty($studentName) || (!preg_match("/^['a-zA-Z']*$/", $studentName))) {
    $studentNameError = "***Name should not be empty,must include only chararcters,digits and whitespaces are not allowed";
}
if (empty($department)) {
    $departmentError = "***please enter department";
} 
if (empty($gender)) {
    $genderError = "***please enter gender";
} 
if (empty($Roll_no) || (!preg_match("/[a-z0-9]*$/", $Roll_no))) {
    $Roll_noError = "***roll_no can't be empty and must not include capital letters";
} 
if (empty($subject1) || (!preg_match("/[0-9]*$/", $subject1))) {
    $subject1Error = "***subject1 can't be empty and must include only digits";
} 
if (empty($subject2) || (!preg_match("/[0-9]*$/", $subject2))) {
    $subject2Error = "***subject2 can't be empty and must include only digits";
} 
if (empty($subject3) || (!preg_match("/[0-9]*$/", $subject3))) {
    $subject3Error = "***subject3 can't be empty and must include only digits";
} 
?>

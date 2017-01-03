<?php
require "crudoperations.php";
if (!empty($_GET['id'])) {
    $crudObj = new CrudOperations();
    $studentData = $crudObj->readRecord($_GET['id']);
	$studentName = $studentData['studentName'];
	$Department = $studentData['Department'];
	$Gender = $studentData['Gender'];
	$Roll_no = $studentData['Roll_no'];
	$Physics = $studentData['Physics'];
	$Chemistry = $studentData['Chemistry'];
	$Maths = $studentData['Maths'];
	$Total = $studentData['Total'];
	$Percentage = $studentData['Percentage'];
	$studentLeaveData = $crudObj->readRecordOfIndividualStudent($_GET['id']);
}
include ('readObjectCreation_view.php');
?>


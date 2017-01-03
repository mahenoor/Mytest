<?php
require 'crudoperations.php';
if (!empty($_GET['id'])) {
	$crudObj = new CrudOperations();
	$studentData = $crudObj->readStudentLeaveRecord($_GET['id']);
	$input['startDate'] = $studentData['startDate'];
    $input['endDate'] = $studentData['endDate'];
    $input['studentLeave'] = $studentData['studentLeave'];
}		
if (isset($_POST['submit'])) {
	$responseOfStudentLeave = $crudObj-> editStudentLeaveRecord($_POST, $_GET['id']);
	if ($responseOfStudentLeave === true) {
        header('Location:indexOfLeave.php');
    }
}
include('editOfStudentLeave_view.php');
?>


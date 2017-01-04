<?php
session_start();
require 'crudoperations.php';
require 'validation.php';
if (!empty($_GET['id'])) {
    $crudObj = new CrudOperations();
    $studentData = $crudObj->readRecord($_GET['id']);
    $input['studentName'] = $studentData['studentName'];
    $input['Department'] = $studentData['Department'];
    $input['Gender'] = $studentData['Gender'];
    $input['Roll_no'] = $studentData['Roll_no'];
    $input['Physics'] = $studentData['Physics'];
    $input['Chemistry'] = $studentData['Chemistry'];
    $input['Maths'] = $studentData['Maths'];
    $input['Total'] = $studentData['Total'];
    $input['Percentage'] = $studentData['Percentage'];
}
if (isset($_POST['update'])) {
    $crudObj = new CrudOperations();
    $validationObject = new Validation();
    $responseOfValidation = $validationObject->validate($_POST);
    $errorMessage = $responseOfValidation['message'];
    if ($responseOfValidation['status'] === true) {
        $responseOfEdit = $crudObj->editStudentRecord($_POST, $_GET['id']);
    }
    if ($responseOfEdit === true ) {
        $_SESSION['message'] = 'Student record updated successfully'; 
        header("Location:index.php"); 
    }
}
$Department = $input['Department'];
$Gender = $input['Gender'];
include ('editRecord_view.php');
?>


  

    
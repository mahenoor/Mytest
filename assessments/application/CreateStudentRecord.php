<?php
session_start();
require 'crudoperations.php';
require 'validation.php';
if (isset($_POST['submit'])) {
    $crudObj = new CrudOperations();
    $validationObject = new Validation();
    $responseOfValidation = $validationObject->validate($_POST);
    $responseOfInsert = "";
    $errorMessage = $responseOfValidation['message'];
    if ($responseOfValidation['status']) {
            $responseOfInsert = $crudObj->createStudentRecord($_POST);
    }
    if ($responseOfInsert === true) {
       $_SESSION['message'] = 'Student record inserted successfully'; 
       header("Location:index.php");
    }
}  
include ('CreateStudentRecord_view.php');
?>

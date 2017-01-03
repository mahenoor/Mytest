<?php
session_start();
require 'crudoperations.php';
if (isset($_POST['submit'])) {
    $crudObj = new CrudOperations();
    $responseOfStudentLeave = $crudObj->studentLeave($_POST, $_GET['id']);
    if ($responseOfStudentLeave === true) {
        $_SESSION['message'] = 'Student Leave record inserted successfully'; 
        header('Location:index.php');
    }
}
include ('studentLeave_view.php');
?>  

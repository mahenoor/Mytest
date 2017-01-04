<?php
require 'crudoperations.php';
require 'validation.php';
class StudentRecordController
{
	private $modelObj;
	private $validationObj;
	public function __construct()
	{
		$this->modelObj = new CrudOperations();
		$this->validationObj = new Validation();
	}
	public function viewRecords()
	{
		$studentRecords = $this->modelObj->viewRecords();
		require 'index.php';
	}
	public function viewRecordsOfLeaveTable()
	{
		$studentLeaveRecords = $this->modelObj->viewRecordsOfLeaveTable();
		require 'indexOfLeave.php';
	}
	public function createStudentRecord()
	{
		$validationArray = $this->validationObj->validate($_POST);
		//print_r($validationArray);exit;
		if (!$validationArray['status']) {
			$_SESSION['errorMessage'] = $validationArray['message'];
			header('Location:studentRecordController.php?action=createStudentRecord_view');
		} else {
			unset($_SESSION['errorMessage']);
			$response = $this->modelObj->createStudentRecord($_POST);
			if ($response) {
				header('Location:studentRecordController.php?action=viewRecords');
			}
		}
	}
	public function createStudentRecord_view()
	{
		if (!empty($_SESSION['errorMessage'])) {
			$errorMessage = $_SESSION['errorMessage'];
		}
		require 'CreateStudentRecord_view.php';
	}
	public function studentLeave()
	{
		$response = $this->modelObj->studentLeave($_POST, $_GET['id']);
		//print_r($response);exit;
		if ($response) {
			header('Location:studentRecordController.php?action=viewRecords');
		}
	}
	public function studentLeave_view()
	{
		require 'studentLeave_view.php';
	}
	public function readRecord()
	{
		if (!empty($_GET['id'])) {
	    $studentData = $this->modelObj->readRecord($_GET['id']);
		$studentName = $studentData['studentName'];
		$Department = $studentData['Department'];
		$Gender = $studentData['Gender'];
		$Roll_no = $studentData['Roll_no'];
		$Physics = $studentData['Physics'];
		$Chemistry = $studentData['Chemistry'];
		$Maths = $studentData['Maths'];
		$Total = $studentData['Total'];
		$Percentage = $studentData['Percentage'];
		$studentLeaveData = $this->modelObj->readRecordOfIndividualStudent($_GET['id']);
	}
	require 'readObjectCreation_view.php';
	}
	public function delete()
	{
		if (!empty($_GET['id'])) {
	    $responseOfStudentLeaveDelete = $this->modelObj->deleteRecordOfStudentLeave($_GET['id']);
	    $responseOfDelete = $this->modelObj->deleteRecord($_GET['id']);
	    header('Location:studentRecordController.php?action=viewRecords');
		}
	}
	public function edit()
	{
		$validationArray = $this->validationObj->validate($_POST);
		if (!$validationArray['status']) {
			$_SESSION['errorMessage'] = $validationArray['message'];
			header('Location:studentRecordController.php?action=edit_view');
		} else {
			unset($_SESSION['errorMessage']);
			$response = $this->modelObj->editStudentRecord($_POST, $_GET['id']);
			if ($response) {
				header('Location:studentRecordController.php?action=viewRecords');
			} 
		}
		/*$Department = $input['Department'];
		$Gender = $input['Gender'];*/
	}
	public function edit_view()
	{
		if (!empty($_GET['id'])) {
		    $studentData = $this->modelObj->readRecord($_GET['id']);
		    $input['studentName'] = $studentData['studentName'];
		    $input['Department'] = $studentData['Department'];
		    $input['Gender'] = $studentData['Gender'];
		    $input['Roll_no'] = $studentData['Roll_no'];
		    $input['Physics'] = $studentData['Physics'];
		    $input['Chemistry'] = $studentData['Chemistry'];
		    $input['Maths'] = $studentData['Maths'];
		    $input['Total'] = $studentData['Total'];
		    $input['Percentage'] = $studentData['Percentage'];
		    $id = $_GET['id'];
		}
		require 'editRecord_view.php';
	}
	
}
$controllerObj = new StudentRecordController();
//$controllerObj->$action();
if (!isset($_REQUEST['action'])) {
	$action = 'viewRecords';
} else {
	$action = $_GET['action'];
}
$controllerObj->$action();
?>





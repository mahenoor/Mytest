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
	public function edit_view()
	{
		$this->edit();
		if (!empty($_SESSION['errorMessage'])) {
			$errorMessage = $_SESSION['errorMessage'];
		}
	}
	public function edit()
	{
		if (!empty($_GET['id'])) {
		   $id = $_GET['id'];
		}
		if (isset($_GET['id'])) {
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
		    $Department = $input['Department'];
			$Gender = $input['Gender'];
			//$id = $_GET['id'];
			include('editRecord_view.php');
		}
		if (isset($_POST['update'])) {
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
		}
	}
	public function editStudentLeave_view()
	{
		$this->editStudentLeave();
		if (!empty($_SESSION['errorMessage'])) {
			$errorMessage = $_SESSION['errorMessage'];
		}
	}
	public function editStudentLeave()
	{

		if (!empty($_GET['id'])) {
		   $id = $_GET['id'];
		}
		if (isset($_GET['id'])) {
			$studentData = $this->modelObj->readStudentLeaveRecord($_GET['id']);
			$input['startDate'] = $studentData['startDate'];
		    $input['endDate'] = $studentData['endDate'];
		    $input['studentLeave'] = $studentData['studentLeave'];
		    //$id = $_GET['id'];
		    include('editOfStudentLeave_view.php');
		}
		if (isset($_POST['submit'])) {
			$responseOfStudentLeave = $this->modelObj->editStudentLeaveRecord($_POST, $_GET['id']);
			if ($responseOfStudentLeave) {
		        header('Location:studentRecordController.php?action=viewRecords');
		    }
		}
	}
	public function studentLeave_view()
	{
		$this->studentLeave();
	}
	public function studentLeave()
	{
		$id = $_GET['id'];
		require 'studentLeave_view.php';
		if (isset($_POST['submit'])) {
			$response = $this->modelObj->studentLeave($_POST);
			if ($response) {
				header('Location:studentRecordController.php?action=viewRecords');
			}
		}
	}		
}
$controllerObj = new StudentRecordController();
if (!isset($_REQUEST['action'])) {
	$action = 'viewRecords';
} else {
	$action = $_GET['action'];
}
$controllerObj->$action();
?>





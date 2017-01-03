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
		$viewRecordsOfLeaveTable = $this->modelObj->viewRecordsOfLeaveTable();
		//require 'indexOfLeave.php';
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



	/*public function editStudentRecord()
	{
		$validationArray = $this->validationObj->validate($_POST);
		if (!$validationArray['status']) {
			$_SESSION['errorMessage'] = $validationArray['message'];
			header('Location:studentRecordController.php?action=editStudentRecord_view');
		} else {
			unset($_SESSION['errorMessage']);
			$response = $this->modelObj->editStudentRecord($_POST, $_GET['id']);
			if ($response) {
				header('Location:studentRecordController.php?action=viewRecords');
			}
		}
	}
	public function editStudentRecord_view()
	{
		if (!empty($_SESSION['errorMessage'])) {
			$errorMessage = $_SESSION['errorMessage'];
		}
		require 'editRecord_view.php';
	}

	/*public function delete()
	{
		if (!empty($_GET['id'])) {
	    $responseOfStudentLeaveDelete = $this->modelObj->deleteRecordOfStudentLeave($_GET['id']);
	    $responseOfDelete = $this->modelObj->deleteRecord($_GET['id']);
	    header('Location:studentRecordController.php?action=viewRecords');
		}
	}*/

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





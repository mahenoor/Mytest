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
		$viewRecords = $this->modelObj->viewRecords();
		require 'index.php';
	}
	public function createStudentRecord()
	{
		$responseOfValidation = $this->validationObj->validate($_POST);
		//print_r($responseOfValidation);exit;
		if (!$responseOfValidation['status']) {
			$_SESSION['errorMsg'] = $responseOfValidation['message'];
			header('Location:StudentRecordController.php?action=createStudentRecord_view');
		} else {
			unset($_SESSION['errorMsg']);
			$response = $this->modelObj->createStudentRecord($_POST);
			if ($response) {
				header('Location:StudentRecordController.php?action=viewRecords');
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
	
}
$controllerObj = new StudentRecordController();
if (!isset($_REQUEST['action'])) {
	$action = 'viewRecords';
} else {
	$action = $_GET['action'];
}
$controllerObj->$action();
?>




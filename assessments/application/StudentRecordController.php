<?php
session_start();
require 'crudoperations.php';
require 'validation.php';
class StudentRecordController
{
	private $ObjOfCreateStudentRecordModel;
	private $ObjOfValidationModel;
	public function __construct()
	{
		$this->ObjOfCreateStudentRecordModel = new CrudOperations();
		$this->ObjOfValidationModel = new Validation();
	}
	public function viewRecords()
	{
		$viewRecords = $this->ObjOfCreateStudentRecordModel->viewRecords();
		require 'index.php';
	}
	public function createStudentRecord_view()
	{
		if (!empty($_SESSION['errorMsg'])) {
			$errorMsg = $_SESSION['errorMsg'];
		}
		require 'createStudentRecord_view.php';
	}
}
?>

 $empList = $this->modelObj->ListEmployee();
        require 'listemp.php';
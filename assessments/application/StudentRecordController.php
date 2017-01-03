<?php
session_start();
require 'crudoperations.php';
require 'validation.php';
class StudentRecordController
{
	private $CreateStudentRecordModelObj;
	private $ValidationModelObj;
	public function __construct()
	{
		$this->CreateStudentRecordModelObj = new CrudOperations();
		$this->ValidationModelObj = new Validation();
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
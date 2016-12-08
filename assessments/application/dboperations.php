<?php
require "calculation.php";
class CRUDOperations 
{
	private $db_hostname = 'localhost';        
	private $db_username = 'root';              
	private $db_password = 'compass';                  
	private $db_name = 'studentInformation'; 
	private $conn;
	public function __construct()
	{
		$this->conn = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->db_name);
		if (!$this->conn) {
		    die("Unable to connect database" .mysqli_error($this->conn));
		}
		
	}
	public function DeleteRecord($id)
	{
		$delete_query = "DELETE FROM Student WHERE id=$id"; 
	    $result = $this->conn->query($delete_query);
	    if ($result) {
	    	return true;
	    } else {
	  		return mysqli_error($this->conn);
	    }
	}
	public function ReadRecord($id)
	{
		$read_query = "SELECT * FROM Student where id=$id";
		$result = $this->conn->query($read_query);
		$studentData = $result->fetch_assoc();
		return $studentData;
	}
	public function ViewRecords()
	{
		$view_query = "SELECT * FROM Student";
		$result = $this->conn->query($view_query);
		return $result;
	}
	public function CreateStudentRecord($inputData)
	{
		$studentName = $inputData['studentName'];
		$department = $inputData['department'];
		$gender = $inputData['gender'];
	    $Roll_no = $inputData['Roll_no'];
	    $subject1 = $inputData['subject1'];
	    $subject2 = $inputData['subject2'];
	    $subject3 = $inputData['subject3'];
	    $errorMessage = "";
	    $calculation = new Calculation();
		$total = $calculation->total($inputData['subject1'], $inputData['subject2'], $inputData['subject3']);
		$percentage = $calculation->percentage($inputData['subject1'], $inputData['subject2'], 
						$inputData['subject3']);
		$insert_query = "INSERT INTO Student(studentName, Department, Gender, Roll_no, Subject1, Subject2, Subject3, Total, Percentage ) VALUES ('$studentName', '$department', '$gender', '$Roll_no', '$subject1', 
		            '$subject2', '$subject3', '$total', '$percentage' )";
        if (mysqli_query($this->conn, $insert_query)) {
            return true;
        } else if (!mysqli_query($this->conn, $insert_query)) {
            return false;
        }
		
	}

}



?>
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
	public function deleteRecord($id)
	{
		$delete_query = "DELETE FROM Student WHERE id=$id"; 
	    $result = $this->conn->query($delete_query);
	    if ($result) {
	    	return true;
	    } else {
	  		return mysqli_error($this->conn);
	    }
	}
	public function readRecord($id)
	{
		$read_query = "SELECT * FROM Student where id=$id";
		$result = $this->conn->query($read_query);
		$studentData = $result->fetch_assoc();
		return $studentData;
	}
	public function viewRecords()
	{
		$view_query = "SELECT * FROM Student";
		$result = $this->conn->query($view_query);
		return $result;
	}
	public function createStudentRecord($inputData)
	{
		$studentName = $inputData['studentName'];
		$Department = $inputData['Department'];
		$Gender = $inputData['Gender'];
	    $Roll_no = $inputData['Roll_no'];
	    $Physics = $inputData['Physics'];
	    $Chemistry = $inputData['Chemistry'];
	    $Maths = $inputData['Maths'];
	    $errorMessage = "";
	    $calculation = new Calculation();
		$Total = $calculation->Total($inputData['Physics'], $inputData['Chemistry'], $inputData['Maths']);
		$Percentage = $calculation->Percentage($inputData['Physics'], $inputData['Chemistry'], 
						$inputData['Maths']);
		$insert_query = "INSERT INTO Student(studentName, Department, Gender, Roll_no, Physics, Chemistry, Maths, Total, Percentage ) VALUES ('$studentName', '$Department', '$Gender', '$Roll_no', '$Physics', 
		            '$Chemistry', '$Maths', '$Total', '$Percentage')";

		            echo $insert_query;

        if (mysqli_query($this->conn, $insert_query)) {
            return true;
        } else if (!mysqli_query($this->conn, $insert_query)) {
            return false;
        }
	}
	public function editStudentRecord($inputData,$id) 
	{
		$studentName = $inputData['studentName']; 
		$Department = $inputData['Department'];
		$Gender = $inputData['Gender'];
		$Roll_no = $inputData['Roll_no'];
		$Physics = $inputData['Physics'];
		$Chemistry = $inputData['Chemistry'];
		$Maths = $inputData['Maths'];
		$errorMessage = ""; 
	    $calculation = new Calculation();
		$Total = $calculation->Total($inputData['Physics'], $inputData['Chemistry'], $inputData['Maths']);
		$Percentage = $calculation->Percentage($inputData['Physics'], $inputData['Chemistry'], 
						$inputData['Maths']);
		$update_query = "UPDATE Student SET studentName = '$studentName', Department = '$Department', 
            Gender = '$Gender', Roll_no = '$Roll_no', Physics = '$Physics', Chemistry = '$Chemistry', Maths = 
            '$Maths', Total = '$Total',  Percentage = '$Percentage' WHERE id = '$id'"; 
        if (mysqli_query($this->conn, $update_query)) {
            $_SESSION['success'] = 1;
            header("Location:index.php"); 
            session_end();
        } else if (!mysqli_query($this->conn, $update_query)) {
                echo "Error: " . $update_query . "<br>" . mysqli_error($this->conn);
        }
   	}
}
?>
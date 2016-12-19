<?php
require "calculation.php";
class CrudOperations 
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
		try {
			$delete_query = "DELETE from Student where id = {$id}"; 
			$result = $this->conn->query($delete_query);
		} catch(Exception $e) {
	    	echo "Error: " . $delete_query . "<br>" . mysqli_error($this->conn) . "<br>" . $e->getMessage();
	    }
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
		try {
			$insert_query = "INSERT INTO Student(studentName, Department, Gender, Roll_no, Physics, Chemistry, Maths, Total, Percentage ) VALUES('$studentName', '$Department', '$Gender', '$Roll_no', '$Physics', 
		            '$Chemistry', '$Maths', '$Total', '$Percentage')";
			if (mysqli_query($this->conn, $insert_query)) {
                return true;
            } if (!mysqli_query($this->conn, $insert_query)) {
	    		throw new Exception();
	    	}
	    } catch(Exception $e) {
	    	echo "Error: " . $insert_query . "<br>" . mysqli_error($this->conn);
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
		try {
			$update_query = "UPDATE Student SET studentName = '$studentName', Department = '$Department', 
            Gender = '$Gender', Roll_no = '$Roll_no', Physics = '$Physics', Chemistry = '$Chemistry', Maths = 
            '$Maths', Total = '$Total',  Percentage = '$Percentage' WHERE id = '$id'"; 
          	if (mysqli_query($this->conn, $update_query)) {
                return true;
        	}
        	if (!mysqli_query($this->conn, $update_query)) {
	    		throw new Exception();
	    	}
	    } catch(Exception $e) {
	    	echo "Error: " . $update_query . "<br>" . mysqli_error($this->conn);
	    }
	}
	public function readRecord($id)
	{
		try {
			$read_query = "SELECT * from Student s left outer JOIN studentLeave sl on s.id = sl.student_id where s.id = {$id}";
			$result = $this->conn->query($read_query); 
			$studentData = $result->fetch_assoc();
        	return $studentData;
        } catch(Exception $e) {
	    	echo "Error: " . $read_query.  "<br>" . $e->getMessage();
	    }
	}
	public function readRecordByRow($id)
	{
		try {
			$read_query = "SELECT * from Student s left outer JOIN studentLeave sl on s.id = sl.student_id where s.id = {$id}";
			$result = $this->conn->query($read_query); 
			foreach($result as $value) {
?>
				<table>
				<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['studentName']; ?></td>
				<td><?php echo $value['Department']; ?></td>
				<td><?php echo $value['Gender']; ?></td> 
				<td><?php echo $value['Roll_no']; ?></td>
				<td><?php echo $value['Physics']; ?></td>
				<td><?php echo $value['Chemistry']; ?></td>
				<td><?php echo $value['Maths']; ?></td>
				<td><?php echo $value['Total']; ?></td>
				<td><?php echo $value['Percentage']; ?></td>
				<td><?php echo $value['startDate']; ?></td>
				<td><?php echo $value['endDate']; ?></td>
				<td><?php echo $value['studentLeave']; ?></td></tr></table><?php
			}
				} catch(Exception $e) {
	    	echo "Error: " . $read_query.  "<br>" . $e->getMessage();
	    }
	}
	public function viewRecords()
	{
		try {
			$view_query = "SELECT * from Student";
			return $result = $this->conn->query($view_query);
		} catch(Exception $e) {
	    	echo "Error: " . $view_query. "<br>" . mysqli_error($this->conn);
	    }
	}
	public function studentLeave($inputData,$student_id)
	{
		$startDate = $inputData['startDate'];
		$endDate = $inputData['endDate'];
		$calculation = new Calculation();
		$studentLeave = $calculation->studentLeave($inputData['startDate'], $inputData['endDate']);
		$errorMessage = "";
		try {
			$insert_query = "INSERT INTO studentLeave(student_id, startDate, endDate, studentLeave) 
			VALUES($student_id, '$startDate', '$endDate', $studentLeave)";
			if (mysqli_query($this->conn, $insert_query)) {
                return true;
            } if (!mysqli_query($this->conn, $insert_query)) {
	    		throw new Exception();
	    	}
	    } catch(Exception $e) {
	    	echo "Error: " . $insert_query. "<br>" . mysqli_error($this->conn);
	    }
	}
	public function viewRecordsOfLeaveTable()
	{
		try {
				$view_query = "SELECT * FROM studentLeave";
				return $result = $this->conn->query($view_query);
				if (!$result) {
				 	throw new Exception();
			    }
		} catch(Exception $e) {
		    echo "Error: " . $view_query. "<br>" . mysqli_error($this->conn);
		}
	}
}    
?>
<?php
class DBOps
{
	private $db_hostname = 'localhost';        
	private $db_username = 'root';              
	private $db_password = 'compass';                  
	private $db_name = 'studentInformation'; 
	private $conn;
	function __construct()
	{
		$this->conn = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->db_name);
		if (!$this->conn) {
		    die("Unable to connect database" .mysqli_error($this->conn));
		}
	}
	function DeleteRecord($id)
	{
		$delete_query = "DELETE FROM Student WHERE id=$id"; 
	    $result = $this->conn->query($delete_query);
	    if ($result === true) {
	    	header("Location:index.php");
	    } else {
	  		return mysqli_error($this->conn);
	    }
	}
	function ReadRecord($id)
	{
		$read_query = "SELECT * FROM Student where id=$id";
		$result = $this->conn->query($read_query);
		$studentData = $result->fetch_assoc();
		$studentName = $studentData['studentName'];
		$department = $studentData['Department'];
		$gender = $studentData['Gender'];
		$Roll_no = $studentData['Roll_no'];
		$subject1 = $studentData['Subject1'];
		$subject2 = $studentData['Subject2'];
		$subject3 = $studentData['Subject3'];
		$total = $studentData['Total'];
		$percentage = $studentData['Percentage'];
?>
		<body bgcolor = "blue">
		<table>
		<tr>
		<th>Student Name</th>
		<th>Department</th>
		<th>gender</th>
		<th>Roll_no</th>
		<th>Subject1</th>
		<th>Subject2</th>
		<th>Subject3</th>
		<th>Total</th>
		<th>Percentage</th>
		</tr>
		<tr>
		<td><?php echo $studentName ?></td>
		<td><?php echo $department ?></td>
		<td><?php echo $gender ?></td>
		<td><?php echo $Roll_no ?></td>
		<td><?php echo $subject1 ?></td>
		<td><?php echo $subject2 ?></td>
		<td><?php echo $subject3 ?></td>
		<td><?php echo $total ?></td>
		<td><?php echo $percentage ?></td>
		</tr>
		</table>
<?php
	}
}
?>
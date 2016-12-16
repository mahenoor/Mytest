<?php

?>
<html>
<h1 align="center">Student Information</h1>
<?php
class Index{
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
	public function viewRecords()
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
$index = new  Index();
$index = $index->viewRecords();
if ($index->num_rows > 0) {
?>  
    <body bgcolor="#7FFFD4">
    <table align="center" width="79%" border="5">
    <tr>
    <th>id</th>
    <th>student_id</th>
    <th>startDate</th>
    <th>endDate</th>
    <th>studentLeave</th>
    </tr>
    <?php
    while ($studentData = $index ->fetch_assoc()) {
?>
        <tr>
        <td><?php echo $studentData["id"] ?></td>
        <td><?php echo $studentData["student_id"] ?></td>
        <td><?php echo $studentData["startDate"] ?></td>
        <td><?php echo $studentData["endDate"] ?></td>
        <td><?php echo $studentData["studentLeave"] ?></td>
       </tr> 
       <?php
    }
?>
    </table>
    <?php
    } else {
    echo "0 results";
}
?>
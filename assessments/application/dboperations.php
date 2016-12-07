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
	    	return true;
	    } else {
	  		return mysqli_error($this->conn);
	    }
	}
	function ReadRecord($id)
	{
		
	}
}
?>
	


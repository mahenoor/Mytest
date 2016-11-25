<html><?php
$db_hostname = 'localhost';        
$db_username = 'root';              
$db_password = 'compass';                  
$db_name = 'studentInformation';                
 $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
 if(!$conn) {
    echo "Unable to connect database".mysqli_error($conn);
}
else
{
    echo "Database connected successfully";
}
    $sql = "DELETE FROM Student1 WHERE Gender='female'";
    if (mysqli_query($conn, $sql)) {
       echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

mysqli_close($conn);
?>
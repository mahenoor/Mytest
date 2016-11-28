<?php
$db_hostname = 'localhost';        
$db_username = 'root';              
$db_password = 'compass';                  
$db_name = 'studentInformation';                
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Unable to connect database" .mysqli_error($conn);
}
?>

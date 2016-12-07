<?php
require 'config.php';
?>
<html>
<body bgcolor="#00FF7F">
<?php
//if the id is obtained from index.php file then deletes the record of the specified id
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM Student WHERE id=$id"; 
    $result = $conn->query($delete_query);
    if ($result === true) {
    	header('location:index.php');
    } else {
  	echo "ERROR!" . mysqli_error($conn);
    }
} else {
	echo "Error:please obtain the id by linking this file with index.php file";
} 	
mysqli_close($conn);
?>
</body>
</html>

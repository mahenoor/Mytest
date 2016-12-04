<?php
require 'config.php';
?>
<html>
<body bgcolor="#00FF7F">
<?php
if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM Student WHERE id=$id"; 
    $result = $conn->query($delete_query);
    if ($result === true) {
    	header('location:index.php');
    	} else {
  	echo "ERROR!" . mysqli_error($conn);
	}	
} 
mysqli_close($conn);
?>
</body>
</html>

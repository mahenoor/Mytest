<?php
require 'db_connect.php';
$id = $_GET['id'];
$delete_query = "DELETE FROM Student1 WHERE id='$id'";
$result = $conn->query($delete_query);
if ($result)
{
    echo "Record Deleted Successfully";
?>    
<br>
<a href='db_view.php'> Back to main page </a>
<?php
} else {
  echo "ERROR!" . mysqli_error($conn);
}    
mysqli_close($conn);
?>


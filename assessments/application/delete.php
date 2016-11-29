<?php
require 'config.php';
if(!empty($_GET['id'])) {
    $id = $_GET['id'];
$delete_query = "DELETE FROM Student WHERE id=$id";
$result = $conn->query($delete_query);
echo "Record Deleted Successfully";
} else {
  echo "ERROR!" . mysqli_error($conn);
}
?>
<br>
<a href='index.php'>Back to index page </a>
<?php    
mysqli_close($conn);
?>


<?php 
include('database.php');

$delete_id = $_GET['id'];
echo $delete_id;
$sql = "DELETE FROM Reservering WHERE Reservering_nr = $delete_id";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo "<script>window.location.href = 'http://localhost/dtv-boys/beheer/Reserveren/reserveren.php'; </script>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

?>
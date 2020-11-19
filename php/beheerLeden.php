<?php
include("beheerHeader.php");
include("beheerNav.php");
include("database.php");

$ledenQuery = "SELECT * FROM Leden";
$stmt = $conn->prepare($ledenQuery);
$stmt->execute();
$result=$stmt->get_result();

echo $result->num_rows;


?>
<section>


</section>
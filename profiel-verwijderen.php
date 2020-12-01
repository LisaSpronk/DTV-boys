<?php

include("php/header.php");

include("php/database.php");

$lid_nr = $_SESSION['gebruiker']->getLidnr();
$ledenDeleteQuery = "DELETE FROM Leden WHERE Lid_nr = $lid_nr";

$stmt = $conn->prepare($ledenDeleteQuery);
$stmt->execute();
$stmt->close();

session_destroy();

echo "<script>alert('Je bent verwijderd!');</script>";
//echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV/index.php' </script>";

?>
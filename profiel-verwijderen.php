<?php

include("php/header.php");

$host = '185.87.187.247';
$dbuser = 'lspronk_dtv';
$dbpass = 'FransjeB12';
$dbname = 'lspronk_DTV';
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

$lid_nr = $_SESSION['gebruiker']->getLidnr();
$ledenDeleteQuery = "DELETE FROM Leden WHERE Lid_nr = $lid_nr";

$stmt = $conn->prepare($ledenDeleteQuery);
$stmt->execute();
$stmt->close();

session_destroy();

echo "<script>alert('Je bent verwijderd!');</script>";
echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV-boys/' </script>";

?>
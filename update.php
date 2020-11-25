<?php
include("php/header.php");

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $lid_nr = $_SESSION['gebruiker']->getLidnr();
    $sql = "UPDATE Leden SET Lid_toernooi = '1' WHERE Lid_nr = '$lid_nr'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
    }

?>
 
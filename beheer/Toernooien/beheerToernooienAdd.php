<?php
include("../database.php");

if(isset($_POST['submit'])){

$toernooienAddQuery = 'INSERT INTO Toernooien (toernooi_startdatum, toernooi_starttijd, toernooi_limiet, toernooi_banen, toernooi_naam)
                        VALUES (?, ?, ?, ?, ?);';

$banen = json_encode($_POST['toernooi_baan']);
                        
$stmt = $conn->prepare($toernooienAddQuery);
$stmt->bind_param("ssiss", $_POST['toernooi_startdatum'], $_POST['toernooi_starttijd'], $_POST['toernooi_limiet'], $banen, $_POST['toernooi_naam']);
$stmt->execute();
$stmt->close();

header("Location: beheerToernooien.php");

}

// include("beheerHeader.php");
// include("beheerNav.php");

?>

<section>
    <form  method="POST">
    <label for="toernooi_startdatum"> start datum </label>
    <input type="date" name="toernooi_startdatum" placeholder="startdatum">
    <label for="toernooi_startdatum"> start tijd </label>
    <input type="date" name="toernooi_starttijd" placeholder="starttijd">
    <input type="number" name="toernooi_limiet" min="2" max="32" placeholder="deelnemers limiet" >
    <input type="checkbox" name="toernooi_baan[]" value="T1">
    <label for="T1"> T1 </label>
    <input type="checkbox" name="toernooi_baan[]" value="T2">
    <label for="T2"> T2 </label>
    <input type="checkbox" name="toernooi_baan[]" value="T3">
    <label for="T3"> T3 </label>
    <input type="checkbox" name="toernooi_baan[]" value="T4">
    <label for="T4"> T4 </label>
    <input type="checkbox" name="toernooi_baan[]" value="T5">
    <label for="T5"> T5 </label>
    <input type="text" name="toernooi_naam" placeholder="naam">
    
    <input type="submit" name="submit" value="aanmaken">
    
    </form>
</section>
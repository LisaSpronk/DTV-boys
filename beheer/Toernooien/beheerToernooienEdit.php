<?php
include("../database.php");
include("../beheer_header.php");

$id=$_GET['id'];


$getToernooiQuery = "SELECT * FROM Toernooien WHERE toernooi_ID = '{$id}'";
$result=$conn->query($getToernooiQuery);
$row=$result->fetch_assoc();

if(isset($_POST['save'])){

$toernooienAddQuery = "UPDATE Toernooien SET toernooi_startdatum = ?, toernooi_starttijd = ?, toernooi_limiet = ?, toernooi_banen =?, toernooi_naam = ?
                        WHERE toernooi_ID = '{$id}'";

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
    <input type="date" name="toernooi_startdatum" placeholder="startdatum" value="<?php echo $row['toernooi_startdatum'];?>">
    <label for="toernooi_startdatum"> start tijd </label>
    <input type="date" name="toernooi_starttijd" placeholder="starttijd" value="<?php echo $row['toernooi_starttijd'];?>">
    <input type="number" name="toernooi_limiet" placeholder="deelnemers limiet" min="2" max="32" value="<?php echo $row['toernooi_limiet'];?>">
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
    <input type="text" name="toernooi_naam" placeholder="naam" value="<?php echo $row['toernooi_naam'];?>">
    
    <input type="submit" name="save" value="wijzigen">
    
    </form>
</section>
<?php include("../beheer_footer.php"); ?>
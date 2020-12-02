<?php
include("../database.php");
include("../beheer_header.php");

$id=$_GET['id'];

$getLidQuery = "SELECT * FROM Leden WHERE Lid_nr = '{$id}'";
$result=$conn->query($getLidQuery);
$row=$result->fetch_assoc();

if(isset($_POST['save'])){
$ledenEditQuery = "UPDATE Leden SET Lid_voornaam = ?,  Lid_tussenvoegsel = ? , Lid_achternaam = ?, Lid_straat = ?, Lid_huisnr = ?, Lid_woonplaats = ?, Lid_telefoonnr = ?, Lid_email = ?, Lid_geslacht = ?, Lid_geboortedatum = ?, Lid_sinds = ? WHERE Lid_nr = {$id}";


$stmt = $conn->prepare($ledenEditQuery);
$stmt->bind_param("ssssssssssss", $_POST['Lid_voornaam'], $_POST['Lid_tussenvoegsel'], $_POST['Lid_achternaam'], $_POST['Lid_straat'], $_POST['Lid_huisnr'], $_POST['Lid_woonplaats'], $_POST['Lid_telefoonnr'], $_POST['Lid_email'], $_POST['Lid_geslacht'], $_POST['Lid_geboortedatum'], $_POST['Lid_sinds']);
$stmt->execute();
$result=$stmt->get_result();
$stmt->close();

echo '<script>alert("Lid succesvol bewerkt")</script>';
header("Location: beheerLeden.php");



}
?>

<section>
    <form method="POST">
    <input type="text" name="Lid_voornaam" placeholder="voornaam" value="<?php echo $row['Lid_voornaam'];?>">
    <input type="text" name="Lid_tussenvoegsel" placeholder="tussenvoegsel" value="<?php echo $row['Lid_tussenvoegsel'];?>">
    <input type="text" name="Lid_achternaam" placeholder="achternaam" value="<?php echo $row['Lid_achternaam'];?>">
    <input type="text" name="Lid_straat" placeholder="straat" value="<?php echo $row['Lid_straat'];?>">
    <input type="text" name="Lid_huisnr" placeholder="huisnummer" value="<?php echo $row['Lid_huisnr'];?>">
    <input type="text" name="Lid_woonplaats" placeholder="woonplaats" value="<?php echo $row['Lid_woonplaats'];?>">
    <input type="text" name="Lid_telefoonnr" placeholder="telefoonnummer" value="<?php echo $row['Lid_telefoonnr'];?>">
    <input type="email" name="Lid_email" placeholder="e-mailadres" value="<?php echo $row['Lid_email'];?>">
    <input type="radio" name="Lid_geslacht" value="vrouw">
    <label for="vrouw">vrouw</label>
    <input type="radio" name="Lid_geslacht" value="man">
    <label for="vrouw">man</label>
    <input type="radio" name="Lid_geslacht" value="anders">
    <label for="vrouw">anders</label>
    <input type="date" name="Lid_geboortedatum" placeholder="geboortedatum" value="<?php echo $row['Lid_geboortedatum'];?>">
    <input type="date" name="Lid_sinds" placeholder="Lid sinds" value="<?php echo $row['Lid_sinds'];?>">

    <input type="submit" name="save" value="wijzigen">
    </form>
</section>
<?php include("../beheer_footer.php");?>
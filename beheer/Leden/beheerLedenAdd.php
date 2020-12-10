<?php
include("../database.php");
include("../beheer_header.php");
if(isset($_POST['submit'])){
//zet wachtwoord om naar hash
$pwd=hash('sha256', $_POST['Lid_wachtwoord']); 
$ledenAddQuery = 'INSERT INTO Leden (Lid_voornaam, Lid_tussenvoegsel, Lid_achternaam, Lid_wachtwoord, Lid_straat, Lid_huisnr, Lid_woonplaats, Lid_telefoonnr, Lid_email, Lid_geslacht, Lid_geboortedatum, Lid_sinds) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' ;

//controleer of de query klopt en stuurt een verificatie naar de server
$stmt = $conn->prepare($ledenAddQuery);

//koppelt bovengenoemde vraagtekens aan variabelen
$stmt->bind_param("ssssssssssss", $_POST['Lid_voornaam'], $_POST['Lid_tussenvoegsel'], $_POST['Lid_achternaam'], $pwd, $_POST['Lid_straat'], $_POST['Lid_huisnr'], $_POST['Lid_woonplaats'], $_POST['Lid_telefoonnr'], $_POST['Lid_email'], $_POST['Lid_geslacht'], $_POST['Lid_geboortedatum'], $_POST['Lid_sinds']);
//voer bovenstaande query uit
$stmt->execute();
//haal het resultaat op van alle gegenereerde gegevens van de query
$result=$stmt->get_result();
//Sluit huidige statement af
$stmt->close();

echo '<script>alert("Lid succesvol aangemaakt")</script>';
//redirect naar het ledenoverzicht
header("Location: beheerLeden.php");



}
// include("beheerHeader.php");
// include("beheerNav.php");
?>

<section>
    <form action="beheerLedenAdd.php" method="POST">
    <input type="text" name="Lid_voornaam" placeholder="voornaam">
    <input type="text" name="Lid_tussenvoegsel" placeholder="tussenvoegsel">
    <input type="text" name="Lid_achternaam" placeholder="achternaam">
    <input type="password" name="Lid_wachtwoord" placeholder="wachtwoord">
    <input type="text" name="Lid_straat" placeholder="straat">
    <input type="text" name="Lid_huisnr" placeholder="huisnummer">
    <input type="text" name="Lid_woonplaats" placeholder="woonplaats">
    <input type="text" name="Lid_telefoonnr" placeholder="telefoonnummer">
    <input type="email" name="Lid_email" placeholder="e-mailadres">
    <input type="radio" name="Lid_geslacht" value="vrouw">
    <label for="vrouw">vrouw</label>
    <input type="radio" name="Lid_geslacht" value="man">
    <label for="vrouw">man</label>
    <input type="radio" name="Lid_geslacht" value="anders">
    <label for="vrouw">anders</label>
    <input type="date" name="Lid_geboortedatum" placeholder="geboortedatum">
    <input type="date" name="Lid_sinds" placeholder="Lid sinds">

    <input type="submit" name="submit" value="submit">
    </form>
</section>
<?php include("../beheer_footer.php");?>
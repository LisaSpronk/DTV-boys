<?php
<<<<<<< Updated upstream:beheer/Leden/beheerLedenDelete.php
include("../database.php");
include("../beheer_header.php");
=======
//Verbind met de database
include("database.php");
>>>>>>> Stashed changes:php/beheerLedenDelete.php

//Haal het id van het lid op
$id=$_GET['id'];

//query om leden op te halen uit de database met het eerder opgehaalde id
$getLidQuery = "SELECT * FROM Leden WHERE Lid_nr = '{$id}'";

//maak connectie met de database en voer query uit.
$result=$conn->query($getLidQuery);

//geef een associatibe array die correspondeert aan de row die in de query wordt opgehaald
$row=$result->fetch_assoc();

//controleer of delete is geset
if(isset($_POST['delete'])){

$ledenDeleteQuery = "DELETE FROM Leden
                     WHERE Lid_nr = {$id}";

//controleer of de query klopt en stuurt een verificatie naar de server
$stmt = $conn->prepare($ledenDeleteQuery);
//voer bovenstaande query uit
$stmt->execute();
//haal het resultaat op van alle gegenereerde gegevens van de query
$result=$stmt->get_result();
//Sluit huidige statement af
$stmt->close();

echo '<script>alert("Lid succesvol verwijderd")</script>';
header("Location: beheerLeden.php");
          

}


// include("beheerHeader.php");
// include("beheerNav.php");
?>

<section>

    <h1> Weet u zeker dat u <?php echo $row['Lid_voornaam']; ?> <?php echo $row["Lid_tussenvoegsel"];?> <?php echo $row['Lid_achternaam']; ?> wilt verwijderen? </h1>
    <form method="POST">
    <input type="submit" name="delete" value="verwijderen">
    <a href="beheerLeden.php"> annuleren </a>
    </form>
</section>
<?php include("../beheer_footer.php");?>
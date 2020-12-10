<?php
<<<<<<< Updated upstream:beheer/Leden/beheerLeden.php
include("../database.php");
include("../beheer_header.php");

=======
//Verbind met de database
include("database.php");
>>>>>>> Stashed changes:php/beheerLeden.php


$ledenQuery = "SELECT * FROM Leden";
//controleer of de query klopt en stuurt een verificatie naar de server
$stmt = $conn->prepare($ledenQuery);
//voer bovenstaande query uit
$stmt->execute();
//haal het resultaat op van alle gegenereerde gegevens van de query
$result=$stmt->get_result();

//include("beheerHeader.php");
// include("beheerNav.php");
?>
<style>
<?php include('beheer.css'); ?>
</style>
<section>



<table class="overzicht_tabel">
<tr>
    <th>Lid nummer</th>
    <th>Voornaam</th>
    <th>Tussenvoegsel</th>
    <th>Achternaam</th>
    <th>Straat</th>
    <th>Huisnummer</th>
    <th>Woonplaats</th>
    <th>Telefoonnummer</th>
    <th>E-mail</th>
    <th>Geslacht</th>
    <th>Geboortedatum</th>
    <th>Lid sinds</th>
    <td><a href="BeheerLedenAdd.php"> toevoegen </a></td>
</tr>
<!-- haalt rows op uit de database en maakt arrays tot er geen rows met resultaten meer zijn-->
<?php while($row=$result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['Lid_nr'];?></td>
        <td><?php echo $row['Lid_voornaam'];?></td>
        <td><?php echo $row['Lid_tussenvoegsel'];?></td>
        <td><?php echo $row['Lid_achternaam'];?></td>
        <td><?php echo $row['Lid_straat'];?></td>
        <td><?php echo $row['Lid_huisnr'];?></td>
        <td><?php echo $row['Lid_woonplaats'];?></td>
        <td><?php echo $row['Lid_telefoonnr'];?></td>
        <td><?php echo $row['Lid_email'];?></td>
        <td><?php echo $row['Lid_geslacht'];?></td>
        <td><?php echo date('d-m-Y', strtotime($row['Lid_geboortedatum']));?></td>
        <td><?php echo date('d-m-Y', strtotime($row['Lid_sinds']));?></td>
        <td><a href="beheerLedenEdit.php?id=<?php echo $row['Lid_nr'];?>"> bewerken </a> <td>
        <td><a href="beheerLedenDelete.php?id=<?php echo $row['Lid_nr'];?>"> verwijderen </a> <td>
    </tr>


<?php endwhile; ?>

</table>

</section>
<?phpinclude('../beheer_footer');?>
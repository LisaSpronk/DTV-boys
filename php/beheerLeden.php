<?php
include("database.php");


$ledenQuery = "SELECT * FROM Leden";
$stmt = $conn->prepare($ledenQuery);
$stmt->execute();
$result=$stmt->get_result();

// include("beheerHeader.php");
// include("beheerNav.php");
?>

<link href="/beheerOverzicht.css" type="text/css" rel="stylesheet" />
<section>

<a href="BeheerLedenAdd.php"> toevoegen </a>

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
</tr>

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
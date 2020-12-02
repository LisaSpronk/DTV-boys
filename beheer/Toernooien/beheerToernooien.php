<?php
include("../database.php");

$toernooienQuery = "SELECT * FROM Toernooien";
$stmt = $conn->prepare($toernooienQuery);
$stmt->execute();
$result=$stmt->get_result();

include("../beheer_header.php");
?>

<section>



<table class="overzicht_tabel">
<tr>
    <th>Toernooi ID</th>
    <th>Startdatum</th>
    <th>Starttijd</th>
    <th>Spelers limiet</th>
    <th>Banen</th>
    <th>Naam</th>
    <td><a href="beheerToernooienAdd.php"> toevoegen </a></td>
</tr>

<?php 
    while($row=$result->fetch_assoc()):
        $banen = json_decode($row['toernooi_banen']);
        $banen = implode(', ', $banen); 
?>
    <tr>
        <td><?php echo $row['toernooi_ID'];?></td>
        <td><?php echo date('d-m-Y', strtotime($row['toernooi_startdatum']));?></td>
        <td><?php echo date('d-m-Y', strtotime($row['toernooi_starttijd']));?></td>
        <td><?php echo $row['toernooi_limiet'];?></td>
        <td><?php echo $banen;?></td>
        <td><?php echo $row['toernooi_naam'];?></td>
        <td><a href="beheerToernooienEdit.php?id=<?php echo $row['toernooi_ID'];?>">bewerken </a></td>
        <td><a href="beheerToernooienDelete.php?id=<?php echo $row['toernooi_ID'];?>">verwijderen</a></td>
    </tr>
<?php endwhile; ?>

</table>
</section>
<?php include("../beheer_footer.php"); ?>
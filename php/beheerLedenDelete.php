<?php
include("database.php");

$id=$_GET['id'];

$getLidQuery = "SELECT * FROM Leden WHERE Lid_nr = '{$id}'";
$result=$conn->query($getLidQuery);
$row=$result->fetch_assoc();

if(isset($_POST['delete'])){

$ledenDeleteQuery = "DELETE FROM Leden
                     WHERE Lid_nr = {$id}";

$stmt = $conn->prepare($ledenDeleteQuery);
$stmt->execute();
$result=$stmt->get_result();
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
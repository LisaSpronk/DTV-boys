<?php
include("../database.php");
include("../beheer_header.php");

$id=$_GET['id'];


$getToernooiQuery = "SELECT * FROM Toernooien WHERE toernooi_ID = '{$id}'";
$result=$conn->query($getToernooiQuery);
$row=$result->fetch_assoc();

if(isset($_POST['delete'])){


$toernooiDeleteQuery = "DELETE FROM Toernooien
                     WHERE toernooi_ID = {$id}";

$stmt = $conn->prepare($toernooiDeleteQuery);
$stmt->execute();
$result=$stmt->get_result();
$stmt->close();

header("Location: beheerToernooien.php");
}

// include("beheerHeader.php");
// include("beheerNav.php");

?>

<section>

<h1>Weet u zeker dat u <?php echo $row['toernooi_naam'];?> wilt verwijderen?</h1>
<form method="POST">
<input type="submit" name="delete" value="verwijderen">
<a href="beheerToernooien.php"> annuleren </a>
</form>
</section>
<?php include("../beheer_footer.php"); ?>
<?php
    include('../beheer_header.php');
    include('../database.php');
    if(isset($_POST['submit'])){
    $stmt= $conn->prepare(' INSERT INTO Menu ( Menu_naam, Menu_prijs, Menu_categorie) VALUES (?,?,?)');
    $stmt->bind_param("sss", $_POST['naam'], $_POST['prijs'], $_POST['categorie']);
    $stmt->execute();
    echo"<script> window.location.href = 'http://localhost/DTV/DTV-boys/beheer/Snackhoek/overzicht.php'; </script>";
    }
?>
<div id="content_beheer">

<form method="POST">
    <input type="text" name="naam" placeholder="naam" required>
    <input type="number" name="prijs" placeholder="prijs" step="0.01" min="0,05" max="20"required>
    <input type="radio" name="categorie" value="snacks"required>
    <label for="snacks">snacks</label>
    <input type="radio" name="categorie" value="drinken"required>
    <label for="drinken">drinken</label>
    <input type="submit" name="submit" value="submit">
</form>
</div>
<?php include('../beheer_footer.php'); ?>
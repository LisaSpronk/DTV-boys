<?php
    include('database.php');
    if(isset($_POST['submit'])){
    $stmt= $conn->prepare(' INSERT INTO menu ( Menu_naam, Menu_prijs, Menu_categorie) VALUES ("?,?,?")');
    $stmt->bind_param("sis", $_POST['naam'], $_POST['prijs'], $_POST['categorie']);
    $stmt->execute();

    // $sql = 'INSERT INTO menu ( Menu_naam, Menu_prijs, Menu_categorie) VALUES ("'.$_POST['naam'].'","'.$_POST['prijs'].'","'.$_POST['categorie'].'");';
    // $conn->query($sql);
    // $conn->close();
    echo"<script> window.location.href = 'http://localhost/DTV/Menu/menuAdmin.php'; </script>";
    }
    //Sluit verbinding met database
    include('beheer_header.php');
?>
<div id="content_beheer">
<form action="menuAdd.php" method="POST">
    <input type="text" name="naam" placeholder="naam">
    <input type="number" name="prijs" placeholder="prijs" step="0.01" min="0,05" max="20">
    <input type="radio" name="categorie" value="snacks">
    <label for="snacks">snacks</label>
    <input type="radio" name="categorie" value="drinken">
    <label for="drinken">drinken</label>
    <input type="submit" name="submit" value="submit">
</form>
</div>
<?php include('beheer_footer.php'); ?>
<?php
    include('../database.php');
    $id = $_GET['id'];
    $sql1 = 'SELECT * FROM Menu WHERE Menu_id="'.$id.'"';
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();



    if(isset($_POST['save'])){
        $stmt= $conn->prepare(' UPDATE Menu SET Menu_naam = ? , Menu_prijs = ?, Menu_categorie = ? WHERE Menu_id = "'.$id.'"');
        $stmt->bind_param("sss", $_POST['naam'], $_POST['prijs'], $_POST['categorie']);
        $stmt->execute();
        $conn->close();
        echo"<script> window.location.href = 'http://localhost/DTV/DTV-boys/beheer/Snackhoek/overzicht.php'; </script>";
        
    }
include('../beheer_header.php');?>
<form  method="POST">
    <input type="text" name="naam" value ="<?php echo$row['Menu_naam'];?>" required>
    <input type="number" name="prijs" value="<?php echo$row['Menu_prijs'];?>" step="0.01" min="0,05" max="20" required>
    <?php 
    if($row['Menu_categorie']=="snacks"){
       ?>
        <input type="radio" name="categorie" value="snacks" checked required>
        <label for="snack">snacks</label>
        <input type="radio" name="categorie" value="drinken" required>
        <label for="snack">drinken</label>
        <?php
    }else{
        ?>
        <input type="radio" name="categorie" value="snacks" required>
        <label for="snack">snacks</label>
        <input type="radio" name="categorie" value="drinken" checked required>
        <label for="snack">drinken</label>
        <?php
    } ?>

    <input type="submit" name="save" value="submit">
    
</form>
<?php include('../beheer_footer.php');?>
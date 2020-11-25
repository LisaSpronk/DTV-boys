<?php
    include('database.php');
    $id = $_GET['id'];
    $sql1 = 'SELECT * FROM menu WHERE Menu_id="'.$id.'"';
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();



    if(isset($_POST['save'])){
        $stmt= $conn->prepare(' UPDATE menu SET Menu_naam = ? , Menu_prijs = ?, Menu_categorie = ? WHERE Menu_id = "'.$id.'"');
        $stmt->bind_param("sss", $_POST['naam'], $_POST['prijs'], $_POST['categorie']);
        $stmt->execute();
        $conn->close();
        echo"<script> window.location.href = 'http://localhost/DTV/Menu/menuAdmin.php'; </script>";
        
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="POST">
    <input type="text" name="naam" value ="<?php echo$row['Menu_naam'];?>">
    <input type="number" name="prijs" value="<?php echo$row['Menu_prijs'];?>" step="0.01" min="0,05" max="20">
    <?php 
    if($row['Menu_categorie']=="snacks"){
       ?>
        <input type="radio" name="categorie" value="snacks" checked>
        <label for="snack">snacks</label>
        <input type="radio" name="categorie" value="drinken">
        <label for="snack">drinken</label>
        <?php
    }else{
        ?>
        <input type="radio" name="categorie" value="snacks">
        <label for="snack">snacks</label>
        <input type="radio" name="categorie" value="drinken" checked>
        <label for="snack">drinken</label>
        <?php
    } ?>

    <input type="submit" name="save" value="submit">
    
</form>
</body>
</html>

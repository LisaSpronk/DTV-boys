<?php
    include('database.php');
    $id = $_GET['id'];
    $sql1 = 'SELECT * FROM menu WHERE Menu_id="'.$id.'"';
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    
    if(isset($_POST['submit'])){
        $sql = ' UPDATE menu SET Menu_naam = "'.$_POST['naam'].'", Menu_prijs = "'.$_POST['prijs'].'", Menu_categorie = "'.$_POST['categorie'].'" WHERE Menu_id = "'.$id.'"';
        $conn->query($sql);
        
    }
    echo $id;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="menuChange.php" method="POST">
    <input type="text" name="naam" value ='<?php echo$row['Menu_naam'];?>'>
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

    <input type="submit" name="submit" value="submit">
    
</form>
</body>
</html>
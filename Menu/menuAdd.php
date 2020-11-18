<?php
    include('database.php');
    if(isset($_POST['submit'])){
    $sql = 'INSERT INTO menu ( Menu_naam, Menu_prijs, Menu_categorie) VALUES ("'.$_POST['naam'].'","'.$_POST['prijs'].'","'.$_POST['categorie'].'");';
    $conn->query($sql);
    $conn->close();
    }
    //Sluit verbinding met database
  

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="menuAdd.php" method="POST">
    <input type="text" name="naam" placeholder="naam">
    <input type="number" name="prijs" placeholder="prijs" step="0.01" min="0,05" max="20">
    <input type="radio" name="categorie" value="snacks">
    <label for="snacks">snacks</label>
    <input type="radio" name="categorie" value="drinken">
    <label for="drinken">drinken</label>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
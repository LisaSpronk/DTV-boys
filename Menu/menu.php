<?php

    include('database.php');
    $sqlSnacks = "SELECT * FROM menu WHERE Menu_categorie ='snacks'";
    $sqlDrinken = "SELECT * FROM menu WHERE Menu_categorie ='drinken'";
    //Sluit verbinding met database
    $result = $conn->query($sqlSnacks);
    $result2 = $conn->query($sqlDrinken);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Snacks</h3>
    <ul>
    <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {   
            echo"<li>".$row['Menu_naam'];
            echo" €".$row['Menu_prijs']."</li>";
    }}?>
    </ul>
         <h3>Drinken</h3>
    <ul>
    <?php if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                echo"<li>".$row['Menu_naam'];
                echo" €".$row['Menu_prijs']."</li>";
    }}?>
    </ul>
</body>
</html>
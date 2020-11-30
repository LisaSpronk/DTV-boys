<?php

    include('database.php');
    if($_POST['categorie']=='alles'){
        $stmt= $conn->prepare(' SELECT * FROM Menu');
        $stmt->execute();
    }else{
        $stmt= $conn->prepare(' SELECT * FROM Menu WHERE Menu_categorie =?');
        $stmt->bind_param("s", $_POST['categorie']);
        $stmt->execute();
        
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
    <form method="POST">
    <input type="radio" name="categorie" value="snacks">
        <label for="snack">snacks</label>
    <input type="radio" name="categorie" value="drinken">
        <label for="snack">drinken</label>
    <input type="radio" name="categorie" value="alles" checked>
        <label for="snack">alles</label>
    <input type="submit" name="submit">
    <a href="menuAdd.php"><button>aanmaken</button></a>
    </form>
    
   <table>
       <tr>
           <th>Id</td>
           <th>Naam</td>
           <th>Prijs</td>
           <th>Categorie</td>
           <td>Bewerken</td>
           <td>Verwijderen</td>
       </tr>
    <?php 
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) { ?> 
            <tr>
            <td><?php echo $row['Menu_id']?></td>
            <td><?php echo $row['Menu_naam']?></td>
            <td>€<?php  echo $row['Menu_prijs']?></td>
            <td><?php  echo $row['Menu_categorie']?></td>
            <td><a href="menuChange.php?id=<?php echo$row['Menu_id']?>">Bewerken</a></td>
            <td><a href="menuDelete.php?id=<?php echo$row['Menu_id']?>">Verwijderen</a></td>
            </tr>         
    <?php  }?>
    </table>
</body>
</html>
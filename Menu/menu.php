<?php

    include('database.php');
    if($_POST['categorie']=='alles'){
        $stmt= $conn->prepare(' SELECT * FROM menu');
        $stmt->execute();
    }else{
        $stmt= $conn->prepare(' SELECT * FROM menu WHERE Menu_categorie =?');
        $stmt->bind_param("s", $_POST['categorie']);
        $stmt->execute();
        
    }
    
    //Sluit verbinding met database
    $result = $conn->query($sql);
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
    <input type="radio" name="categorie" value="alles">
        <label for="snack">alles</label>
    </form>
    <table>
       <tr>
           <th>Id</td>
           <th>Naam</td>
           <th>Prijs</td>
       </tr>
    <?php if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {  ?> 
            <tr>
            <td><?php echo $row['Menu_id']?></td>
            <td><?php echo $row['Menu_naam']?></td>
            <td>€<?php  echo $row['Menu_prijs']?></td>
            </tr>         
    <?php  }}?>
    </table>
</body>
</html>
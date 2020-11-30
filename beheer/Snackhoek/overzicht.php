<?php
    include('../beheer_header.php');
    include('../database.php');
    $stmt= $conn->prepare(' SELECT * FROM menu');
    if(isset($_POST['submit'])){
        if($_POST['categorie']=='alles'){
            $stmt= $conn->prepare(' SELECT * FROM menu');
            $stmt->execute();
        }else{
            $stmt= $conn->prepare(' SELECT * FROM menu WHERE Menu_categorie =?');
            $stmt->bind_param("s", $_POST['categorie']);
            $stmt->execute();
            
        }
    }
    $stmt->execute();
    //Sluit verbinding met database
   
?>
<div id="content_beheer">
    <form method="POST">
    <input type="radio" name="categorie" value="snacks" >
        <label for="snack">snacks</label>
    <input type="radio" name="categorie" value="drinken">
        <label for="snack">drinken</label>
    <input type="radio" name="categorie" value="alles">
        <label for="snack">alles</label>
    <input type="submit" name="submit" value="select">
    <a href="toevoegen.php">aanmaken</a>
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
            <td><a href="bewerken.php?id=<?php echo$row['Menu_id']?>">Bewerken</a></td>
            <td><a href="verwijderen.php?id=<?php echo$row['Menu_id']?>">Verwijderen</a></td>
            </tr>         
    <?php  }?>
    </table>
</div>
<?php include('../beheer_footer.php'); ?>
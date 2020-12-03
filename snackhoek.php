<?php

include("php/header.php");

include('database.php');
$title="Drinken";
$stmt= $conn->prepare('SELECT * FROM Menu WHERE Menu_categorie ="drinken"');
if(isset($_POST['drinken'])){
    $title="Drinken";
    $stmt= $conn->prepare('SELECT * FROM Menu WHERE Menu_categorie ="drinken"');
    $stmt->execute();
} 
if(isset($_POST['snacks'])){
    $stmt= $conn->prepare('SELECT * FROM Menu WHERE Menu_categorie ="snacks"');
    $title="Snacks";
    $stmt->execute();
} 
$stmt->execute();
//Sluit verbinding met database
?>

    <section class="u-clearfix u-section-1" id="sec-a572">
      <div class="u-clearfix u-sheet u-sheet-1">
      <div class="content">
     <div class="left">
     <form method="POST">
        <input type="submit" class="button1" name="drinken" value="Drinken">
        <input type="submit" class="button1" name="snacks" value="Snacks">
    </form>
    <h1><?php echo $title;?></h1>
    <table>
       <tr>
           <th>Naam</td>
           <th>Prijs</td>
       </tr>
       <?php 
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) { ?> 
            <tr>
            <td><?php echo $row['Menu_naam']?></td>
            <td>€<?php  echo $row['Menu_prijs']?></td>
            </tr>         
    <?php  }?>
    </table>
     </div>
    <div class="right">
    <img src="images/Peijnenburg_Frans Bauer.jpg" alt="frans">
    </div>
   
    </div>
    </div>
    </section>

<?php
    include("php/footer.php");

?>
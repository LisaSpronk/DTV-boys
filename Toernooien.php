<?php 
  include("php/header.php");

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    

    $sql = "SELECT * FROM Toernooien";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {
      // output data of each row
      
      
      while($row = $result->fetch_assoc()) {
        
        echo 
        "<table class='update_table'>" . "<th>Toernooi ID</th>" . "<td>" .$row["toernooi_ID"] . "</td>" . "<th>- Toernooi naam: </th>" . "<td>" .$row["toernooi_naam"]. "</td>" . "<th>- Baan: </th>" . "<td>" . $row["toernooi_banen"]. "</td> " . "<th> - toernooi startdatum </th>" . "<td>" . $row["toernooi_startdatum"]. "</td>" . "<th><form action='update.php'>
        <input type='submit' value='Deelnemen' /></th>" . "<br></table>";
      }
    }
  

    $conn->close();

    
      
  }else {
    echo "<h1>U bent niet bemachtigd om deze pagina te kunnen bekijken.</h1>";
  };
?>

    

    
    <div>
     
      <?php 
       
      ?>                     
     

    </div>
    <?php include('php/footer.php'); ?>
  </body>
</html>
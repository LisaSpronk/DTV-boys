<?php
  include('database.php');
$id = $_GET['id'];
$sql = "SELECT * FROM menu WHERE Menu_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            echo"<li>".$row['Menu_naam'];
            echo" €".$row['Menu_prijs']."</li>";
?>    
</body>
</html>
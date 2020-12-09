<?php
include('database.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.css">
    <link rel="stylesheet" href="reserveren.css">
    <title>Document</title>
</head>
<body>
    

<table class="ui celled table" style="border-color:white;">
    <thead>
        <tr>
        <th>Reservering nummer</th>
        <th>Lid nummer</th>
        <th>Baan code</th>
        <th>Reservering datum</th>
        <th>Reservering tijd</th>
        <th>Optie</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $sql = "SELECT * FROM Reservering";
    $result = $conn->query($sql); 

    while ($row = $result->fetch_assoc()) { ?>  
    <tr>
            <td><?php echo $row['Reservering_nr']?></td>
            <td><?php echo $row['Lid_nr']?></td>
            <td><?php echo $row['Baan_code']?></td>
            <td><?php echo $row['Reservering_datum']?></td>
            <td><?php echo $row['Reservering_tijd']?></td>
            <td><a href="reserveren_delete.php?id=<?php echo$row['Reservering_nr']?>"><button class="ui red button">Delete</button></a></td>
    </tr>
    </tbody>
   <?php }; ?>
    
</table>
<a href="reserveren_add.php"><button class="ui green button">New</button></a>
</body>
</html>
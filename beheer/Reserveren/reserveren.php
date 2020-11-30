<?php
include('database.php');

if(isset($_POST['reserveer'])){
    foreach($_POST['baan[]'] as $baan){
        foreach($_POST['tijd[]'] as $tijd){
        $stmt= $conn->prepare("SELECT * FROM reservering WHERE Baan_code={$baan} AND Reservering_datum={$_POST['dag']} AND Reservering_tijd={$tijd}");
            $stmt->execute();
        }

        }
}
if(isset($_POST['reserveer'])){
  
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST">
    <select name="baan[]" id=""multiple>

    </select>
    <select name="dag" id="">

    </select>
    <select name="tijd[]" id=""multiple>

    </select>
    <input type="submit" value="Reserveer" name="reserveer">

    </form>
</body>
</html>
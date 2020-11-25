<?php 

    $host = '185.87.187.247';
    $dbuser = 'lspronk_dtv';
    $dbpass = 'FransjeB12';
    $dbname = 'lspronk_DTV';
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

    //Krijg je alle leden die mee doen aan een toernooi
    //SELECT * FROM Leden INNER JOIN Toernooien ON Lid_toernooi = toernooi_ID
?>
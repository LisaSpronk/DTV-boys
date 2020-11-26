<?php

include("php/header.php");

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    if(isset($_POST['submit-reservation'])){
        //reserveren($_SESSION['gebruiker']->getLidnr(), $_POST['baancode'], $_POST['datum'], $_POST['time']);
        $host = '185.87.187.247';
        $dbuser = 'lspronk_dtv';
        $dbpass = 'FransjeB12';
        $dbname = 'lspronk_DTV';
        $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
        if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

        $lidnr = $_SESSION['gebruiker']->getLidnr();
        $baancode = $_POST['baancode'];
        $reserveringdatum = $_POST['datum'];
        $reserveringtijd = $_POST['time'];
    
        $stmt = $conn->prepare('INSERT INTO Reservering (Lid_nr, Baan_code, Reservering_datum, Reservering_tijd) VALUES (?, ?, ?, ?)');
        $stmt->bind_param("isss", $lidnr, $baancode, $reserveringdatum, $reserveringtijd);
        $stmt->execute();
    }
    
    // function reserveren($lidnr, $baancode, $reserveringdatum, $reserveringtijd) {
        
    // }

} else {
    echo "kan niet";
}



?>
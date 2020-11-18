<?php

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    login($_POST["email"], $_POST["wachtwoord"]);
}


function login($email, $wachtwoord){
    //Maak verbinding met database
    $host = 'localhost';
    $dbuser = 'lspronk_dtv';
    $dbpass = 'FransjeB12';
    $dbname = 'lspronk_DTV';
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}


    $stmt = $conn->prepare('SELECT * FROM Leden WHERE Lid_email= ? AND Lid_wachtwoord = ?;');
    $stmt->bind_param("ss", $_POST['email'], $_POST['wachtwoord']);   
    $stmt->execute();
    
    //vraag resultaat
    $result = $stmt->get_result()->fetch_assoc();

    //Sluit verbinding met database
    $conn->close();

    //Onderneem actie op basis van resultaat
    if ($result == null) {
        echo "<script>alert('Incorrecte gegevens!');</script>";
        //echo "<script>window.location.href = 'http://ldiks.gc-webhosting.nl/security/pwa/index.php' </script>";
    } else {
        echo "<script>alert('Succes!');</script>";

        //echo "<script>window.location.href = 'http://ldiks.gc-webhosting.nl/security/pwa/homepage.php' </script>";
    }
}

?>
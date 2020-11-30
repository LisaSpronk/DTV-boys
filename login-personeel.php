<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    login($_POST["personeel_email"], $_POST['personeel_wachtwoord']); 
}


function login($email, $wachtwoord){
    //Maak verbinding met database
    $host = '185.87.187.247';
    $dbuser = 'lspronk_dtv';
    $dbpass = 'FransjeB12';
    $dbname = 'lspronk_DTV';
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}


    $stmt = $conn->prepare('SELECT * FROM Personeel WHERE Personeel_email= ? AND Personeel_wachtwoord = ?;');
    $stmt->bind_param("ss", $email, $wachtwoord);   
    $stmt->execute();
    
    //vraag resultaat
    $result = $stmt->get_result()->fetch_assoc();

    //Sluit verbinding met database
    $conn->close();

    //Onderneem actie op basis van resultaat
    if ($result == null) {
        echo "<script>alert('Incorrecte gegevens!');</script>";

        echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV/inloggen.php' </script>";
    } else {
        echo "<script>alert('Succes!');</script>";

        //echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV/inloggen.php' </script>";
        
    }
}

?>
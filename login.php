<?php

if(isset($_POST['login-submit'])){
    login($_POST["email"], hash('sha256', $_POST['wachtwoord'])); 
}


function login($email, $wachtwoord){
    //Maak verbinding met database
    $host = '185.87.187.247';
    $dbuser = 'lspronk_dtv';
    $dbpass = 'FransjeB12';
    $dbname = 'lspronk_DTV';
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

    $stmt = $conn->prepare('SELECT * FROM Leden WHERE Lid_email= ? AND Lid_wachtwoord = ?;');
    $stmt->bind_param("ss", $email, $wachtwoord);   
    $stmt->execute();
    
    //vraag resultaat
    $result = $stmt->get_result()->fetch_assoc();

    //Sluit verbinding met database
    $conn->close();

    //Onderneem actie op basis van resultaat
    if ($result == null) {
        echo "<script>alert('Incorrecte gegevens!');</script>";

        //echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV/inloggen.php' </script>";
    } else {
        echo "<script>alert('Succes!');</script>";
        session_start();
        include("php/lid.php");
        header('Location:index.php');
        $lid = new Lid();
        $lid->setLidnr($result['Lid_nr']);
        $lid->setVoornaam($result['Lid_voornaam']);
        $lid->setTussenvoegsel($result['Lid_tussenvoegsel']);
        $lid->setAchternaam($result['Lid_achternaam']);
        $lid->setWachtwoord($result['Lid_wachtwoord']);
        $lid->setStraat($result['Lid_straat']);
        $lid->setHuisnr($result['Lid_huisnr']);
        $lid->setWoonplaats($result['Lid_woonplaats']);
        $lid->setTelefoonnr($result['Lid_telefoonnr']);
        $lid->setEmail($result['Lid_email']);
        $lid->setGeslacht($result['Lid_geslacht']);
        $lid->setGeboortedatum($result['Lid_geboortedatum']);
        $lid->setLidsinds($result['Lid_sinds']);

        $_SESSION['gebruiker'] = $lid;
        $_SESSION['loggedin'] = true;


        //echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV/index.html' </script>";
    }
}

?>
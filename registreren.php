<?php
//Als loginformulier reeds werd verzonden
if($_SERVER["REQUEST_METHOD"] == "POST"){
    signup($_POST["voornaam"], $_POST["tussenvoegsel"], $_POST["achternaam"], hash('sha256', $_POST['wachtwoord']), $_POST["straat"], $_POST["huisnr"], $_POST["woonplaats"], $_POST["telefoonnr"], $_POST["email"], $_POST["geslacht"], $_POST["geboortedatum"]);
}

function signup($voornaam, $tussenvoegsel, $achternaam, $wachtwoord, $straat, $huisnr, $woonplaats, $telefoonnr, $email, $geslacht, $geboortedatum){
    //Maak verbinding met database
    $host = '185.87.187.247';
    $dbuser = 'lspronk_dtv';
    $dbpass = 'FransjeB12';
    $dbname = 'lspronk_DTV';
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}


    $stmt = $conn->prepare('INSERT INTO Leden (Lid_voornaam, Lid_tussenvoegsel, Lid_achternaam, Lid_wachtwoord, Lid_straat, Lid_huisnr, Lid_woonplaats, Lid_telefoonnr, Lid_email, Lid_geslacht, Lid_geboortedatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param("sssssssssss", $voornaam, $tussenvoegsel, $achternaam, $wachtwoord, $straat, $huisnr, $woonplaats, $telefoonnr, $email, $geslacht, $geboortedatum);
    $stmt->execute();

        echo "<script>alert('Succes');</script>";

        //Sluit verbinding met database
        $conn->close();
    
}

?>
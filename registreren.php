<?php
//Als loginformulier reeds werd verzonden

if($_SERVER["REQUEST_METHOD"] == "POST"){
    signup($_POST["voornaam"], $_POST["tussenvoegsel"], $_POST["achternaam"], hash('sha256', $_POST['wachtwoord']), $_POST["straat"], $_POST["huisnr"], $_POST["woonplaats"], $_POST["telefoonnr"], $_POST["email"], $_POST["geslacht"], $_POST["geboortedatum"]);
}

function signup($voornaam, $tussenvoegsel, $achternaam, $wachtwoord, $straat, $huisnr, $woonplaats, $telefoonnr, $email, $geslacht, $geboortedatum){
    //Maak verbinding met database
    include("php/database.php");

    $sql = "SELECT * FROM Leden WHERE Lid_email='$email'";
    $result = $conn->query($sql);
    if($result->num_rows >= 1){
        echo "<script>alert('Dit e-mailadres word al gebruikt!');</script>";
        echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV-boys/Registreren-page.php' </script>";
    } else{
        $stmt = $conn->prepare('INSERT INTO Leden (Lid_voornaam, Lid_tussenvoegsel, Lid_achternaam, Lid_wachtwoord, Lid_straat, Lid_huisnr, Lid_woonplaats, Lid_telefoonnr, Lid_email, Lid_geslacht, Lid_geboortedatum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param("sssssssssss", $voornaam, $tussenvoegsel, $achternaam, $wachtwoord, $straat, $huisnr, $woonplaats, $telefoonnr, $email, $geslacht, $geboortedatum);
        $stmt->execute();
        echo "<script>alert('Je bent geregistreerd!');</script>";
        echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV-boys/' </script>";
    }

    $conn->close();
    
}

?>
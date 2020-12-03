<?php

include("php/header.php");


if(isset($_POST['profiel-wijzigen'])){
    
    include("database.php");

    $lidnr = $_SESSION['gebruiker']->getLidnr();

    $ledenEditQuery = "UPDATE Leden SET Lid_voornaam = ?,  Lid_tussenvoegsel = ? , Lid_achternaam = ?, Lid_straat = ?, Lid_huisnr = ?, Lid_woonplaats = ?, Lid_telefoonnr = ?, Lid_email = ?, Lid_geboortedatum = ? WHERE Lid_nr = '$lidnr'";

    $stmt = $conn->prepare($ledenEditQuery);
    $stmt->bind_param("sssssssss", $_POST["voornaam"], $_POST["tussenvoegsel"], $_POST["achternaam"], $_POST["straat"], $_POST["huisnr"], $_POST["woonplaats"], $_POST["telefoonnr"], $_POST["email"], $_POST["geboortedatum"]);
    $stmt->execute();

    $getLidQuery = "SELECT * FROM Leden WHERE Lid_nr = '$lidnr'";
    $result=$conn->query($getLidQuery);
    $row=$result->fetch_assoc();

    $_SESSION['gebruiker']->setLidnr($row['Lid_nr']);
    $_SESSION['gebruiker']->setVoornaam($row['Lid_voornaam']);
    $_SESSION['gebruiker']->setTussenvoegsel($row['Lid_tussenvoegsel']);
    $_SESSION['gebruiker']->setAchternaam($row['Lid_achternaam']);
    $_SESSION['gebruiker']->setWachtwoord($row['Lid_wachtwoord']);
    $_SESSION['gebruiker']->setStraat($row['Lid_straat']);
    $_SESSION['gebruiker']->setHuisnr($row['Lid_huisnr']);
    $_SESSION['gebruiker']->setWoonplaats($row['Lid_woonplaats']);
    $_SESSION['gebruiker']->setTelefoonnr($row['Lid_telefoonnr']);
    $_SESSION['gebruiker']->setEmail($row['Lid_email']);
    $_SESSION['gebruiker']->setGeslacht($row['Lid_geslacht']);
    $_SESSION['gebruiker']->setGeboortedatum($row['Lid_geboortedatum']);
    $_SESSION['gebruiker']->setLidsinds($row['Lid_sinds']);

    echo '<script>alert("Gegevens succesvol bijgewerkt!");</script>';
    echo "<script>window.location.href = 'http://lspronk.gc-webhosting.nl/DTV-boys/profiel-pagina.php' </script>";
}
?>

<div class="profiel-pagina">
    <nav class="side-nav">
        <ul>
            <li><a href="profiel-pagina.php"> Beheer gegevens </a></li>
            <li> <a href="#"> Reserveringen </a> </li>
            <li> <a href="#"> Toernooien </a> </li>
        </ul>
    </nav>

    <section class="profiel-gegevens profiel-active" id="#profiel-gegevens">
    <form action="Profiel-wijzigen.php" method="POST" class="form-registreren">
        <div class="form-gegevens form-gegevens-naam">
            <label for="voornaam" class="u-form-control-hidden u-label">Voornaam</label>
            <input type="text" placeholder="Voornaam" value="<?php echo $_SESSION['gebruiker']->getVoornaam(); ?>" id="voornaam" name="voornaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-voornaam" required="">
    
            <label for="tussenvoegsel" class="u-form-control-hidden u-label">Tussenvoegsel</label>
            <input type="text" placeholder="Tussenvoegsel" value="<?php echo $_SESSION['gebruiker']->getTussenvoegsel(); ?>" id="tussenvoegsel" name="tussenvoegsel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-tussenvoegsel">
    
            <label for="achternaam" class="u-form-control-hidden u-label">Achternaam</label>
            <input type="text" placeholder="Achternaam*" value="<?php echo $_SESSION['gebruiker']->getAchternaam(); ?>" id="achternaam" name="achternaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-achternaam" required="">
        </div>

            <label for="email" class="u-form-control-hidden u-label">Email</label>
            <input type="email" placeholder="E-mailadres*" value="<?php echo $_SESSION['gebruiker']->getEmail(); ?>" id="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        
        <div class="form-gegevens form-gegevens-adres">
            <label for="straat" class="u-form-control-hidden u-label">Straat</label>
            <input type="text" placeholder="Straat*" value="<?php echo $_SESSION['gebruiker']->getStraat(); ?>" id="straat" name="straat" class="form-straat u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

            <label for="huisnr" class="u-form-control-hidden u-label">huisnr</label>
            <input type="text" placeholder="Huisnummer*" value="<?php echo $_SESSION['gebruiker']->getHuisnr(); ?>" id="huisnr" name="huisnr" class="form-huisnr u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

            <label for="woonplaats" class="u-form-control-hidden u-label">woonplaats</label>
            <input type="text" placeholder="Woonplaats*" value="<?php echo $_SESSION['gebruiker']->getWoonplaats(); ?>" id="woonplaats" name="woonplaats" class="form-woonplaats u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        </div>
      
            <label for="telefoonnr" class="u-form-control-hidden u-label">Telefoonnr</label>
            <input type="tel" placeholder="Telefoonnummer*" value="<?php echo $_SESSION['gebruiker']->getTelefoonnr(); ?>" id="telefoonnr" name="telefoonnr" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

            <label for="geboortedatum" class="u-form-control-hidden u-label"></label>
            <input type="date" placeholder="Geboortedatum" value="<?php echo $_SESSION['gebruiker']->getGeboortedatum(); ?>" id="geboortedatum" name="geboortedatum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <input type="submit" class="btn" value="gegevens wijzigen" name="profiel-wijzigen">
      </form>
    </section>

</div>
<?php

include("php/footer.php");

?>
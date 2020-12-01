<?php

include("php/header.php");

?>

<div class="profiel-pagina">
    <nav class="side-nav">
        <ul>
            <li><a href=""> Beheer gegevens </a></li>
            <li> <a href=""> Reserveringen </a> </li>
            <li> <a href=""> Toernooien </a> </li>
        </ul>
    </nav>

    <section class="profiel-gegevens profiel-active" id="#profiel-gegevens">
        <h4> <?php echo $_SESSION['gebruiker']->getVoornaam() . " " . $_SESSION['gebruiker']->getTussenvoegsel() . " " . $_SESSION['gebruiker']->getAchternaam(); ?> </h4>
        <p> <?php echo $_SESSION['gebruiker']->getEmail(); ?> </p>

        <div class="profiel-gegevens--adres">
            <p class="p-bold"> Adres </p>
            <p> <?php echo $_SESSION['gebruiker']->getStraat() . " " . $_SESSION['gebruiker']->getHuisnr(); ?> </p>
            <p> <?php echo $_SESSION['gebruiker']->getWoonplaats(); ?> </p>
            <p> Nederland </p>
        </div>

        <div class="profiel-gegevens--overig">
            <p class="p-bold"> Overige gegevens </p>
            <p> Geboortedatum: <?php echo $_SESSION['gebruiker']->getGeboortedatum(); ?> </p>
            <p> Telefoonnummer: <?php echo $_SESSION['gebruiker']->getTelefoonnr(); ?> </p>
            <p> Lidnummer: <?php echo $_SESSION['gebruiker']->getLidnr(); ?> </p>
        </div>

        <div class="gegevens-wijzigen">
            <a href="profiel-wijzigen.php" class="wijzigen"> <i class="fas fa-user-edit"></i> Gegevens wijzigen </a>
            <a href="#" class="verwijder-account"> Verwijder account </a>
        </div>
    </section>

    <section class="profiel-reserveringen">
        <p>hoi</p>
    </section>

    <section class="profiel-toernooien">
        <p>hoi</p>
    </section>
</div>

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__text">
            <a href="#" class="popup__close">&times;</a>
            <h4> Weet je zeker dat je het account wilt verwijderen?</h4>
            <a href="profiel-verwijderen.php" class="a-text"> Ja </a> 
            <a href="#" class="a-text"> Nee </a>
        </div>
    </div>
</div>


<?php

include("php/footer.php");

?>
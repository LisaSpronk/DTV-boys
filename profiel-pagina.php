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

    <section class="profiel-gegevens profiel-active">
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
            <p> Telefoonnummer: </p>
            <p> Lidnummer: </p>
        </div>
    </section>

    <section class="profiel-reserveringen">
        <p>hoi</p>
    </section>

    <section class="profiel-toernooien">
        <p>hoi</p>
    </section>
</div>


<?php

include("php/footer.php");

?>
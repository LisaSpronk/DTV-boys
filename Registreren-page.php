<?php

  include("php/header.php");

?>


    <!-- <div class="registreren-pagina">
      <form action="registreren.php" method="post" class="form-signin" enctype="multipart/form-data">
        <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mailadres" required>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <input type="file" id="profielfoto" name="profielfoto" >  
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign-up" name="submit">
      </form>
    </div> -->

    <div class="registreren-pagina">
      <form action="registreren.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" source="custom" name="form">
        <div class="u-form-group u-form-name form-naam">
          <label for="voornaam" class="u-form-control-hidden u-label">Voornaam</label>
          <input type="text" placeholder="Voornaam*" id="voornaam" name="voornaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-voornaam" required="">
  
          <label for="tussenvoegsel" class="u-form-control-hidden u-label">Tussenvoegsel</label>
          <input type="text" placeholder="Tussenvoegsel" id="tussenvoegsel" name="tussenvoegsel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-tussenvoegsel">
  
          <label for="achternaam" class="u-form-control-hidden u-label">Achternaam</label>
          <input type="text" placeholder="Achternaam*" id="achternaam" name="achternaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-achternaam" required="">
        </div>

        <div class="u-form-email u-form-group">
          <label for="email" class="u-form-control-hidden u-label">Email</label>
          <input type="email" placeholder="E-mailadres*" id="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        </div>

        <div class="u-form-address u-form-group u-form-group-3 form-adres">
          <label for="straat" class="u-form-control-hidden u-label">Straat</label>
          <input type="text" placeholder="Straat*" id="straat" name="straat" class="form-straat u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="huisnr" class="u-form-control-hidden u-label">huisnr</label>
          <input type="text" placeholder="Huisnummer*" id="huisnr" name="huisnr" class="form-huisnr u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="woonplaats" class="u-form-control-hidden u-label">woonplaats</label>
          <input type="text" placeholder="Woonplaats*" id="woonplaats" name="woonplaats" class="form-woonplaats u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        </div>

        <div class="u-form-group u-form-phone u-form-group-4">
          <label for="telefoonnr" class="u-form-control-hidden u-label">Telefoonnr</label>
          <input type="tel" placeholder="Telefoonnummer* (bijv. +31 6 12345678)" id="telefoonnr" name="telefoonnr" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        </div>

        <div class="u-form-date u-form-group u-form-group-5">
          <label for="geboortedatum" class="u-form-control-hidden u-label"></label>
          <input type="date" placeholder="Geboortedatum" id="geboortedatum" name="geboortedatum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        </div>

        <div class="u-form-group u-form-radiobutton u-form-group-7">
          <label for="text-478b" class="u-form-control u-label">Geslacht</label>
          <div class="u-form-radio-button-wrapper form-geslacht">
            <input type="radio" name="geslacht" value="Man" required="required">
            <label class="u-label" for="geslacht">Man</label>
            <br>
            <input type="radio" name="geslacht" value="Vrouw" required="required">
            <label class="u-label" for="geslacht">Vrouw</label>
            <br>
            <input type="radio" name="geslacht" value="Anders" required="required">
            <label class="u-label" for="geslacht">Anders</label>
            <br>
          </div>
        </div>

        <div class="u-form-group u-form-group-6">
          <label for="wachtwoord" class="u-form-control-hidden u-label"></label>
          <input type="password" placeholder="Wachtwoord*" id="wachtwoord" name="wachtwoord" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
        </div>

        <div class="u-form-group u-form-group-6">
          <label for="wachtwoord-opnieuw" class="u-form-control-hidden u-label"></label>
          <input type="password" placeholder="Wachtwoord (opnieuw)*" id="wachtwoord-opnieuw" name="wachtwoord-opnieuw" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
        </div>

        <input type="submit" class="btn" value="registreren" name="submit">
      </form>
    </div>



    <!-- <form action="registreren.php" method="POST">
          <label for="voornaam" class="u-form-control-hidden u-label">Voornaam</label>
          <input type="text" placeholder="Voornaam*" id="voornaam" name="voornaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-voornaam" required="">
  
          <label for="tussenvoegsel" class="u-form-control-hidden u-label">Tussenvoegsel</label>
          <input type="text" placeholder="Tussenvoegsel" id="tussenvoegsel" name="tussenvoegsel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-tussenvoegsel">
  
          <label for="achternaam" class="u-form-control-hidden u-label">Achternaam</label>
          <input type="text" placeholder="Achternaam*" id="achternaam" name="achternaam" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white form-achternaam" required="">

          <label for="email" class="u-form-control-hidden u-label">Email</label>
          <input type="email" placeholder="E-mailadres*" id="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="straat" class="u-form-control-hidden u-label">Straat</label>
          <input type="text" placeholder="Straat*" id="straat" name="straat" class="form-straat u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="huisnr" class="u-form-control-hidden u-label">huisnr</label>
          <input type="text" placeholder="Huisnummer*" id="huisnr" name="huisnr" class="form-huisnr u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="woonplaats" class="u-form-control-hidden u-label">woonplaats</label>
          <input type="text" placeholder="Woonplaats*" id="woonplaats" name="woonplaats" class="form-woonplaats u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="telefoonnr" class="u-form-control-hidden u-label">Telefoonnr</label>
          <input type="tel" placeholder="Telefoonnummer* (bijv. +31 6 12345678)" id="telefoonnr" name="telefoonnr" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="geboortedatum" class="u-form-control-hidden u-label"></label>
          <input type="date" placeholder="Geboortedatum" id="geboortedatum" name="geboortedatum" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">

          <label for="text-478b" class="u-form-control u-label">Geslacht</label>
          <div class="u-form-radio-button-wrapper form-geslacht">
            <input type="radio" name="geslacht" value="Man" required="required">
            <label class="u-label" for="geslacht">Man</label>
            <br>
            <input type="radio" name="geslacht" value="Vrouw" required="required">
            <label class="u-label" for="geslacht">Vrouw</label>
            <br>
            <input type="radio" name="geslacht" value="Anders" required="required">
            <label class="u-label" for="geslacht">Anders</label>
            <br>
          </div>

          <label for="wachtwoord" class="u-form-control-hidden u-label"></label>
          <input type="password" placeholder="Wachtwoord*" id="wachtwoord" name="wachtwoord" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
        
          <label for="wachtwoord-opnieuw" class="u-form-control-hidden u-label"></label>
          <input type="password" placeholder="Wachtwoord (opnieuw)*" id="wachtwoord-opnieuw" name="wachtwoord-opnieuw" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">

        <input type="submit" class="btn" value="registreren" name="submit">
    </form> -->
    
<?php

include("php/footer.php");

?>
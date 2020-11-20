<?php

  include("php/header.html");

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
          <label for="wachtwoord" class="u-form-control-hidden u-label"></label>
          <input type="password" placeholder="Wachtwoord (opnieuw)*" id="wachtwoord" name="wachtwoord" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
        </div>
        
        <input type="submit" value="registreren" class="submitbtn" name="submit">
      </form>
    </div>
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-57e3"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1ee1"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-1ee1"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f0d1"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f0d1"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7015"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-7015"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-linkedin u-social-type-logo u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b11b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-b11b"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg></span>
          </a>
        </div>
        <p class="u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-1"><b>Kom langs<br></b>Straat + huisnr<br>Postcode + plaats
        </p>
        <p class="u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-2"><b>Kom in contact</b>
          <br>06-12345678<br>voorbeeld@gmail.com
        </p>
        <a href="Inloggen.html" data-page-id="22327776" class="u-btn u-button-style u-none u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white u-btn-1">Inloggen</a>
        <p class="u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-3"><b>Inloggen/Registreren</b>
        </p>
        <a href="Registreren.html" data-page-id="236883568" class="u-btn u-button-style u-none u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white u-btn-2">Registreren</a>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>Free WYSIWYG HTML Editor</span>
      </a>. 
    </section>
  </body>
</html>
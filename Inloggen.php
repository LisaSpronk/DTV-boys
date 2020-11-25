<?php

  include("php/header.php");

?>

    <div class="inloggen-pagina">
      <h2>Inloggen</h2>
      <div class="inloggen">
        <div class="login-leden">
          <h3>Leden</h3>
          <form action="login.php" method="post" class="form-signin">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mailadres" required autofocus>
              <input type="password" id="inputWachtwoord" name="wachtwoord" class="form-control" placeholder="Wachtwoord" required>
              <input  type="submit" class="btn-primary" value="Login">
          </form>
        </div>

        <div class="login-personeel">
          <h3>Personeel</h3>
          <form action="login-personeel.php" method="post" class="form-signin">
            <input type="email" id="inputEmail" name="personeel_email" class="form-control" placeholder="E-mailadres" required autofocus>
            <input type="password" id="inputWachtwoord" name="personeel_wachtwoord" class="form-control" placeholder="Wachtwoord" required>
            <input  type="submit" class="btn-primary" value="Login">
          </form>
        </div>
      </div>
      <p class="p-registreren">Nog geen account?</p>
      <a href="registreren-page.php" class="a-registreren">Registreren <i class="fas fa-arrow-right"></i></a>
    </div>

<?php

include("php/footer.php");

?>
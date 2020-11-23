<?php 
      include("php/lid.php");
      include("login.php");
      session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Homepage</title>

    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Homepage.css" media="screen">
    <link rel="stylesheet" href="css/Inloggen.css" media="screen">
    <link rel="stylesheet" href="css/Registreren.css" media="screen">
    <link rel="stylesheet" href="css/Banen-reserveren.css" media="screen">
    <link rel="stylesheet" href="css/Toernooien.css" media="screen">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- <link rel="stylesheet" href="header.css" media="screen"> -->

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 2.30.1, nicepage.com">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.php",
		"logo": "images/default-logo.png",
		"sameAs": []
    }</script>
    <meta property="og:title" content="Homepage">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
    <link rel="stylesheet" href="header.css">
  </head> 
  <body class="u-body u-overlap u-overlap-transparent">
      
  <header class="u-align-right u-clearfix u-header u-header" id="sec-f56c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
          <img src="images/logo-transparant.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-right u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-custom-color-1 u-text-body-color u-text-hover-custom-color-1" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol>
              </defs>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-body-color u-text-hover-custom-color-1" href="index.php" style="padding: 10px 20px;">Home</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-body-color u-text-hover-custom-color-1" href="Banen-reserveren.php">Banen reserveren</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-body-color u-text-hover-custom-color-1" href="Toernooien.php">Toernooien</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-1 u-text-body-color u-text-hover-custom-color-1" href="Snackhoek.php">Snackhoek</a></li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Banen-reserveren.php">Banen reserveren</a>
                    </li
                    ><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Toernooien.php">Toernooien</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Snackhoek.php">Snackhoek</a>
                    </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "<a href='Inloggen.php' data-page-id='22327776' class='u-btn u-btn-round u-button-style u-custom-color-1 u-radius-50 u-btn-1'><i class='fas fa-user'></i> Welkom " . $_SESSION['gebruiker']->getVoornaam() . "!</a>
          <a href='Registreren-page.php' data-page-id='236883568' class='u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-2'>Uitloggen</a>
          ";
      } else {
        echo "<a href='Inloggen.php' data-page-id='22327776' class='u-btn u-btn-round u-button-style u-custom-color-1 u-radius-50 u-btn-1'>Inloggen</a>
        <a href='Registreren-page.php' data-page-id='236883568' class='u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-2'>Registreren</a>";
      }
      ?>
        
      </div>
 </header>

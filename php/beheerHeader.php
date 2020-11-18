<?php
    include('user.php');
    session_start();
    include('database.php');
    $user = $_SESSION['user'];
    
    

//   Sluit verbinding met database
  $conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- jQuery via CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="beheer.css">
</head>
<body>

<div id="beheer_header_container">

<div class="header_logo">
    <img src="images/logo.png" alt="logo Doetinchemse Tennis Vereniging">
</div>

<div class="header_gebruiker">

        <img src="images/profielfoto/<?php echo $_SESSION['user']->getProfielfoto();?>">
        <span> Welkom <span>
        <span> <?php echo $_SESSION['user']->getUsername();?> <span>

</div>

<div class="header_uitloggen">
</div>



</div>





</body>
</html> 

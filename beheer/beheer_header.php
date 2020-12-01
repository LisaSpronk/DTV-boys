<?php
// if($_SESSION['beheer']!== True){
//     echo "<script>window.location.replace = 'http://lspronk.gc-webhosting.nl/DTV/inloggen.php' </script>";
//     echo "<script>alert('U bent niet gemachtiged om deze pagina te bezoeken!');</script>";
// }
/*Omdat het beheer nog niet op de server staat en de verschillende linkjes niet overeen komen om goed te navigeren tussen de pagina's heeft het op het moment niet veel zin om het uit te proberen.(Teun)*/
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$url1="";
$url2="";
$url3="";
$url4="";
if (strpos($url,'Snackhoek') !== false) {
    $snackhoek="inactiveLink";
    $url1="../";
    $url2="../";
    $url3="../";
}
if (strpos($url,'Leden') !== false) {
    $leden="inactiveLink";
    $url2="../";
    $url3="../";
    $url4="../";
    
}
if (strpos($url,'index') !== false) {
    $home="inactiveLink";
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <div id="container_beheer">
        <header>
            <div class="sides">
            <button onclick="history.go(-1);">Terug</button>
            </div>
            <nav>
                <div class="item"><a class="<?php echo$home; ?>" href="../index.php">Home</a></div>
                <div class="item"><a class="<?php echo$Leden?>" href="<?php echo$url1?>Leden/beheerLeden.php">Leden</a></div>
                <div class="item"><a href="#">Reserveringen</a></div>
                <div class="item"><a href="#">Toernooien</a></div>
                <div class="item"><a class="<?php echo$snackhoek?>" href="<?php echo$url4?>Snackhoek/overzicht.php">Snackhoek</a></div>
            </nav>
            <div class="sides"></div>
        </header>
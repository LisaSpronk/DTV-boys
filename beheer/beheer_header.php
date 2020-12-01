<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'Snackhoek') !== false) {
    $snackhoek="inactiveLink";
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
            <div class="sides"></div>
            <nav>
                <div class="item"><a class="<?php echo$home; ?>" href="../index.php">Home</a></div>
                <div class="item"><a href="#">Leden</a></div>
                <div class="item"><a href="#">Reserveringen</a></div>
                <div class="item"><a href="#">Toernooien</a></div>
                <div class="item"><a class="<?php echo$snackhoek; ?>" href="Snackhoek/overzicht.php">Snackhoek</a></div>
            </nav>
            <div class="sides"></div>
        </header>
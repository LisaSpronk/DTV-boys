<?php
    include('../database.php');
    include('../beheer_header.php');
    $id = $_GET['id'];
if(isset($_POST['verwijderen'])){
    $sql = 'DELETE FROM menu WHERE Menu_id = "'.$id.'"';
    $conn->query($sql);
    $conn->close();
    echo"<script> window.location.href = 'http://localhost/DTV/DTV-boys/beheer/Snackhoek/overzicht.php'; </script>";
}
if(isset($_POST['anuleren'])){
    echo"<script> window.location.href = 'http://localhost/DTV/DTV-boys/beheer/Snackhoek/overzicht.php'; </script>";
}
   ?>
    <div id="content_beheer">
        <form method="post">
        <input type="submit" name="verwijderen" value="verwijderen">
        <input type="submit" name="anuleren" value="Anuleren">
        </form>
    </div>
   <?php
   include('../beheer_footer.php');
    
<?php
    include('database.php');
    include('beheer_header.php');
    $id = $_GET['id'];
    $sql = 'DELETE FROM menu WHERE Menu_id = "'.$id.'"';
   $conn->query($sql);
   $conn->close();
   echo"<script> window.location.href = 'http://localhost/DTV/Menu/beheer_snackhoek.php'; </script>";
   ?>
    <div id="content_beheer">
        
    </div>
   <?php
   include('beheer_header.php');
    
<?php
    include('database.php');
    $id = $_GET['id'];
    $sql = 'DELETE FROM menu WHERE Menu_id = "'.$id.'"';
   $conn->query($sql);
   $conn->close();
   echo"<script> window.location.href = 'http://localhost/DTV/Menu/menuAdmin.php'; </script>";
    
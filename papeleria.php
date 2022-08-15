<?php
    require("includes/constants.php");
    require("includes/functions.php");

    $y=query("SELECT * FROM articulos WHERE id=?",$_GET['id_papeleria'])[0];
    
    require("templates/header.php");
    require("templates/papeleria.php");
?>
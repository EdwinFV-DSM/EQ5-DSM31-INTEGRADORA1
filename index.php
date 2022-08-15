<?php
    require("includes/constants.php");
    require("includes/functions.php");
    
    if(isset($_GET['q'])){
        $papeleria=query("SELECT * FROM articulos WHERE nombre LIKE ?", '%'.$_GET['q'].'%');
    }else{
        $papeleria=query("SELECT * FROM articulos");
    }
    
    require("templates/header.php");
    require("templates/index.php");
?>
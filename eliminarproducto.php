<?php
require("includes/constants.php");
require("includes/functions.php");

$eliminacion=query("DELETE FROM `articulos` WHERE `articulos`.`id` = ?", $_GET["id"]);

//echo("Eliminado de la base de datos");
redirect();
?>
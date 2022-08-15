<?php
require("includes/constants.php");
require("includes/functions.php");
$producto=query("SELECT * FROM articulos WHERE id=?",$_GET['id'])[0];
require("templates/header.php");
require("templates/formeditar.php");
?>
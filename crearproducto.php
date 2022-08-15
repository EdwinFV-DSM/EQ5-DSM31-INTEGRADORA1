<?php
require("includes/constants.php");
require("includes/functions.php");

$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$size=$_POST["size"];
$stock=$_POST["stock"];
$imagen=$_POST["imagen"];
$inserccion=query("INSERT INTO `articulos` (`id`, `nombre`, `precio`, `size`, `stock`, `imagen`) VALUES (NULL, ?, ?, ?, ?, ?)",$nombre,$precio,$size,$stock,$imagen);
var_dump($inserccion);

redirect();
?>
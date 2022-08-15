<?php
require("includes/constants.php");
require("includes/functions.php");
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$size=$_POST["size"];
$stock=$_POST["stock"];
$cont=$_POST["cont"];
$imagen=$_POST["imagen"];
$editar=query("UPDATE `articulos` SET `nombre` = ?, `precio` = ?, `size` = ?, `stock` = ?, `imagen` = ? WHERE `articulos`.`id` = ?;",$nombre,$precio,$size,$stock,$imagen,$_GET['id']);
var_dump($editar);
redirect();
//UPDATE `articulos` SET `id` = NULL, `nombre` = 'Corrector de lapiz', `precio` = '20', `size` = 'Chico', `stock` = '543', `cont` = '10ml', `imagen` = 'images/17.jpg' WHERE `articulos`.`id` = 17;
?>
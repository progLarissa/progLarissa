<?php
// The global $_POST variable allows you to access the data sent with the POST method by name
$nombre = htmlspecialchars($_POST['nombre']);
$fecha = htmlspecialchars($_POST['fecha']);
echo $nombre, ' ', $fecha;
/*
Note: This example won't work when you load it into a browser locally — browsers cannot interpret PHP code, so when the form is submitted the browser will just offer to download the PHP file for you. To get it to work, you need to run the example through a PHP server of some kind.
Por ejemplo, LAMP.

Mirar cómo usar e implementar LAMP. Puede hacerse con un stack o montándolo tú mismo.
*/
?>


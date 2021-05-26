<?php
require_once("../app/inicio.php");
$control = new Control();
if ($_SERVER['REQUEST_METHOD']=="POST") {
      //Recibimos la información PHP7 isset()?valor1:valor2 => valor1 ?? valor2
      $tipo = $_POST['foto'] ?? "";
      print $tipo;
}
?>
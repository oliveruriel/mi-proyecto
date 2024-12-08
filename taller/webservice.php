<?php

// recibir los datos del formulario para saber cual bandera decea ver

$pais = $_POST["iNombre"];
$url = "https://flagcdn.com/w320/$pais.png";
echo "<img src='$url'>";


?>
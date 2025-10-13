<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
echo "Sesión creada. ej5_3.phpVer datos</a>";
?>
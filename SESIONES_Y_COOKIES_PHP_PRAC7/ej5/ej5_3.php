<?php
session_start();
if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "Usuario: ".$_SESSION['usuario']."<br>";
    echo "Clave: ".$_SESSION['clave']."<br>";
} else {
    echo "No hay datos de sesión.";
}
?>
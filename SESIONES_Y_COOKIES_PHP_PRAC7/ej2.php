<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie("contador", $contador, time() + 60*60*24*365);
    echo "Has visitado esta página $contador veces.";
} else {
    setcookie("contador", 1, time() + 60*60*24*365);
    echo "Bienvenido, es tu primera visita.";
}
?>
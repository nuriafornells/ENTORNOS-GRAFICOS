<?php
if (isset($_POST['usuario'])) {
    setcookie("usuario", $_POST['usuario'], time() + 60*60*24*365);
    $usuario = $_POST['usuario'];
} elseif (isset($_COOKIE['usuario'])) {
    $usuario = $_COOKIE['usuario'];
} else {
    $usuario = "";
}
?>
<form method="post">
    <input type="text" name="usuario" value="<?php echo $usuario; ?>" placeholder="Ingrese su nombre">
    <input type="submit" value="Guardar">
</form>
<?php
if ($usuario != "") {
    echo "Último usuario ingresado: $usuario";
}
?>
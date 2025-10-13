<?php
if (isset($_POST['titular'])) {
    setcookie("titular", $_POST['titular'], time() + 60*60*24*30);
    $titular = $_POST['titular'];
} elseif (isset($_COOKIE['titular'])) {
    $titular = $_COOKIE['titular'];
} else {
    $titular = "";
}
?>
<form method="post">
    <input type="radio" name="titular" value="politica" <?php if($titular=="politica") echo "checked"; ?>> Política<br>
    <input type="radio" name="titular" value="economica" <?php if($titular=="economica") echo "checked"; ?>> Económica<br>
    <input type="radio" name="titular" value="deportiva" <?php if($titular=="deportiva") echo "checked"; ?>> Deportiva<br>
    <input type="submit" value="Seleccionar titular">
</form>
<?php
if ($titular == "") {
    echo "<h2>Noticia política</h2><h2>Noticia económica</h2><h2>Noticia deportiva</h2>";
} else {
    echo "<h2>Noticia $titular</h2>";
}
?>
borrar_cookie.phpBorrar preferencia</a>
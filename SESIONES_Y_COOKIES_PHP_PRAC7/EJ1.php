<?php
if (isset($_POST['estilo'])) {
    setcookie("estilo", $_POST['estilo'], time() + 60*60*24*30);
    $estilo = $_POST['estilo'];
} elseif (isset($_COOKIE['estilo'])) {
    $estilo = $_COOKIE['estilo'];
} else {
    $estilo = "default";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo $estilo; ?>.method="post">
        <select name="estilo">
            <option value="default" <?php if($estilo=="default") echo "selected"; ?>>Default</option>
            <option value="oscuro" <?php if($estilo=="oscuro") echo "selected"; ?>>Oscuro</option>
            <option value="claro" <?php if($estilo=="claro") echo "selected"; ?>>Claro</option>
        </select>
        <input type="submit" value="Guardar estilo">
    </form>
</body>
</html>
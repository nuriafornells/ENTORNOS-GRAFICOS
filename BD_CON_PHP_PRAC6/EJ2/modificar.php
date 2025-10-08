<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");
if (!$link) {
  die("Error de conexión: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $nombre = $_POST["nombre"];
  $pais = $_POST["pais"];
  $habitantes = $_POST["habitantes"];
  $sql = "UPDATE Ciudades SET Nombre='$nombre', Pais='$pais', Habitantes=$habitantes WHERE id=$id";
  if (mysqli_query($link, $sql)) {
    echo "Ciudad modificada correctamente.";
  } else {
    echo "Error: " . mysqli_error($link);
  }
}
?>
<form method="post">
  <label>ID: <input type="number" name="id"></label><br>
  <label>Nuevo nombre: <input type="text" name="nombre"></label><br>
  <label>Nuevo país: <input type="text" name="pais"></label><br>
  <label>Nuevos habitantes: <input type="number" name="habitantes"></label><br>
  <input type="submit" value="Modificar">
</form>
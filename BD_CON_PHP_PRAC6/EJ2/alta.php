<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");
if (!$link) {
  die("Error de conexión: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $pais = $_POST["pais"];
  $habitantes = $_POST["habitantes"];
  $sql = "INSERT INTO Ciudades (Nombre, Pais, Habitantes) VALUES ('$nombre', '$pais', $habitantes)";
  if (mysqli_query($link, $sql)) {
    echo "Ciudad agregada correctamente.";
  } else {
    echo "Error: " . mysqli_error($link);
  }
}
?>
<form method="post">
  <label>Nombre: <input type="text" name="nombre"></label><br>
  <label>País: <input type="text" name="pais"></label><br>
  <label>Habitantes: <input type="number" name="habitantes"></label><br>
  <input type="submit" value="Agregar">
</form>
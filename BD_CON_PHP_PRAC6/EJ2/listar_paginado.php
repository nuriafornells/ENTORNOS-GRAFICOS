<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");
if (!$link) {
  die("Error de conexión: " . mysqli_connect_error());
}
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
$por_pagina = 5;
$inicio = ($pagina - 1) * $por_pagina;
$result = mysqli_query($link, "SELECT * FROM Ciudades LIMIT $inicio, $por_pagina");
echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>País</th><th>Habitantes</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>{$row['id']}</td><td>{$row['Nombre']}</td><td>{$row['Pais']}</td><td>{$row['Habitantes']}</td></tr>";
}
echo "</table>";
$total_result = mysqli_query($link, "SELECT COUNT(*) as total FROM Ciudades");
$total = mysqli_fetch_assoc($total_result)["total"];
$total_paginas = ceil($total / $por_pagina);
for ($i = 1; $i <= $total_paginas; $i++) {
  echo "listar_paginado.php?pagina=$i$i</a> ";
}
mysqli_close($link);
?>
<form method="post">
    Buscar canción: <input type="text" name="busqueda">
    <input type="submit" value="Buscar">
</form>
<?php
if (isset($_POST['busqueda'])) {
    $conn = new mysqli("localhost", "root", "", "prueba");
    $busqueda = $conn->real_escape_string($_POST['busqueda']);
    $sql = "SELECT canciones FROM buscador WHERE canciones LIKE '%$busqueda%'";
    $result = $conn->query($sql);
    echo "<h2>Resultados:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo $row['canciones']."<br>";
    }
    $conn->close();
}
?>
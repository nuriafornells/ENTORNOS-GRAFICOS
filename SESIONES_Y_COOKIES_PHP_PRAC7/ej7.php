<?php
session_start();
$conn = new mysqli("localhost", "root", "", "Compras");
$result = $conn->query("SELECT * FROM catalogo");
echo "<form method='post'>";
while ($row = $result->fetch_assoc()) {
    echo "<input type='checkbox' name='productos[]' value='".$row['id']."'> ".$row['producto']." - $".$row['precio']."<br>";
}
echo "<input type='submit' value='Agregar al carrito'>";
echo "</form>";

if (isset($_POST['productos'])) {
    $_SESSION['carrito'] = $_POST['productos'];
    echo "Productos agregados al carrito. carrito.phpVer carrito</a>";
}
$conn->close();
?>
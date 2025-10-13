<?php
session_start();
$conn = new mysqli("localhost", "root", "", "Compras");
if (isset($_SESSION['carrito'])) {
    $ids = implode(",", $_SESSION['carrito']);
    $result = $conn->query("SELECT * FROM catalogo WHERE id IN ($ids)");
    echo "<h2>Carrito de compras</h2>";
    while ($row = $result->fetch_assoc()) {
        echo $row['producto']." - $".$row['precio']."<br>";
    }
} else {
    echo "El carrito está vacío.";
}
$conn->close();
?>
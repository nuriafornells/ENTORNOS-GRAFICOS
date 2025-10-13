<?php
session_start();
$mail = $_POST['mail'];
$conn = new mysqli("localhost", "root", "", "base2");
$sql = "SELECT nombre FROM alumnos WHERE mail='$mail'";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
    $_SESSION['nombre'] = $row['nombre'];
    echo "Nombre encontrado. ej6_3.phpIr a bienvenida</a>";
} else {
    echo "Mail no encontrado.";
}
$conn->close();
?>

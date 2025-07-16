<?php
$servername = "localhost"; // Servidor MySQL (generalmente localhost)
$username = "root"; // Usuario de MySQL
$password = "Colomos21."; // Contraseña de MySQL (déjala vacía si no configuraste una)
$dbname = "hypestepdb"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
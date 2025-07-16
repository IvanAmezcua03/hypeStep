<?php
session_start();
include 'cone.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $username = $_SESSION['username'];
    mysqli_query($conn, "SET @username = '$username'");
    $sql = mysqli_query($conn, "DELETE FROM productos WHERE id='$id'");

    if ($sql) {
        echo "Producto eliminado correctamente.";
        header("Location: productosAdmin.php"); // Redirigir a la página de administración de productos
        exit;
    } else {
        echo "Error al eliminar el producto: " . mysqli_error($conn);
    }
} else {
    echo "ID no proporcionado.";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar Producto</title>

</head>
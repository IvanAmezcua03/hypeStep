<?php
session_start();
include ('cone.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $talla = $_POST['talla'];
    $colorway = $_POST['colorway'];
    $precio = $_POST['precio'];
    $disponibilidad = $_POST['disponibilidad'];
    $img = $_POST['img'];
    $descripcion = $_POST['descripcion'];

    // Actualizar el producto en la base de datos
    $username = $_SESSION['username'];
    mysqli_query($conn, "SET @username = '$username'");
    $sql = mysqli_query($conn, "UPDATE productos SET marca='$marca', modelo='$modelo', talla='$talla', colorway='$colorway', precio='$precio', disponibilidad='$disponibilidad', img='$img', descripcion='$descripcion' WHERE id='$id'");

    if ($sql) {
        echo "Producto modificado correctamente.";
        header("Location: productosAdmin.php"); // Redirigir a la página de administración de productos
        exit;
    } else {
        echo "Error al modificar el producto: " . mysqli_error($conn);
    }
} else {
    echo "ID no proporcionado.";
}

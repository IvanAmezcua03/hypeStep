<?php
session_start();
include 'cone.php';

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$talla = $_POST["talla"];
$colorway = $_POST["colorway"];
$precio = $_POST["precio"];
$disponibilidad = $_POST["disponibilidad"];
$img = $_POST["img"];
$descripcion = $_POST["descripcion"];

$username = $_SESSION['username'];
mysqli_query($conn, "SET @username = '$username'");
$sql = mysqli_query($conn, "INSERT INTO productos (marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES ('$marca', '$modelo', '$talla', '$colorway', '$precio', '$disponibilidad', '$img', '$descripcion')");

if($sql){
    echo "producto registrado";
    header("Location: productosAdmin.php"); // Redirigir a la página de administración de productos
    exit;
}else{
    echo "Error" .$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
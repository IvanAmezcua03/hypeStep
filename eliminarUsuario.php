<?php
session_start();
include 'cone.php';

if (isset($_POST['id_usuarios'])) {
    $id_usuarios = $_POST['id_usuarios'];
    $username = $_SESSION['username'];
    mysqli_query($conn, "SET @username = '$username'");
    $sql = mysqli_query($conn, "DELETE FROM registros WHERE id_usuarios ='$id_usuarios'");
    if ($sql) {
        echo "Usuario eliminado correctamente.";
        header("Location: mostrarUsuariosAdmin.php"); // Redirigir a la página de administración de usuarios
        exit;
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conn);
    }
} else {
    echo "ID no proporcionado.";
}
?>
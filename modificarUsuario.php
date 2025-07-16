<?php
session_start();
include ('cone.php');

if(isset ($_POST['id_usuarios'])){
    $id_usuarios = $_POST['id_usuarios'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $addrss = $_POST['addrss'];
    $phone = $_POST['phone'];
    $privilegiado = $_POST['privilegiado'];

    // mmodificar el usuario en la base de datos
    $username2 = $_SESSION['username'];
    mysqli_query($conn, "SET @username = '$username2'");
    $sql = mysqli_query($conn, "UPDATE registros SET email='$email', username='$username', passwd='$passwd', addrss='$addrss', phone='$phone', privilegiado='$privilegiado' WHERE id_usuarios='$id_usuarios'");

    if($sql){
        echo "Usuario modificado correctamente.";
        header("Location: mostrarUsuariosAdmin.php"); // Redirigir a la página de administración de usuarios
        exit;
    }else{
        echo "Error al modificar el usuario: " . mysqli_error($conn);
    }
} else {
    echo "ID no proporcionado.";
}
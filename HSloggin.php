<?php
include 'cone.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $passwd = $_POST["passwd"];

    $sql = "SELECT * FROM registros WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($passwd, $row["passwd"])) {
            session_start();
            $_SESSION["privilegiado"] = $row["privilegiado"];
            $_SESSION["id_usuarios"] = $row["id_usuarios"];
            $_SESSION["username"] = $row["username"];
            // Guardar solo los datos necesarios en sesión

            header("Location: productosUsuario.php");
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
            echo "<script>window.location.href='HSLoggin.html';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado');</script>";
        echo "<script>window.location.href='HSLoggin.html';</script>";
    }
}
?>


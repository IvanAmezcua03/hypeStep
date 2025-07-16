<?php
session_start();
include 'cone.php';

// Recibir los datos y almacenarlos en variables
$email = $_POST["email"];
$username = $_POST["username"];
$passwd = $_POST["passwd"];
$addrss = $_POST["addrss"];
$phone = $_POST["phone"];

$passwd = password_hash($passwd, PASSWORD_DEFAULT);
$username2 = $_SESSION['username'];
mysqli_query($conn, "SET @username = '$username2'");
$sql = mysqli_prepare($conn, "INSERT INTO registros (email, username, passwd, addrss, phone) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($sql, "sssss", $email, $username, $passwd, $addrss, $phone);
// mysqli_stmt_bind_param($sql, "sssss", $email, $username, $passwd, $adrss, $phone);
mysqli_stmt_execute($sql);

if (mysqli_stmt_affected_rows($sql) > 0) {
    echo "Registro exitoso";
    header("location: HSloggin.html");
    exit();
} else {
    echo "Error al registrar";
}

mysqli_stmt_close($sql);
mysqli_close($conn);

?>
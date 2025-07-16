<?php
include 'cone.php';
session_start();

$_id_producto = $_POST['id'];

if (isset($_SESSION['id_usuarios'])) {
    $id_usuario = $_SESSION['id_usuarios'];

    // Verificar si el producto ya está en el carrito
    $sql = "SELECT * FROM carrito WHERE id_producto = ? AND id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $_id_producto, $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si ya existe, actualizar la cantidad
        $sql_update = "UPDATE carrito 
                       SET cantidad = cantidad + 1 
                       WHERE id_producto = ? AND id_usuario = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ii", $_id_producto, $id_usuario);
        $stmt_update->execute();
    } else {
        // Si no existe, insertar nuevo registro con cantidad = 1
        $sql_insert = "INSERT INTO carrito (id_usuario, id_producto, cantidad) 
                       VALUES (?, ?, 1)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ii", $id_usuario, $_id_producto);
        $stmt_insert->execute();
    }

    header("Location: productosUsuario.php");
    exit();
} else {
    echo "Debes iniciar sesión para agregar productos al carrito.";
    header("Location: HSLoggin.html");
    exit();
}
?>

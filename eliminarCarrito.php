<?php
include 'cone.php';
session_start();

if (isset($_SESSION['id_usuarios'])) {
    $id_usuario = $_SESSION['id_usuarios'];

    if (isset($_POST['id'])) {
        $id_producto = $_POST['id'];

        // Verificar la cantidad actual del producto en el carrito
        $sql = "SELECT cantidad FROM carrito WHERE id_usuario = ? AND id_producto = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $id_usuario, $id_producto);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $cantidad_actual = $row['cantidad'];

            if ($cantidad_actual > 1) {
                // Disminuir en 1
                $sql_update = "UPDATE carrito SET cantidad = cantidad - 1 WHERE id_usuario = ? AND id_producto = ?";
                $stmt_update = $conn->prepare($sql_update);
                $stmt_update->bind_param("ii", $id_usuario, $id_producto);
                $stmt_update->execute();
            } else {
                // Eliminar el producto del carrito
                $sql_delete = "DELETE FROM carrito WHERE id_usuario = ? AND id_producto = ?";
                $stmt_delete = $conn->prepare($sql_delete);
                $stmt_delete->bind_param("ii", $id_usuario, $id_producto);
                $stmt_delete->execute();
            }

            header("Location: vistaCarrito.php");
            exit();
        } else {
            echo "Producto no encontrado en el carrito.";
        }
    } else {
        echo "No se proporcionó un ID de producto.";
    }
} else {
    echo "Debes iniciar sesión para modificar el carrito.";
}
?>

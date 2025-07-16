<?php
include 'cone.php';
session_start();

if (isset($_SESSION['id_usuarios'])) {
    $id_usuario = $_SESSION['id_usuarios'];

    // Obtener productos y su cantidad directamente del campo en carrito
    $sql = "SELECT p.*, c.cantidad 
            FROM carrito c 
            JOIN productos p ON c.id_producto = p.id 
            WHERE c.id_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Calcular total general
        $totalGeneral = 0;
        $productos = [];
        while ($row = $result->fetch_assoc()) {
            $precio_total = $row['precio'] * $row['cantidad'];
            $totalGeneral += $precio_total;
            $productos[] = $row;
        }
        
        // Volver a ejecutar la consulta para mostrar los productos
        $stmt->execute();
        $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrito.css">
    <!-- SDK de PayPal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AVd6TZy7Tptkj5rffPlVn6LJY0eNIY9zAsqCrNiC-fQxqoXC0eiXEFJv-aFC99oDjDmgOiuL5GrfPK50&currency=USD"></script>
    <title>Vista Carrito</title>
    <style>
        .paypal-button-container {
            max-width: 300px;
            margin: 20px auto;
        }
        .total-general {
            text-align: right;
            font-size: 1.3em;
            margin: 20px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carrito de Compras</h1>
        <button class='menu toolbar'><a href='productosUsuario.php'>Volver a Productos</a></button>
        <button class='menu toolbar'><a href='HSMain.php'>Menu principal</a></button>
        
        <table>
            <tr>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Talla</th>
                <th>Colorway</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): 
                $precio_total = $row['precio'] * $row['cantidad'];
            ?>
                <tr>
                    <td><img src="<?= $row['img'] ?>" alt="Imagen" width="100"></td>
                    <td><?= $row['marca'] ?></td>
                    <td><?= $row['modelo'] ?></td>
                    <td><?= $row['talla'] ?></td>
                    <td><?= $row['colorway'] ?></td>
                    <td>$<?= number_format($row['precio'], 2) ?></td>
                    <td><?= $row['cantidad'] ?></td>
                    <td>$<?= number_format($precio_total, 2) ?></td>
                    <td>
                        <form method='POST' action='eliminarCarrito.php'>
                            <input type='hidden' name='id' value='<?= $row['id'] ?>'>
                            <button type='submit'>Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

        <div class="total-general">
            Total General: $<?= number_format($totalGeneral, 2) ?>
        </div>

        <!-- Botón de PayPal -->
        <div id="paypal-button-container" class="paypal-button-container"></div>
        
    </div>

    <script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?= number_format($totalGeneral, 2, '.', '') ?>'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Pago completado por: ' + details.payer.name.given_name);
                // Redirigir a página de confirmación con los datos necesarios
                window.location.href = "pago_exitoso.php?orderID=" + data.orderID + "&payerID=" + details.payer.payer_id;
            });
        },
        onError: function(err) {
            console.error(err);
            alert('Ocurrió un error al procesar el pago con PayPal');
        }
    }).render('#paypal-button-container');
    </script>
</body>
</html>
<?php
    } else {
        echo "<script>
            alert('El carrito está vacío.');
            window.location.href = 'productosUsuario.php';
        </script>";
        exit();
    }
} else {
    echo "<script>
        alert('Debes iniciar sesión para ver el carrito.');
        window.location.href = 'HSLoggin.html';
        </script>";
    exit();
}
?>
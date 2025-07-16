
        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require __DIR__ . '/PHPMailer/src/Exception.php';
        require __DIR__ . '/PHPMailer/src/PHPMailer.php';
        require __DIR__ . '/PHPMailer/src/SMTP.php';

        include 'cone.php';
        session_start();

        $username = mysqli_real_escape_string($conn, $_SESSION['username']);

        // Obtener datos del usuario (id y correo)
        $user_query = mysqli_query($conn, "SELECT id_usuarios, email FROM registros WHERE username = '$username'");
        $user_data = mysqli_fetch_assoc($user_query);
        $user_id = $user_data['id_usuarios'];
        $user_email = $user_data['email'];

        // Obtener la fecha actual
        $current_date = date("d/m/Y");

        // Inicializar total y contenedor de productos
        $total_price = 0;
        $items_html = "";

        // Obtener los productos en el carrito del usuario
        $cart_query = mysqli_query($conn, "
    SELECT p.marca, p.modelo, p.talla, p.precio, c.cantidad
    FROM productos p
    INNER JOIN carrito c ON p.id = c.id_producto
    WHERE c.id_usuario = '$user_id'
");

$items_html = "<table style='width: 100%; border-collapse: collapse;'>
<thead>
    <tr style='background: #f0f0f0;'>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: left;'>Marca</th>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: left;'>Modelo</th>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: center;'>Talla</th>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: center;'>Cantidad</th>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: right;'>Precio Unitario</th>
        <th style='padding: 8px; border-bottom: 1px solid #ddd; text-align: right;'>Subtotal</th>
    </tr>
</thead>
<tbody>
";

while ($producto = mysqli_fetch_assoc($cart_query)) {
    $marca = htmlspecialchars($producto['marca']);
    $modelo = htmlspecialchars($producto['modelo']);
    $talla = htmlspecialchars($producto['talla']);
    $precio_unitario = number_format($producto['precio'], 2);
    $cantidad = (int)$producto['cantidad'];
    $subtotal = $producto['precio'] * $cantidad;
    $subtotal_formateado = number_format($subtotal, 2);

    $items_html .= "<tr>
        <td style='padding: 8px; border-bottom: 1px solid #eee;'>$marca</td>
        <td style='padding: 8px; border-bottom: 1px solid #eee;'>$modelo</td>
        <td style='padding: 8px; border-bottom: 1px solid #eee; text-align: center;'>$talla</td>
        <td style='padding: 8px; border-bottom: 1px solid #eee; text-align: center;'>$cantidad</td>
        <td style='padding: 8px; border-bottom: 1px solid #eee; text-align: right;'>\$$precio_unitario USD</td>
        <td style='padding: 8px; border-bottom: 1px solid #eee; text-align: right;'>\$$subtotal_formateado USD</td>
    </tr>";
    $total_price += $subtotal;
}

$items_html .= "</tbody></table>";


        // Configurar PHPMailer para enviar el correo
        $mail = new PHPMailer(true);

        try {
            // Configuración SMTP de Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hypestep135@gmail.com'; // Tu correo de Gmail
            $mail->Password = 'efvd qzrk tvcg rxdo'; // Tu App Password, debido a que Gmail ya no permite contraseñas normales
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ],
            ]; // Saltar verificación, solo 

            $mail->setFrom('tu_email@gmail.com', 'HypeStep');
            $mail->addAddress($user_email);

            $mail->isHTML(true);
            $mail->Subject = 'Tu Ticket de Compra - HypeStep';

            $mail->Body = "
<html>
<head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .ticket {
        max-width: 600px;
        margin: 2em auto;
        background-color: #fff;
        border-radius: 12px;
        padding: 25px 30px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        border: 1px solid #e0e0e0;
    }
    .ticket h2 {
        text-align: center;
        color: #d32f2f;
        margin-bottom: 25px;
        font-weight: 700;
        font-size: 28px;
    }
    .ticket p {
        font-size: 16px;
        margin: 8px 0;
    }
    .ticket table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        margin-bottom: 25px;
    }
    .ticket table thead tr {
        background-color: #f5f5f5;
        border-bottom: 2px solid #d32f2f;
    }
    .ticket table th, .ticket table td {
        padding: 12px 10px;
        border-bottom: 1px solid #ddd;
    }
    .ticket table th {
        color: #d32f2f;
        font-weight: 600;
        text-align: left;
    }
    .ticket table td {
        font-weight: 500;
    }
    .total {
        font-weight: 700;
        font-size: 18px;
        text-align: right;
        color: #111;
    }
    .footer {
        text-align: center;
        font-size: 14px;
        color: #555;
        margin-top: 30px;
    }
    .footer a {
        color: #d32f2f;
        text-decoration: none;
        font-weight: 600;
        margin: 0 8px;
    }
</style>
</head>
<body>
<div class='ticket'>
    <h2>HypeStep - Ticket de Compra</h2>
    <p><strong>Usuario:</strong> @$username</p>
    <p><strong>Correo:</strong> $user_email</p>
    <p><strong>Fecha:</strong> $current_date</p>
    <p><strong>Productos comprados:</strong></p>
    $items_html
    <p class='total'>Total pagado: \$" . number_format($total_price, 2) . " USD</p>
    <div class='footer'>
        Gracias por tu compra.<br>
        HypeStep MX | <a href='#'>Términos</a> | <a href='#'>Privacidad</a>
    </div>
</div>
</body>
</html>
";


            $mail->send();
            echo "<script>console.log('Correo enviado exitosamente a $user_email');</script>";
        } catch (Exception $e) {
            echo "<script>console.error('Error al enviar el correo: {$mail->ErrorInfo}');</script>";
        }

        
?> 
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .ticket {
            max-width: 600px;
            margin: 2em auto;
            background-color: #fff;
            border-radius: 12px;
            padding: 25px 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
            border: 1px solid #e0e0e0;
        }
        .ticket h2 {
            text-align: center;
            color: #d32f2f;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 28px;
        }
        .ticket p {
            font-size: 16px;
            margin: 8px 0;
        }
        .ticket table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 25px;
        }
        .ticket table thead tr {
            background-color: #f5f5f5;
            border-bottom: 2px solid #d32f2f;
        }
        .ticket table th, .ticket table td {
            padding: 12px 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .ticket table th {
            color: #d32f2f;
            font-weight: 600;
        }
        .ticket table td {
            font-weight: 500;
        }
        .ticket table td:nth-child(5),
        .ticket table td:nth-child(6) {
            text-align: right;
        }
        .total {
            font-weight: 700;
            font-size: 18px;
            text-align: right;
            color: #111;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-top: 30px;
        }
        .footer a {
            color: #d32f2f;
            text-decoration: none;
            font-weight: 600;
            margin: 0 8px;
        }
        .accept-button {
            display: block;
            margin: 30px auto 0 auto;
            background-color: #d32f2f;
            border: none;
            padding: 12px 30px;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
        }
        .accept-button:hover {
            background-color: #b02828;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h2>HypeStep - Ticket de Compra</h2>
        <p><strong>Usuario:</strong> @<?php echo htmlspecialchars($username); ?></p>
        <p><strong>Correo:</strong> <?php echo htmlspecialchars($user_email); ?></p>
        <p><strong>Fecha:</strong> <?php echo $current_date; ?></p>
        <p><strong>Productos comprados:</strong></p>
        <?php echo $items_html; ?>
        <p class="total">Total pagado: $<?php echo number_format($total_price, 2); ?> USD</p>
        <div class="footer">
            Gracias por tu compra.<br>
            HypeStep MX | <a href="#">Términos</a> | <a href="#">Privacidad</a>
        </div>
        <button class="accept-button" onclick="window.location.href='./productosUsuario.php'">Volver a hacer compras</button>
    </div>
</body>
</html>
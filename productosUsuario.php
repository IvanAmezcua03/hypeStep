<?php
session_start();
include 'cone.php'; // Asegúrate de incluir la conexión a la base de datos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productosUsuario.css">
    <title>Productos de usuario</title>
</head>
<body>
    <div class="container">
    <header class="main-header">
        <button class="menu toolbar"><a href="HSMain.php">Menu principal</a></button>
        <h1>Productos Usuario</h1>
        <nav class="main-nav">
            <ul>
                <?php if(isset($_SESSION['privilegiado']) && $_SESSION['privilegiado'] == 1): ?>
                    <li><a href="productosAdmin.php">Vista Admin</a></li>
                <?php endif; ?>
                <li><a href="vistaCarrito.php">Ver Carrito</a></li>
            </ul>
        </nav>
    </header>
</div>

    <div>
        <div class="container" >
        <?php
        include 'cone.php'; 
        
        
        $sql = mysqli_query($conn, "SELECT * FROM productos");
        while($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="product">
                <img class="img" src="<?php echo $row['img']; ?>">
                <h4><?php echo $row['marca']; ?></h4>
                <h4><?php echo $row['modelo']; ?></h4>
                <h4><?php echo $row['talla']; ?></h4>
                <h4><?php echo $row['colorway']; ?></h4>
                <h4><?php echo $row['precio']; ?></h4>
                <h4><?php echo $row['disponibilidad']; ?></h4>
                <h4><?php echo $row['descripcion']; ?></h4>
                <form method="POST" action="carrito.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Agregar al carrito</button>
                </form>
            </div>
        <?php
                }
            ?>
        </div>
    </div>
</body>


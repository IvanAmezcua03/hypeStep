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
    <link rel="stylesheet" href="productosAdmin.css">
    <title>Productos de usuario</title>
</head>
<body>
<div class="container">
    <header class="main-header">
        <button class="menu toolbar"><a href="HSMain.php">Menu principal</a></button>
        <h1>Productos Admin</h1>
        <nav class="main-nav">
            <ul>
                <li><a href="productosUsuario.php">Vista Usuario</a></li>
            </ul>
            <button class="menu toolbar"><a href="registroProductos.html">Registrar Productos</a></button>
            <button class="menu toolbar"><a href="mostrarUsuariosAdmin.php">registrar y modificar usuarios</a></button>
            <button class="menu toolbar"><a href="bitacora.php">Bitácora de operaciones</a></button>
        </nav>
    </header>
</div>
    
<div class="container">
    <?php
        include ('cone.php');
        $sql = mysqli_query($conn, "SELECT id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion FROM productos");

    ?>
            <div class="tableContainer">
                <table>
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Talla</th>
                            <th>Colorway</th>
                            <th>Precio</th>
                            <th>Disponibilidad</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Eliminar</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td data-label="Marca"><?php echo $row['marca']; ?></td>
                                <td data-label="Modelo"><?php echo $row['modelo']; ?></td>
                                <td data-label="Talla"><?php echo $row['talla']; ?></td>
                                <td data-label="Colorway"><?php echo $row['colorway']; ?></td>
                                <td data-label="Precio"><?php echo $row['precio']; ?></td>
                                <td data-label="Disponibilidad"><?php echo $row['disponibilidad']; ?></td>
                                <td data-label="Imagen"><img class="img" src="<?php echo $row['img']; ?>"></td>
                                <td data-label="Descripcion"><?php echo $row['descripcion']; ?></td>
                                <!-- botones de eliminar y modificar -->
                                <form method="POST" action="eliminar.php">
                                    <td data-label="Eliminar"><button class = "btnEliminar" type="submit" name="id" value="<?php echo $row['id']; ?>">Eliminar</button></td>
                                </form>
                                <form method="POST" action="editarProducto.php">
                                    <td data-label="Modificar"><button class = "btnModificar" type="submit" name="id" value="<?php echo $row['id']; ?>">Modificar</button></td>
                                </form>
                               
                            </tr>
                        <?php
                            }
                        ?>
                </table>
            </div>
</div>
</body>
</html>
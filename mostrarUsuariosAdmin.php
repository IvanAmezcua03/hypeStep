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
    <link rel="stylesheet" href="productosAdmin.css"> <!-- Puedes crear un usuariosAdmin.css después -->
    <title>Administración de Usuarios</title>
</head>
<body>
<div class="container">
    <header class="main-header">
        <button class="menu toolbar"><a href="HSMain.php">Menu principal</a></button>
        <h1>Administración de Usuarios</h1>
        <nav class="main-nav">
            <ul>
                <li><a href="productosUsuario.php">Vista Productos</a></li>
            </ul>
            <button class="menu toolbar"><a href="HSRegistro.html">Registrar Usuarios</a></button>
        </nav>
    </header>
</div>
    
<div class="container">
    <?php
        include ('cone.php');
        $sql = mysqli_query($conn, "SELECT id_usuarios, email, username, addrss, phone FROM registros");
    ?>
            <div class="tableContainer">
                <table>
                    <thead class="head_table">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Nombre de usuario</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Eliminar</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td data-label="ID"><?php echo $row['id_usuarios']; ?></td>
                                <td data-label="Email"><?php echo $row['email']; ?></td>
                                <td data-label="Username"><?php echo $row['username']; ?></td>
                                <td data-label="Dirección"><?php echo $row['addrss']; ?></td>
                                <td data-label="Teléfono"><?php echo $row['phone']; ?></td>
                                <!-- botones de eliminar y modificar -->
                                <form method="POST" action="eliminarUsuario.php">
                                    <td data-label="Eliminar">
                                        <button class="btnEliminar" type="submit" name="id_usuarios" value="<?php echo $row['id_usuarios']; ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                                    </td>
                                </form>
                                <form method="POST" action="editarUsuario.php">
                                    <td data-label="Modificar">
                                        <button class="btnModificar" type="submit" name="id_usuarios" value="<?php echo $row['id_usuarios']; ?>">Modificar</button>
                                    </td>
                                </form>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
</div>
</body>
</html>
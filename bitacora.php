<?php
session_start();
include 'cone.php'; // Conexión a la base de datos

// Verificar si el usuario tiene privilegios de administrador

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productosAdmin.css"> <!-- Reutilizamos el mismo CSS -->
    <title>Bitácora de Operaciones</title>
</head>
<body>
<div class="container">
    <header class="main-header">
        <button class="menu toolbar"><a href="HSMain.php">Menu principal</a></button>
        <h1>Bitácora de Operaciones</h1>
        <nav class="main-nav">
            <ul>
                <li><a href="productosAdmin.php">Administrar Productos</a></li>
                <li><a href="mostrarUsuariosAdmin.php">Administrar Usuarios</a></li>
            </ul>
        </nav>
    </header>
</div>
    
<div class="container">
    <?php
        // Consulta para obtener los registros de la bitácora
        $sql = mysqli_query($conn, "SELECT * FROM bitacora ORDER BY id DESC");
        
        if(mysqli_num_rows($sql) > 0) {
    ?>
            <div class="tableContainer">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hora</th>
                            <th>Sentencia Ejecutada</th>
                            <th>Contrasentencia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td data-label="ID"><?php echo $row['id']; ?></td>
                                <td data-label="fecha"><?php echo $row['fecha']; ?></td>
                                <td data-label="Sentencia" class="sql-command"><?php echo htmlspecialchars($row['sentencia']); ?></td>
                                <td data-label="Contrasentencia" class="sql-command"><?php echo htmlspecialchars($row['contrasentencia']); ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
    <?php
        } else {
            echo "<p>No hay registros en la bitácora.</p>";
        }
    ?>
</div>
</body>
</html>
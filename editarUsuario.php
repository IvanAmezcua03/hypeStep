<?php
session_start();
include ('cone.php');

if(isset ($_POST['id_usuarios'])){
    $id_usuarios = $_POST['id_usuarios'];
    $sql = mysqli_query($conn, "SELECT * FROM registros WHERE id_usuarios='$id_usuarios'");
    if (mysqli_num_rows($sql)==1){
        $row = mysqli_fetch_array($sql);
        $id_usuarios= $row['id_usuarios'];
        $email = $row['email'];
        $username = $row['username'];
        $passwd = $row['passwd'];
        $addrss = $row['addrss'];
        $phone = $row['phone'];
        $privilegiado = $row['privilegiado'];

    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="actializarUsuarios.css">
</head>
<body>
    <div class="update-user-container">
        <h1 class="update-user-title">Actualizar Usuario</h1>
        <section class="update-user-form-container">
            <form class="update-user-form" action="modificarUsuario.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input class="form-input" type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="username">Username:</label>
                    <input class="form-input" type="text" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="passwd">Contraseña:</label>
                    <input class="form-input" type="password" name="passwd" id="passwd" value="<?php echo htmlspecialchars($passwd); ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="addrss">Dirección:</label>
                    <input class="form-input" type="text" name="addrss" id="addrss" value="<?php echo htmlspecialchars($addrss); ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="phone">Teléfono:</label>
                    <input class="form-input" type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="privilegiado">Permisos:</label>
                    <select class="form-input" name="privilegiado" id="privilegiado" required>
                        <option value="0" <?php if($privilegiado == 0) echo 'selected'; ?>>Usuario</option>
                        <option value="1" <?php if($privilegiado == 1) echo 'selected'; ?>>Administrador</option>
                    </select>
                </div>
                
                <input type="hidden" name="id_usuarios" value="<?php echo htmlspecialchars($id_usuarios); ?>">
                
                <div class="form-actions">
                    <button class="form-button" type="submit" name="register">Actualizar</button>
                    <a href="mostrarUsuariosAdmin.php" class="form-button button-secondary">Cancelar</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
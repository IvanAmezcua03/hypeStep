<?php
session_start();
include ('cone.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = mysqli_query($conn, "SELECT * FROM productos WHERE id='$id'");
    if (mysqli_num_rows($sql) == 1) {
        $row = mysqli_fetch_array($sql);
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $talla = $row['talla'];
        $colorway = $row['colorway'];
        $precio = $row['precio'];
        $disponibilidad = $row['disponibilidad'];
        $img = $row['img'];
        $descripcion = $row['descripcion'];
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Productos</title>
    <link rel="stylesheet" href="registroProductos.css">
    
</head>
<body>
    <h1>Registro de productos</h1>
    <section>
        <div>
            <form action="modificar.php" method="POST">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" value = "<?php echo $marca; ?> "required>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value = "<?php echo $modelo; ?> "required>
                <label for="talla">Talla:</label>
                <input type="text" name="talla" id="talla" value = "<?php echo $talla; ?> " required >
                <label for="colorway">Colorway:</label>
                <input type="text" name="colorway" id="colorway" value ="<?php echo $colorway; ?>" required>
                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio" value="<?php echo $precio; ?>  "required>
                <label for="disponibilidad">Disponibilidad:</label>
                <input type="text" name="disponibilidad" id="disponibilidad" value = "<?php echo $disponibilidad; ?>"required >
                <label for="imagen">Imagen:</label>
                <input type="text" name="img" id="img" value = "<?php echo $img; ?>" required >
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" value = "<?php echo $descripcion; ?>"required>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="register" value="register">Actualizar</button>
                

            </form>
        </div>
    </section>
</body>
</html>
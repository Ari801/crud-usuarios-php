<?php include("conexion.php"); ?>

<?php
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar usuario</title>
</head>
<body>
    <h2>Agregar Usuario</h2>

    <form method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <button type="submit" name="guardar">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>

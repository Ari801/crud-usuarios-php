<?php include("conexion.php"); ?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=$id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id";
    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
</head>
<body>
    <h2>Editar Usuario</h2>

    <form method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required><br><br>

        <button type="submit" name="actualizar">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>

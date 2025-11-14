<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <style>
        table{border-collapse: collapse;width: 60%;margin:20px auto;}
        th, td{padding:10px;border:1px solid #333;text-align:center;}
        a{margin-right:10px;}
    </style>
</head>
<body>
    <h2 style="text-align:center;">Lista de Usuarios</h2>

    <div style="text-align:center;margin-bottom:20px;">
        <a href="agregar.php">Agregar nuevo usuario</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM usuarios";
        $res = $conn->query($sql);

        while($row = $res->fetch_assoc()){
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['nombre']."</td>
                    <td>".$row['correo']."</td>
                    <td>
                        <a href='editar.php?id=".$row['id']."'>Editar</a>
                        <a href='eliminar.php?id=".$row['id']."'>Eliminar</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

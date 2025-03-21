<?php
include 'funciones.php';
$result = obtenerPersona($conexDB);

if (!$result) {
    die("Error en la consulta: " . $conexDB->error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>tallerDb</title>
</head>
<body>
    <h2>Personas</h2>
    <a href="crear.php">Crear persona </a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Calculo edad</th>
            <th>Opciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td>
                <a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a>
                <a href="eliminar.php?delete=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
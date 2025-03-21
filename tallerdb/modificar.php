<?php
include 'funciones.php';
$personas = obtenerPersonaPorId($conexDB, $_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Persona</h2>
    <form method="POST" action="eliminar.php">
        <input type="hidden" name="id" value="<?php echo $personas['id']; ?>">
        <input type="text" name="nombre" value="<?php echo $personas['nombre']; ?>" required>
        <input type="email" name="email" value="<?php echo $personas['email']; ?>" required>
        <input type="number" name="edad" value="<?php echo $personas['edad']; ?>" required>
        <button type="submit">Actualizar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>
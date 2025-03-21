<?php
include 'conexdb.php';

function obtenerPersona($conexDB) {
    return $conexDB->query("SELECT id, nombre, email, edad, IF(edad >= 18, 'Mayor de edad', 'Menor de edad') as estado FROM personas");
}

function obtenerPersonaPorId($conexDB, $id) {
    $result = $conexDB->query("SELECT * FROM personas WHERE id=$id");
    return $result->fetch_assoc();
}

function guardarPersona($conexDB, $id, $nombre, $email, $edad) {
    if ($id) {
        $sql = "UPDATE personas SET nombre='$nombre', email='$email', edad='$edad' WHERE id=$id";
    } else {
        $sql = "INSERT INTO personas (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";
    }
    $conexDB->query($sql);
    header("Location: index.php");
}

function eliminarPersona($conexDB, $id) {
    $conexDB->query("DELETE FROM personas WHERE id=$id");
    header("Location: index.php");
}
?>

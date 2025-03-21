<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    guardarPersona($conexDB, $_POST['id'] ?? null, $_POST['nombre'], $_POST['email'], $_POST['edad']);
}

if (isset($_GET['delete'])) {
    eliminarPersona($conexDB, $_GET['delete']);
}
?>
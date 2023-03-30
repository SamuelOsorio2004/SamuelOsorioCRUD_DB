<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contraseña = $_POST['contraseña'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];


    $stmt = $db->prepare('INSERT INTO clientes(Contraseña, Nombre, correo) VALUES (?,?,?)');
    $stmt->execute([$contraseña, $nombre, $correo]);


    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" xmlns="http://www.w3.org/1999/html" lang="es">

<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/style.css" th:href="@{/css/style.css}">
    <script src="funcion.js"></script>

</head>

<body>
    <div class="ajustar-card">
        <div class="container mt-4">
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3>Agregar Inventario</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-grup">
                                <label>Nombre
                                    <input name="nombre" type="text" class="form-control" required>
                                </label>
                            </div>
                            <div class="form-grup">
                                <label>Correo
                                    <input name="correo" type="email" class="form-control" required>
                                </label>
                            </div>
                            <div class="form-grup">
                                <label>Contraseña
                                    <input name="contraseña" type="password" class="form-control" required>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" onclick="verificar()" value="Guardar" class="btn btn-success">
                            <a href="index.php" class="btn btn-dark">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
<?php

?>
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org" xmlns="http://www.w3.org/1999/html" lang="es">
<head>
    <meta charset="UTF-8">
    <title>SEITON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <form action="validar.php" method="post" class="mb-3">
            <div class="mb-3">
                <label for="InputUserName" class="form-label">Usuario</label>
                <input id="InputUserName" name="username" type="text" class="form-control" placeholder="Username"
                    autofocus="true" />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input id="exampleInputPassword1" name="password" type="text" class="form-control"
                    placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </main>
</body>
</html>

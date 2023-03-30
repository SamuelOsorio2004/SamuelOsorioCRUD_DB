<?php
require 'conexion.php';

if(PHP_SESSION_NONE){
    header("Location: login.php");
}



$listar = $db->query('SELECT * FROM clientes ORDER by Id_Cliente ASC');

$fil = $listar->fetchAll(PDO::FETCH_OBJ);
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="funcion.js"></script>
</head>

<body>
    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>nombre</th>
                    <th>correo</th>
                    <th>contraseña</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contador = 0;
                foreach ($fil as $registro) {
                    ?>
                    <tr>
                        <th>
                            <?php echo $contador + 1;
                            $contador++ ?>
                        </th>
                        <th>
                            <?php echo $registro->Id_Cliente ?>
                        </th>
                        <th>
                            <?php echo $registro->Nombre ?>
                        </th>
                        <th>
                            <?php echo $registro->correo ?>
                        </th>
                        <th>
                            <?php echo $registro->Contraseña ?>
                        </th>
                        <th>
                            <a class="btn btn-warning"
                                href="editar.php?Id_Cliente=<?php echo $registro->Id_Cliente ?>">Editar</a>
                                
                            <a class="btn btn-danger" onclick="return confirmar()"
                                href="eliminar.php?Id_Cliente=<?php echo $registro->Id_Cliente?>">eliminar</a>
                        </th>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
        <form method="get" action="crear.php">
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>
</body>

</html>
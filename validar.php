<?php

require 'conexion.php';

$usuarios = $db->query('SELECT * FROM usuarios');

$fils = $usuarios->fetchAll(PDO::FETCH_OBJ);

$name = $_POST['username'];
$password = $_POST['password'];
$position=0;

foreach ($fils as $index => $fil){
    if($fil->usuario == $name){
        $position = $index;
        break;
    }
}

if($position){
    if($fils[$position]->contraseña == $password){
        session_start();
        $_SESSION['usuario'] = Array('nombre' => $fils[$position]->nombre, 'usuario' => $fils[$position]->usuario);
        header("Location: index.php");
        exit();
    }else{
        header("Location: login.php");
        exit();
    }
}
?>
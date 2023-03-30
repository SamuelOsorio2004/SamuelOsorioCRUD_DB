<?php
    $servidor = "localhost";       
    $username = "root";
    $password = "";
    $dbnombre = "seiton";

    try {
        $db = new PDO("mysql:host=$servidor;dbname=$dbnombre", $username, $password);
        $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "No se establecio la conexion ". $e->getMessage();
    }
?>
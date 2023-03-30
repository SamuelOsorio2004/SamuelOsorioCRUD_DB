<?php
require "conexion.php";
$id = $_GET['Id_Cliente'];
$eliminar = $db->prepare('DELETE FROM clientes WHERE Id_Cliente = ?');
$accionar = $eliminar->execute([$id]);
if ($accionar) {
    header('Location: index.php');
    exit();
}
?>
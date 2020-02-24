<?php
include_once('database.php');

if (isset($_POST['comentarios']) && !empty($_POST['comentarios'])) {
    $usuario = $_POST['usuario'];
    $comentario = $_POST['comentarios'];
    $sql = "INSERT INTO comentarios (usuario, comentario) VALUES ('$usuario', '$comentario')";
    echo $sql;
    // $result = mysqli_connect($conn, $sql);
} else {
    header('Location: ../noticiaDetalle.php');
}

?>
<?php

var_dump ($_POST);
include('database.php');
if(isset($_POST) && !empty($_POST)){
    $usuario = $_POST['crearusuario'];
    $contraseña = $_POST['crearclave'];
    $email = $_POST['crearemail'];

    $sql = "INSERT INTO `usuarios`(`usuario`, `contrasena`, `correo`)Values('$usuario','$contraseña','$email')";
    $result = mysqli_query($conn, $sql);
    header('Location: ../login.php');

} else {
    echo "No se inserto";
}


?>
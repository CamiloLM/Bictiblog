<?php
session_start();

function terminarSesion() {
    session_unset();
    session_destroy(); 
}

if (!isset($_SESSION['user']) || $_SESSION['role']!=1) {
    header('Location: login.php');
}

if (isset($_POST['botonSalir'])) {
    terminarSesion();
    header('Location: login.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Pagina admin</title>
</head>

<body>
    <h1>Hola administrador: <?= $_SESSION['user'];?></h1>
    <form action="admin.php" method="post">
        <button name="botonSalir">Salir</button>
    </form>
</body>

</html>
<?php
session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
    $mensaje = "<span><img src='images/icons/person-24px.svg' alt=''></span>
        <h3>Hola, " . $_SESSION['user'] . "</h3>
        <form action='templates/nav-template-user.php' method='post' class='nav-login'>
            <button name='botonSalir'>Salir</button>
        </form>";
} else {
    $mensaje = "<ul class ='nav-login'>
        <li><a href='login.php'><span class='glyphicon-log-in'>Iniciar Sesion</span></a></li>
    </ul>";
}

// Funcion para terminar la sesion
function terminarSesion()
{
    session_unset();
    session_destroy();
}

// Evento para el boton
if (isset($_POST['botonSalir'])) {
    terminarSesion();
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="nav-bar sticky-top">
        <div class="nav-bar-header">
            <img src="images/logo.png" alt="">
        </div>
        <div class="nav-options">
            <ul class="nav navbar-nav">
                <li class="item"><a href="index.php" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="#noticias" class="nav-link"> Noticias </a></li>
                <li class="item"><a href="#" class="nav-link"> Tecnologia </a> </li>
                <li class="item"><a href="#" class="nav-link"> Foro </a></li>
                <li class="item"><span><a href="search.php"><img src="images/icons/search-24px.svg" alt=""></a></span></li>
            </ul>
        </div>
        <ul>
            <?= $mensaje ?>
        </ul>
        </div>
    </nav>
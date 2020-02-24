<?php
session_start();

$admin = "";

if (isset($_SESSION) && !empty($_SESSION)) {
    if( $_SESSION['role'] === '1'){
        $admin = "<li class='item'><a href='admin/admin.php' class='nav-link'> Admin </a> </li>";
    }
    $mensaje = " <form action='templates/nav-template.php' method='post' class='nav-login'>
    <span><img src='images/icons/person-24px.svg' alt=''></span>
        <h4 style= 'padding:5px;'>Hola, " . $_SESSION['user'] . "</h4>
       
            <button class='btn-bit' name='botonSalir'>Cerrar</button>
        </form>";
} else {
    $mensaje = "<ul class ='nav-login'>
        <li><a href='login.php'><span class='glyphicon-log-in'>Iniciar Sesion</span></a></li>
    </ul>";
}

// Evento para el boton
if (isset($_POST['botonSalir'])) {
    session_unset();
    session_destroy();
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
           <img src="images/logo.png" alt=""><a class = "navbar-brand" href="#"></a>
        </div>    
        <div class="nav-options">
            <ul class="nav navbar-nav" >
                <li class="item"><a href="index.php" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="noticias.php" class="nav-link"> Noticias </a></li>
                <li class="item"><a href="about.php" class="nav-link"> Acerca de </a> </li>
                <?= $admin ?>
            </ul>
        </div>
             <?= $mensaje ?>
        </div>
    </div>        
</nav>
</body>

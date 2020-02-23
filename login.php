<?php

if (isset($_GET['error'])) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Santo guacamole!</strong> Deberias verificar la informacion que ingresaste ahi abajo.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bict-Blog</title>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="icon" href="../assets/img/logo.jpeg">
</head>

<body>
    <div class="container">
        <a href="index.php"><img src="images/bit.png" class="logo" alt=""></a>
    </div>
    <div class="Moises">
        <div class="toggle">
            <span>Crear cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form method="POST" action="server-code/verificacionUsuario.php">
                <input type="text" name="tnombre" placeholder="Usuario" required>
                <input type="password" name="usupas" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario">
            <h2>Crea tu cuenta</h2>
            <form method="POST" action="server-code/crearUsuario.php">
                <input name="crearusuario" placeholder="Usuario" Type="text" required></input><BR>
                <input name="crearclave" placeholder="Contraseña" Type="password" required></input><BR>
                <input name="crearemail" placeholder="Correo" Type="Email" required></input><BR>
                <input type="submit" value="Registrate">

            </form>
        </div>


        <div class="reset-password">
            <a href="#">Olvide Mi Contraseña?</a>
        </div>
    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
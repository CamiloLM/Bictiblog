<?php

session_start();

include('database.php');

if (isset($_POST) && !empty($_POST)) {
    $nombre = $_POST['tnombre'];
    $contraseña = $_POST['usupas'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contrasena = '$contraseña'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['rol'] === '0') {
                $_SESSION['user'] = $row["nombre"];
                $_SESSION['role'] = $row["rol"];
                header('Location: ../admin.php');
            }
            if ($row['rol'] === 'User') {
                $_SESSION['user'] = $row["nombre"];
                $_SESSION['role'] = $row["rol"];
                header('Location: ../user.php');
            }
        }
    } else {
        header('Location: ../login.php?error');
    }
}

<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'login';

$conn = mysqli_connect($server, $user, $pass, $db);

if (isset($_POST) && !empty($_POST)) {
    $correo = $_POST['inputEmail'];
    $contraseña = $_POST['inputPassword'];

    $sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['rol'] === 'Admin') {
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location: admin.php');
            }
            if ($row['rol'] === 'User') {
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location: user.php');
            }
        }
    } else {
        header('Location: index.php');
    }
}

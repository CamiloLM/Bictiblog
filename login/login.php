<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'bictiblog';

$conn = mysqli_connect($server, $user, $pass, $db);

if (isset($_POST) && !empty($_POST)) {
    $nombre = $_POST ["tnombre"];
    $contrasena= $_POST["usupas"];

    $sql = "SELECT * FROM usuarios WHERE nombre= '.$nombre.' and contrasena= '.$contrasena.'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['rol'] === 'Admin') {
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location:../admin.php');
            }
            if ($row['rol'] === 'User') {
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location:../user.php');
            }
        }
    } else {
        header('Location: login.html');
    }
}
?>
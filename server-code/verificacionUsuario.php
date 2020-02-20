<?php

session_start();


include('database.php');
if (isset($_POST) && !empty($_POST)) {
    $usuario = $_POST['tnombre'];
    $contrasena = $_POST['usupas'];
    
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND  contrasena ='$contrasena'";
    $result = mysqli_query($conn, $sql);
    var_dump(mysqli_num_rows($result));
    
    if(mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['rol'] === "1") {
                var_dump($row);
                $_SESSION['user'] = $row["usuario"];
                $_SESSION['role'] = $row["rol"];
                header("Location: ../admin.php");
            }
            if ($row['rol'] === "0") {
                $_SESSION['user'] = $row["usuario"];
                $_SESSION['role'] = $row["rol"];
                header('Location: ../index.php');
                // header('Location: ../templates/nav-template-user.php');
                
            }
        }
    } else {
        echo "Error";
        header('Location: ../login.php?error');
    }
}

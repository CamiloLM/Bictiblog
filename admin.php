<?php

require('templates/nav-template.php');

if (!isset($_SESSION['user']) || $_SESSION['role']!='1') {
    header('Location: login.php');
}

?>

<head>
    <title>Pagina admin</title>
</head>

<body>
    <h1>Hola administrador: <?= $_SESSION['user'];?></h1>
</body>

</html>
<?php

session_start();

function terminarSesion() {
    session_unset();
    session_destroy(); 
}

if (!isset($_SESSION['user']) || $_SESSION['role']!=1 && $_SESSION['role']!=0) {
    header('Location: login.php');
}

if (isset($_POST['botonSalir'])) {
    terminarSesion();
    header('Location: login.php');
}

require('templates/nav-template-user.php');
?>


<body>
    <form action="admin.php" method="post">
        <button name="botonSalir">Salir</button>
    </form>
    </body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
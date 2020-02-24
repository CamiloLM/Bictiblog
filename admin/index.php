<?php
session_start();

// Veriicacion de administrador
if (!isset($_SESSION['user']) || $_SESSION['role'] != '1') {
    if($_SESSION['role']==='0'){
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php');
    }
}

// Mensaje en el NavBar
if (isset($_SESSION) && !empty($_SESSION)) {
    $mensaje = " <form action='../templates/nav-template.php' method='post' class='nav-login'>
    <span><img src='../images/icons/person-24px.svg' alt=''></span>
        <h4 style= 'padding:5px;'>Hola, " . $_SESSION['user'] . "</h4>
       
            <button class='btn-bit' name='botonSalir'>Cerrar</button>
        </form>";
} else {
    $mensaje = "<ul class ='nav-login'>
        <li><a href='../login.php'><span class='glyphicon-log-in'>Iniciar Sesion</span></a></li>
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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>DataTables</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="styles.css">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background-color:#dee2e6;">
    <nav class="nav-bar sticky-top">
        <div class="nav-bar-header">
            <img src="../images/logo.png" alt=""><a class="navbar-brand" href="#"></a>
        </div>
        <div class="nav-options">
            <ul class="nav navbar-nav">
                <li class="item"><a href="../index.php" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="../noticias.php" class="nav-link"> Noticias </a></li>
                <li class="item"><a href="../about.php" class="nav-link"> Acerca de </a> </li>
                <li class="item"><a href="admin.php" class="nav-link"> Admin </a> </li>
            </ul>
        </div>
        <?= $mensaje ?>
        </div>
        </div>
    </nav>

    <div class="container mt-3" >
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
            </div>
        </div>
    </div>
    <br>

    <div class="container caja mb-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPosts" class="table table-striped table-bordered table-condensed" style="width:100%; table-layout:fixed;">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Categoria</th>
                                <th>Fecha</th>
                                <th>Imagen url</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formPost">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Titulo</label>
                                    <input type="text" class="form-control" id="titulo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Contenido</label>
                                    <textarea name="contenido" id="contenido" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Categoria</label>
                                    <input type="text" class="form-control" id="categoria">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Fecha</label>
                                    <input type="text" class="form-control" id="fecha_edicion">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Imagen url</label>
                                    <input type="text" class="form-control" id="imagen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="main.js"></script>

    <footer>
        <div class="container foot">
            <div class="row">
                <div class="col-1"><img src="../images/icons/FACE.png" alt=""></div>
                <div class="col-1"><img src="../images/icons/insta.png" alt=""></div>
                <div class="col-1"><img src="../images/icons/yout.png" alt=""></div>
                <div class="col-9">
                    <h5>Bictia- Todos los derechos reservados @2020</h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
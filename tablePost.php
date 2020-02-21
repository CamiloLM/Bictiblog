<?php
session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
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

// Evento para restrigir acceso
// if (!isset($_SESSION['user']) || $_SESSION['role']!='1') {
//     header('Location: login.php');
// }

// -------------------------------------------------------------------------------------------------------

include('Post.php');
$post = new Post();

if(isset($_POST) && !empty($_POST)){
    $insert = $post->createPost($_POST);
    if($insert){
        echo "Registro Exitoso";
    }else{
        echo "Fail.....";
    }
}

$allPOST = $post->getPost();
?>
<!-- _________________________________________________________ -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Tecnologia</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="css/styles.css">

      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
  <nav class="nav-bar sticky-top">
        <div class="nav-bar-header">
           <img src="images/logo.png" alt=""><a class = "navbar-brand" href="#"></a>
        </div>    
        <div class="nav-options">
            <ul class="nav navbar-nav" >
                <li class="item"><a href="index.php" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="#noticias" class="nav-link"> Noticias </a>
                    <ul class="categorias">
                        <li class="category"><a href="noticiasCategoria.php">categ 1</a> </li>
                        <li class="category"><a href="">categ 2</a> </li>
                        <li class="category"><a href="">categ 3</a> </li>
                        <li class="category"><a href="">categ 4</a> </li>
                    </ul>
                </li>
                <li class="item"><a href="#" class="nav-link"> Acerca de </a> </li>
                <li class="item"><span><a href="search.php"><img src="images/icons/search-24px.svg" alt=""></a></span></li>
            </ul>
        </div>
             <?= $mensaje ?>
                <!-- <li><a href="login.php"><span class="glyphicon-log-in">Iniciar Sesion</span></a></li> -->
        </div>
    </div>        
</nav>
    <div style="height:50px"></div>

<!-- __________________________tabla_____________________________________ -->
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="bg-primary">Titulo</th>
                                <th class="bg-primary">Contenido</th>
                                <th class="bg-primary">Categoria</th>                               
                                <th class="bg-primary">Fecha_edicion</th>                                
                                <th class="bg-primary">Modificar</th>                                
                                <th class="bg-primary">Eliminar</th>                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($dtpost = mysqli_fetch_object($allPOST)){
                                echo "<tr>";
                                echo "<td> $dtpost->titulo </td>";
                                echo "<td> $dtpost->contenido </td>";
                                echo "<td> $dtpost->categoria </td>";
                                echo "<td> $dtpost->fecha_edicion </td>";  
                                
                                echo "<td> <input type='submit' name='boton' value='modificar'></td>";
                                echo "<td> <input type='submit' name='boton' value='eliminar'></td>";

                                echo "</tr> ";
                            }
                        ?>
                            
                                                       
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
</div> 

<footer>
    <div class="container foot">
        <div class="row">
            <div class="col-1"><img src="images/icons/FACE.png" alt=""></div>
            <div class="col-1"><img src="images/icons/insta.png" alt=""></div>
            <div class="col-1"><img src="images/icons/yout.png" alt=""></div>
            <div class="col-9"><h5>Bictia- Todos los derechos reservados @2020</h5></div>
        </div>
    </div>
</footer>

<!-- _____________________________________________ -->
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="js/app.js"></script>  
    
    
  </body>
</html>




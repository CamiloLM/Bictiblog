<?php
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
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
      
  </head>
    
  <body> 
     <header>
         <h2 class="text-center text-light">Noticias</h2>
         <h2 class="text-center text-light">de <span class="badge badge-warning">Tecnología</span></h2> 
     </header>    
    <div style="height:50px"></div>
<!-- ____________________formulario_________________________ -->
<!-- <form action="" method= POST>
    <label for="nombres"> Nombre</label>
    <input name="nombres" id="nombres" placeholder="Ingrese nombre" 
    type="text" require /> <br/>

    <label for="apellidos"> Nombre</label>
    <input name="apellidos" id="apellidos" placeholder="Ingrese apellido" 
    type="text" require /> <br/>

    <label for="profesion"> Profesion  </label>
    <input name="profesion" id="profesion" placeholder="Ingrese profesion" 
    type="text" require /> <br/>
    <label for="descripcion"> Descripcion </label>
    <input name="descripcion" id="descripcion" placeholder="Ingrese descripcion" 
    type="text" require /> <br/>
    <button>Enviar</button>
</form> -->

<!-- __________________________tabla_____________________________________ -->
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Categoria</th>                               
                                <th>Fecha_edicion</th>                                
                                <th>Modificar</th>                                
                                <th>Eliminar</th>                                
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
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>




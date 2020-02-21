<?php 
    include 'templates/nav-template.php';
    include 'server-code/database.php';

    $sql = "SELECT * FROM post WHERE id=2";
    $res = mysqli_query($conn, $sql);
    $noticia = mysqli_fetch_assoc($res);
?>


<div class="container">
    <div><span class="badge badge-danger"><h6><?php echo $noticia['fecha_edicion'];?></h6></span>
         <span class="badge badge-dark"><h6><?php echo $noticia['categoria'];?></h6></span>
             <div class="title-new" style="text-align:center; margin:30px; padding:10px;box-shadow: rgb(51, 51, 51) 0px 2px 1px;">
                <h1><?php echo $noticia['titulo'];?></h1>
            </div>
        </div>

        <div class="imagen-container">
            <img width="600px" height="400px" src="<?php echo $noticia['imagen'];?>" alt=""> 
        </div>
        <div class="contenido" style="padding:30px;">
        <?php 
            echo $noticia ['contenido'];
        ?>    
        </div>
    </div>
</div>
<?php
    include 'templates/footer-template.php';
?>
<?php 
    include 'templates/nav-template.php';
    include 'server-code/database.php';

    // Consulta 1
 $sql = "SELECT * FROM post WHERE id=2";
 $res = mysqli_query($conn, $sql);
 $noticia1 = mysqli_fetch_assoc($res);
   // Consulta 2
   $sql1 = "SELECT * FROM post WHERE id=3";
   $res1 = mysqli_query($conn, $sql1);
   $noticia2 = mysqli_fetch_assoc($res1);
  
     // Consulta 3
     $sql2 = "SELECT * FROM post WHERE id=4";
     $res2 = mysqli_query($conn, $sql2);
     $noticia3 = mysqli_fetch_assoc($res2);
    
    // Consulta 4
    $sql3 = "SELECT * FROM post WHERE id=5";
    $res3 = mysqli_query($conn, $sql3);
    $noticia4 = mysqli_fetch_assoc($res3);

       // Consulta 5
       $sql4 = "SELECT * FROM post WHERE id=6";
       $res4 = mysqli_query($conn, $sql4);
       $noticia5 = mysqli_fetch_assoc($res4);
      
?>

<head>
    <title>Bictiblog</title>
</head>

<!---******Carousel*******--->
<section>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/telematico.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/regulacion.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/espectro.jpeg" alt="Third slide">
            </div>
  
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
</div>
        <div class="overlay">
            <div class="container-text">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-right">
                  <h1>Conoce Bictiblog...</h1>
                  <p class="d-none d-md-block"><h5>Entérate de lo último en acontecer en el campo de la tecnología y la informática, participa y comenta.</h5>
                  </p>
                  <a href="#" class="btn btn-outline-light">Ver Más</a>
                  <button type="button" class="btn btn-bit" data-toggle="modal" data-target="#modal-compra">Registrate</button>
                </div>
              </div>
            </div>
        </div>
</section>
<!------********Noticia Principal*******------->

<Section class="container" id="noticias">
 <br>
    <h1>Noticias</h1>
    <div class="row">   
        <div class="col p-10 m-5">
            <div class="card" style="width: 100%;"><img height="300px" width="100%" src="<?php echo $noticia1['imagen']?>" class="col card-img-top" alt="...">    
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $noticia1['titulo'] ?></h5>
                    <p class="card-text"><?php echo $noticia1['contenido'] ?></p>
                    <a href="#" class="btn btn-dark">Leer más...</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">   
        <div class="col p-10 m-5">
        <div class="card" 
        style="width: 100%;"><img height="300px" width="100%" src="<?php echo $noticia2['imagen']?>" class="card-img-top" alt="..."> 
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $noticia2['titulo'] ?></h5>
                    <p class="card-text"><?php echo $noticia2['contenido'] ?></p>
                    <a href="#" class="btn btn-dark">Leer más...</a>
                    </div>
            </div>
        </div>
    </div>
</Section>
   
<section class="slide-news">
 <div class="row">   
     <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="200px" width="100%" src="<?php echo $noticia4['imagen']?>" class="card-img-top" alt="..."> 
        
            <div class="card-body">
             <h5 class="card-title">Noticia</h5>
                <span class="badge badge-secondary"><?php echo $noticia4['fecha_edicion']?></span>
                <span class="badge badge-dark"><?php echo $noticia4['categoria']?></span>
                <p class="card-text"><?php echo $noticia4['titulo'] ?></p>
                <a href="#" class="btn btn-dark">Leer más...</a>
            </div>
         </div>
    </div>
    <div class="col p-10 m-5 ">
        <div class="card" style="width: 18rem;">
        <img height="178px" width="100%" src="<?php echo $noticia3['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia3['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia3['categoria']?></span>
            <p class="card-text"><?php echo $noticia3['titulo'] ?></p>
            <a href="#" class="btn btn-dark">Leer más...</a>
        </div>
        </div>
    </div>
    <div class="col p-10 m-5">
    <div class="card" style="width: 18rem;">
        <img height="180px" width="100%" src="<?php echo $noticia5['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia5['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia5['categoria']?></span>
            <p class="card-text"><?php echo $noticia5['titulo'] ?></p>
            <a href="#" class="btn btn-dark">Leer más...</a>
        </div>
        </div>
    </div>
</div>
</section>
<div class="banner">
    <img src="images/banner-bogota.jpg" alt="">
</div>

<?php 
    include 'templates/footer-template.php';
?>



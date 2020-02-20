<?php 
    include 'templates/nav-template.php';
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
            <div class="card" style="width: 100%;">
                 <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Noticia</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-dark">Leer más...</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">   
        <div class="col p-10 m-5">
            <div class="card" style="width: 100%;">
                 <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Noticia</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
             <h5 class="card-title">Noticia</h5>
                <span class="badge badge-secondary">Fecha</span>
                <span class="badge badge-dark">Categoria</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">Leer más...</a>
            </div>
         </div>
    </div>
    <div class="col p-10 m-5 ">
        <div class="card" style="width: 18rem;">
             <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Otra Noticia</h5>
                <span class="badge badge-secondary">Fecha</span>
                <span class="badge badge-dark">Categoria</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">Leer más...</a>
            </div>
        </div>
    </div>
    <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
             <h5 class="card-title">Noticia</h5>
                <span class="badge badge-secondary">Fecha</span>
                <span class="badge badge-dark">Categoria</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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



<?php ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bit-Blog</title>
</head>
<body>
<!----------**************NAVEGADOR***************--------------->
<nav class="nav-bar sticky-top">
        <div class="nav-bar-header">
           <img src="images/logo.png" alt=""><a class = "navbar-brand" href="#"></a>
        </div>
        <div class="nav-options">
             <ul class="nav navbar-nav" >
                <li class="item"><a href="#" class="nav-link"> Inicio </a></li>
                <li class="item"><a href="#noticias" class="nav-link"> Noticias </a></li>
                <li class="item"><a href="#" class="nav-link"> Tecnologia </a> </li>
                <li class="item"><a href="#" class="nav-link"> Foro </a></li>
                <li class="item"><span><a href=""><img src="images/icons/search-24px.svg" alt=""></a></span></li>
            </ul>
        </div>
        <ul class ="nav-login">
            <li><a href=""><span class="glyphicon-log-in">Iniciar Sesion</span></a></li>
        </ul>
        </div>
    </div>
</nav>

<br>
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

<!---************Barra busqueda*************---->
<div class="search">
</div>
<section class="container">
 <div class="row"> 
    <div class="col">     
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Mas noticia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Otra mas</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row"> 
    <div class="col">     
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Mas noticia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Otra mas</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<footer>

</footer>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
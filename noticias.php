<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bict-Blog</title>
</head>
<body>
<?php 

    include 'templates/nav-template.php';
    include 'server-code/database.php';

    // Consulta 1 de tecnologia
 $sql = "SELECT * FROM post WHERE id=1";
 $res = mysqli_query($conn, $sql);
 $noticia = mysqli_fetch_assoc($res);

   // Consulta 2 de tecnologia
   $sql1 = "SELECT * FROM post WHERE id=6";
   $res1= mysqli_query($conn, $sql1);
   $noticia1 = mysqli_fetch_assoc($res1);

    // Consulta 3 de tecnologia
    $sql2 = "SELECT * FROM post WHERE id=8";
    $res2= mysqli_query($conn, $sql2);
    $noticia2 = mysqli_fetch_assoc($res2);
//    -----------------------------------------------------------------------------------
     // Consulta 1 de inovacion
   $sql3 = "SELECT * FROM post WHERE id=2";
   $res3= mysqli_query($conn, $sql3);
   $noticia3 = mysqli_fetch_assoc($res3);

  // Consulta 2 de inovacion
  $sql4 = "SELECT * FROM post WHERE id=3";
  $res4= mysqli_query($conn, $sql4);
  $noticia4 = mysqli_fetch_assoc($res4);
  
//   // Consulta 3 de inovacion
  $sql5 = "SELECT * FROM post WHERE id=7";
  $res5= mysqli_query($conn, $sql5);
  $noticia5 = mysqli_fetch_assoc($res5);

// ------------------------------------------------------------------
    // Consulta 1 de educacion
    $sql6 = "SELECT * FROM post WHERE id=4";
    $res6= mysqli_query($conn, $sql6);
    $noticia6 = mysqli_fetch_assoc($res6);
 
   // Consulta 2 de educacion 
   $sql7 = "SELECT * FROM post WHERE id=5";
   $res7= mysqli_query($conn, $sql7);
   $noticia7 = mysqli_fetch_assoc($res7);
   
 //   // Consulta 3 de educacion
   $sql8 = "SELECT * FROM post WHERE id=9";
   $res8= mysqli_query($conn, $sql8);
   $noticia8 = mysqli_fetch_assoc($res8);
 
 // ------------------------------------------------------------------
 

?>

<section class="slide-news">
 <div class="row"> 
<div class="titulos" ><h3>Tecnología </h3></div>  
     <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="190px" width="100%" src="<?php echo $noticia['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia['categoria']?></span>
            <p class="card-text"><?php echo $noticia['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
    <div class="col p-10 m-5 ">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia1['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia1['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia1['categoria']?></span>
            <p class="card-text"><?php echo $noticia1['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia1['id']  ?>>Leer más...</a>
        </div>
        </div>
    </div>
    <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia2['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia2['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia2['categoria']?></span>
            <p class="card-text"><?php echo $noticia2['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia2['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
</div>
</section>
<section class="slide-news">
 <div class="row">   
     <div class="titulos" ><h3>Inovacion</h3></div>
     <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia3['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia3['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia3['categoria']?></span>
            <p class="card-text"><?php echo $noticia3['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia3['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
    <div class="col p-10 m-5 ">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia4['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia4['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia4['categoria']?></span>
            <p class="card-text"><?php echo $noticia4['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia4['id']  ?>>Leer más...</a>
        </div>
        </div>
    </div>
    <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia5['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia5['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia5['categoria']?></span>
            <p class="card-text"><?php echo $noticia5['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia5['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
</div>
</section>
<section class="slide-news">
 <div class="row">   
     <div class="titulos" ><h3>Educasion</h3></div>
     <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia6['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia6['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia6['categoria']?></span>
            <p class="card-text"><?php echo $noticia6['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia6['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
    <div class="col p-10 m-5 ">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia7['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia7['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia7['categoria']?></span>
            <p class="card-text"><?php echo $noticia7['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia7['id']  ?>>Leer más...</a>
        </div>
        </div>
    </div>
    <div class="col p-10 m-5">
        <div class="card" style="width: 18rem;">
        <img height="150px" width="100%" src="<?php echo $noticia8['imagen']?>" class="card-img-top" alt="..."> 
        <div class="card-body">
         <h5 class="card-title">Noticia</h5>
            <span class="badge badge-secondary"><?php echo $noticia8['fecha_edicion']?></span>
            <span class="badge badge-dark"><?php echo $noticia8['categoria']?></span>
            <p class="card-text"><?php echo $noticia8['titulo'] ?></p>
            <a href="noticiaDetalle.php" class="btn btn-dark" <?php  $noticia8['id']  ?>>Leer más...</a>
        </div>
         </div>
    </div>
</div>
</section>
<section class="slide-news">
 <div class="row">   
     <div class="titulos" ><h3>tecnología</h3></div>
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



<form action="server-code/consultarBlog.php">
<input type="submit" value="holi mama ">
</form>

</body>
</html>
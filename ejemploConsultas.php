<?php
include('database.php');
$cards = '';

// Consulta para traer todos los posts
$sql = "SELECT * FROM post";

// Consulta para traer un numero especifico
// $sql = "SELECT * FROM post LIMIT 2";

// Consulta por categoria
// $sql = "SELECT * FROM post WHERE categoria='educación'";

// Consulta por id
// $sql = "SELECT * FROM post WHERE id=2";

$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    $contenido = "<div class='card mb-3'>
        <div class='row no-gutters'>
            <div class='col-md-4'>
                <img src='". $row['imagen'] ."' class='card-img' alt='...'>
            </div>
            <div class='col-md-8'>
                <div class='card-body'>
                    <h5 class='card-title'>" . $row['titulo'] . "</h5>
                    <p class='card-text'>". $row['contenido'] . "</p>
                    <p class='card-text'><small class='text-muted'>". $row['categoria'] ."</small></p>
                    <p class='card-text'><small class='text-muted'>". $row['fecha_edicion'] ."</small></p>
                </div>
            </div>
        </div>
        <a class='m-2' href='?id=" . $row['id'] . "'>Saber mas</a>
    </div>";

    $cards .= $contenido;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div>
        <?= $cards ?>
    </div>
</body>

</html>
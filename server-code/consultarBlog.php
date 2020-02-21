<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    


<?php

include('database.php');

$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
while ($noticias = mysqli_fetch_assoc($result)) {

    //var_dump($noticias); 
    echo $noticias['titulo'] . " <br/> ";
    // foreach ($noticas as $key => $value) {
    //     echo "<h1>$key:</h1> $value";
    // }
}

?>
</head>
<body>

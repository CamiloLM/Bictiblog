<?php
include_once('conexion.php');
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$contenido = (isset($_POST['contenido'])) ? $_POST['contenido'] : '';
$categoria = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
$fecha_edicion = (isset($_POST['fecha_edicion'])) ? $_POST['fecha_edicion'] : '';
$imagen = (isset($_POST['imagen'])) ? $_POST['imagen'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch ($opcion) {
    case 1:
        $consulta = "INSERT INTO post (titulo, contenido, categoria, fecha_edicion, imagen) VALUES ('$titulo', '$contenido', '$categoria', '$fecha_edicion', '$imagen')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT * FROM post ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        $consulta = "UPDATE post SET titulo='$titulo', contenido='$contenido', categoria='$categoria', fecha_edicion='$fecha_edicion', imagen='$imagen' WHERE id=$id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT * FROM post WHERE id=$id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
        $consulta = "DELETE FROM post WHERE id=$id";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 4:
        $consulta = "SELECT * FROM post";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = null;

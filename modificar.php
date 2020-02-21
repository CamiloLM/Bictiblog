<?php

include('Persona.php');
// creacion de variables
$persona = new Persona();
// $dp |  $datosPersona = $persona->obtenerPersona
 $dp = $persona->obtenerPersona($_GET['id']);


?>


<form action="" method= POST>
    <label for="nombres"> Nombre</label>
    <input name="nombres" id="nombres" placeholder="Ingrese nombre" 
    type="text" require value=" <?= $dp->nomper ?>" /> <br/>

    <label for="apellidos"> Nombre</label>
    <input name="apellidos" id="apellidos" placeholder="Ingrese apellido" 
    type="text" require  value=" <?= $dp->apelper ?>" /> <br/>

    <label for="profesion"> Profesion  </label>
    <input name="profesion" id="profesion" placeholder="Ingrese profesion" 
    type="text" require  value=" <?= $dp->profper ?>"/> <br/>
    <label for="descripcion"> Descripcion </label>
    <textarea name="descripcion" id="descripcion" require >
    <?= $dp->descper ?>
    </textarea>
    <button>Enviar</button>
</form>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname ="bictiblog";



$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn)
{
    die("no hay coneccion :".mysqli_connect_error());

}
$nombre = $_POST ["tnombre"];
$contrasena= $_POST["usupas"];
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre= '".$nombre."' and contrasena= '".$contrasena."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
header ("Location:index.php");
}
else if($nr == 0)
{
    header ("Location:login.html");
}
?>

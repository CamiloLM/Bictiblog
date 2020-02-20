<?php
include('Database.php');

class Usuario{
    // Atributos
    public $cedula;
    public $nombre;
    public $apellido;
    public $direccion; 
    public $sitio_wed;
    public $rol; 
    public $contrasena;
    public $conn; 

    function __construct(){
        
        $db = new Database();
        $this->conn = $db->conectarse();
    }
    function createUser ($data){
        $identification = $data['ide'];
        $name = $data['name'];
        $lastname = $data['lastname'];
        $address = $data['address'];
        $website = $data['website'];
        $rol = $data['rol']; 
        $password = $data['password'];

        $sql = "INSERT INTO usuarios (cedula, nombre, apellido, direccion, sitio_wed, rol, contrasena)
        VALUES ('$identification', '$name', '$lastname', '$address', '$website', '$rol', '$password')";

        $res = mysqli_query($this->conn, $sql);
        if($res){
            return true;            
        }else{
            return false;
        }
    }

    function getUsers(){
        $sql = "SELECT * FROM usuarios";
        return mysqli_query($this->conn, $sql);

    }
}
?>
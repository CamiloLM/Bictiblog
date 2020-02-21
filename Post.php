<?php
include('server-code/database.php');

class Post{
    // Atributos
    public $titulo;
    public $contenido;
    public $categoria;
    public $fecha_edicion; 
    public $conn;
    
    function __construct(){
        
        $db = new Database();
        $this->conn = $db->conectarse();
    }
    function createPost ($data){
        $title = $data['title'];
        $content = $data['content'];
        $category = $data['category'];
        $editiondate = $data['editiondate'];
        

        $sql = "INSERT INTO post (titulo, contenido, categoria, fecha_edicion)
        VALUES ('$title', '$content', '$category', '$editiondate')";

        $res = mysqli_query($this->conn, $sql);
        if($res){
            return true;            
        }else{
            return false;
        }
    }

    function getPost(){
        $sql = "SELECT * FROM post";
        return mysqli_query($this->conn, $sql);

    }
}
?>
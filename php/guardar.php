<?php
require_once("conexion.php");
if(!empty($_POST)){
    $facultad = $_POST['facultad'];
    $escuela = $_POST['escuela'];
    $universidad = $_POST['universidad'];
    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $apepaterno = $_POST['apepaterno'];
    $apematerno = $_POST['apematerno'];
    //imagen guardar
    $img = $_FILES['imagen']; 
    $nom_img = $img['name'];
    $tipo_img = $img['type'];
    $url_img = $img['tmp_name'];
    $tam_img = $img['size'];     
    $error = $img['error'];     
    //nombre para la foto y donde se va a guardar
    $destino = "../imagenes/";
    $titulo_img = "img_".md5(date('d-m-Y H:m:s'));
    $img_usuario = $titulo_img.".jpg";
    $src = $destino.$img_usuario;

    move_uploaded_file($url_img,$src);

    $sql="INSERT INTO usuario(facultad, escuela, universidad, codigo, 
    nombres, apepaterno, apematerno, imagen) VALUES ( 
    '$facultad', '$escuela','$universidad','$codigo','$nombres','$apepaterno','$apematerno','$img_usuario')";
    
    $resp = 1;

    $cnx->query($sql) or  $resp = 0;
    
    session_start();
    $_SESSION['codigo']=$codigo;

    echo $resp;
}

?>
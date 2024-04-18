<?php
function conectDB(){

    $servidor="localhost";
    $usuario="root";
    $password= "";
    $db="cv_virtual";

    $con=mysqli_connect($servidor,$usuario,$password,$db) or die("no se pudo conectar con la base de datos");

    return $con;
}
?>
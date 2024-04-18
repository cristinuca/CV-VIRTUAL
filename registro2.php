<?php
include "conexion2.php";
$con=conectDB();

$pregunta1=$_POST['pregunta1'];
$pregunta2=$_POST['pregunta2'];
$pregunta3=$_POST['pregunta3'];
$pregunta4=$_POST['pregunta4'];
$pregunta5=$_POST['pregunta5'];
$pregunta6=$_POST['pregunta6'];



$insertar="INSERT INTO cv( pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6) VALUES(
'$pregunta1',
'$pregunta2',
'$pregunta3',
'$pregunta4',
'$pregunta5',
'$pregunta6'
)";



$query=mysqli_query($con,$insertar);

if($query){
header('location:realizado2.html');

exit();

}

?>
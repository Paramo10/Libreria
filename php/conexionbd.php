<?php

$hostname='localhost';
$database='libreria_pony';
$username='root';
$password='';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
	echo "Lo sentimos, el sitio web esta experimentando problemas";
}

?>
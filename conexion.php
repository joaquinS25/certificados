<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "certificados_db";

$conn = mysqli_connect($host,$usuario,$password,$bd);

if(!$conn){
    die("Error de conexión");
}

?>
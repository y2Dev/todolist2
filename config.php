<?php


$host = "localhost" ;
$user = "root" ;
$password = "root"; 
$dataBase = "todolist" ;

$dir_fs =  $_SERVER['DOCUMENT_ROOT']."/todolist/" ; 
$dir_ws = "/todolist/";


$mysqli = @new mysqli($host, $user, $password, $dataBase);

/* Vérification de la connexion */
if ($mysqli->connect_errno) {
    printf("Échec de la connexion: %s\n", $mysqli->connect_error);
    exit();
}



?>
<?php

//Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear un eamil y password
$email = "mateo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

//Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash')";

//Agregarlo a la base de datos
mysqli_query($db, $query);

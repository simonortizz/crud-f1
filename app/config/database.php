<?php

// VALORES DE LOS PARAMETROS PARA LA CONEXION
$server = 'localhost';
$port = '3307'; // puerto cambiado
$user = 'root';
$password = '';
$database = 'campeonato';

// Crear conexión con MySQLi
$conn = mysqli_connect($server, $user, $password, $database, $port);

// Verificar si hubo error
if (!$conn) {
    die("Conexión errónea: " . mysqli_connect_error());
}

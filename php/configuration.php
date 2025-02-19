<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Datos de conexión a la base de datos
$servername = getenv('MYSQLHOST');
$username = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE');

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>
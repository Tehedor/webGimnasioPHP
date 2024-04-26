<?php
// Configuración de la base de datos
$db_host = 'localhost';
$db_user = 'root';
$db_password = '12345678';
$db_name = 'tewcdaatabase';

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


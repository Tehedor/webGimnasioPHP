<?php
// Configuración de la base de datos
$db_host = 'sql310.infinityfree.com';
$db_user = 'if0_36437702';
$db_password = 'Zw5pFn5qqC5';
$db_name = 'if0_36437702_usuarios';

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


<?php
require_once 'db_config.php'; 

function checkLogin($user, $password, $conn) 
{
    if(!isset($user) || !isset($password)) {
        return false;
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
    $stmt->execute([$user, $password]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        return $user;
    } else {
        return false;
    }
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$user = checkLogin($username, $password, $conn);

if(!$user) {
    session_destroy();
    $errorLogin = "El usuario o contraseñas incorrectos"; 
    header("Location: ../login.php?errorLogin=$errorLogin"); 
} else {
    session_start(); 
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $user['email'];
    $_SESSION['last_date'] = $user['last_date'];
    header('Location: ../usuario.php'); 
}
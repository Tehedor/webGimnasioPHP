<?php
require_once 'db_config.php'; 

function checkUserExists($username, $email, $conn) 
{

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    return $user ? true : false;
}

function registerUser($username, $email, $password, $conn) 
{
    $stmt = $conn->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
    
    $result = $stmt->execute([$username, $email, $password]);

    return $result;
}

$username = trim($_REQUEST['username']);
$email = trim($_REQUEST['email']);
$password = trim($_REQUEST['password']);


if(checkUserExists($_REQUEST['username'], $_REQUEST['email'], $conn)) {
    $errorRegistrar = "El nombre de usuario o el correo electrónico ya existen"; 
    header("Location: ../signup.php?errorregistrar=$errorRegistrar"); 
} else {
    $result = registerUser($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'], $conn);

    if($result) {
        header('Location: ../login.php?userCreated=1');
    } else {
        $errorRegistrar = "Error al registrar el usuario"; 
        header("Location: ../signup.php?errorregistrar=$errorRegistrar"); 
    }
}
?>
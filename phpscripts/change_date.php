<?php
session_start();
require_once 'db_config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentDate = new DateTime();

    error_log("Fecha de hoy: " . $currentDate->format('Y-m-d H:i:s'));

    $expiryDate = isset($_SESSION['last_date']) && new DateTime($_SESSION['last_date']) > $currentDate ? new DateTime($_SESSION['last_date']) : $currentDate;

    if ($expiryDate > $currentDate) {
        $interval = $currentDate->diff($expiryDate);
    } else {
        $interval = 0;
    }
    

    if ($interval->days > 10) {
        header('Location: ../usuario.php?errordate=No puedes renovar tu suscripción hasta que queden 10 días o menos para la fecha de caducidad.');
        exit;
    }

    $newExpiryDate = date('Y-m-d', strtotime($expiryDate->format('Y-m-d') . "+30 days"));     
    $_SESSION['last_date'] = $newExpiryDate;

    // Actualiza la fecha de caducidad en la base de datos
    $stmt = $conn->prepare("UPDATE usuarios SET last_date = ? WHERE username = ?");
    $stmt->execute([$newExpiryDate, $_SESSION['username']]);

    header('Location: ../usuario.php');
    exit;
}
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    // ##### ##### Datos del mensaje
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = 'reverte198@gmail.com';
    $subject = 'Nuevo mensaje de contacto';
    $headers = 'From: ' . $email;
    $body = "Nombre Completo: " . $fullName . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Movil: " . $phone . "\n";
    $body .= "Mensaje: " . $message;
    
    
    if (mail($to, $subject, $body, $headers)) {
        $messageMail = "Mensaje enviado correctamente";
        // header('Location: contact_response.html?messageMail=Mensaje enviado correctamente');
        // exit;
    } else {
        $messageMail = "Error al enviar el mensaje";
        // header('Location: contact_response.html?messageMail=Error al enviar el mensaje');
        // exit;
    }
    
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    // ##### ##### Subir fichero 
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    function is_valido($fichero) {
        $extValidas = array('jpg', 'jpeg', 'png', 'gif');
        $temp = explode('.', $_FILES[$fichero]['name']);    
        $extension = end($temp);
        $tipo = $_FILES[$fichero]['type'];
        $tipoValidos = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg', 'image/pjpeg', "image/x-png");
        $maxTamano = 1000000;
        // echo "<p> Extensión válida" . in_array($extension, $extValidas) . "</p>";
        // echo "<p> Tipo válido" . in_array($tipo, $tipoValidos) . "</p>";
        // echo "<p> Tamaño" . $_FILES[$fichero]['size'] . "</p>" ;
        // echo "<p> Tamaño válido" . ($_FILES[$fichero]['size'] < $maxTamano) . "</p>";
        return (in_array($extension, $extValidas) 
        && (in_array($tipo, $tipoValidos)) && ($_FILES[$fichero]['size'] < $maxTamano));
        
    }
    
    function muestraFichero($fichero) {
        // echo "<p> Subido:" . $_FILES[$fichero]['name'] . "</p>";
        // echo "<p> Tipo:" . $_FILES[$fichero]['type'] . "</p>";
        // echo "<p> Tamaño:" . $_FILES[$fichero]['size'] . "</p>";
        // echo "<p> Fichero temporal:" . $_FILES[$fichero]['tmp_name'] . "</p>";
    }
    
    function mueveFichero($origen, $destino){
        move_uploaded_file($origen, $destino);
        // echo "Fichero alamcenado en " . $destino  ;
    }
    
    function existedirectorio($directorio){
        return file_exists($directorio) && is_dir($directorio);
    }
    
    // echo "<div>";
    // echo "<h1> Resultado de subir fichero</h1>";
    
    $f = 'foto';
    $d = "/tmp/upload/";
    
    
    if (!is_valido($f)) {
        // echo "<p> Fichero inválido</p>";
        $messageFile = "Error subiendo fichero";
    } elseif ($_FILES[$f]['error'] > 0) {
        // echo "<p> Error: " . $_FILES[$f]['error'] . "</p>";
        $messageFile = "Error subiendo fichero";
    } else {
        muestraFichero($f);
        $fichero_movido = $d . $_FILES[$f]['name'];
        if (!existedirectorio($d)) {
            // echo "<p> Error: directorio de destino no existe</p>";
            $messageFile = "Directorio de destino no existe";
        } elseif(file_exists($fichero_movido)) {
            // echo "<p> Error: fichero ya existe</p>";
            $messageFile = "Fichero ya existe";
            
        } else {
            mueveFichero($_FILES[$f]['tmp_name'], $fichero_movido);
            $messageFile = "Fichero subido correctamente";
        }
    }
    // echo "</div>";
    
    
    
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    // ##### ##### Mensaje de respuesta
    // ##### ##### ##### ##### ##### ##### ##### ##### 
    $messageMail = urlencode($messageMail);
    $messageFile = urlencode($messageFile);
    header("Location: ../contact_response.php?messageMail=$messageMail&messageFile=$messageFile");
    exit;
    
}
?>
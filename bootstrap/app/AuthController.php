<?php
session_start();

if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    // Si las credenciales son correctas, puedes iniciar una sesión.
    if ($username === 'usuario' && $password === 'contrasena') {
        $_SESSION['logged_in'] = true;
        header('Location: panel.php');
        exit();
    } else {
        // Si las credenciales son incorrectas, puedes mostrar un mensaje de error.
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>
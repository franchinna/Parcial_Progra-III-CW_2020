<?php
require 'classes/DBConnection.php';

$seccion = $_GET['s'] ?? 'home';

$seccionesPermitidas = [
    'mantenimiento' => [
        'title' => 'Oops! Página en mantenimiento!!'
    ],
    'registro' => [
        'title' => 'Completa el registro de tu usaurio'
    ],
    'login' => [
        'title' => 'Ingresa y empieza a gestionar tu perfil'
    ],
    'panel-admin' => [
        'title' => 'Panel Administrativo - Addcard'
    ]
];

if (!isset($seccionesPermitidas[$seccion])) {
    $seccion = "mantenimiento";
}


// Preguntamos si llegó algún mensaje de éxito.
if (isset($_SESSION['exito'])) {
    $mensajeExito = $_SESSION['exito'];
    unset($_SESSION['exito']);
} else {
    $mensajeExito = "";
}

// Preguntamos si llegó algún mensaje de error.
if (isset($_SESSION['error'])) {
    $mensajeError = $_SESSION['error'];
    unset($_SESSION['error']);
} else {
    $mensajeError = "";
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/style.css">
    <link rel="icon" href="res/img/ico.svg">
    <title><?= $seccionesPermitidas[$seccion]['title']; ?></title>
</head>
<body>

<header>
    <?php require_once('res/templates/header.php') ?>
</header>

<main>
    <!-- Agregamos el mensaje de éxito, si es que hay. -->
    <?php
    if (!empty($mensajeExito)):
        ?>
        <div class="status-message status-success"><?= $mensajeExito; ?></div>
    <?php
    endif;
    ?>
    <!-- Agregamos el mensaje de error, si es que hay. -->
    <?php
    if (!empty($mensajeError)):
        ?>
        <div class="status-message status-error"><?= $mensajeError; ?></div>
    <?php
    endif;
    ?>
    <?php
    if (file_exists('secciones/' . $seccion . '.php')) {
        require 'secciones/' . $seccion . '.php';
    } else {
        require 'secciones/mantenimiento.php';
    }
    ?>
</main>

<footer>
    <?php if (!($seccion == 'login' || $seccion == 'registro')) {
        require_once('res/templates/footer.php');
    } ?>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="res/bootstrap/js/bootstrap.min.js"></script>
<script src="res/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
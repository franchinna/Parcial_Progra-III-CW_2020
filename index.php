<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/style.css">
    <link rel="icon" href="res/img/ico.svg">
    <title>Parcial de Programación y Clientes Web</title>
</head>
<body>

<?php require_once('templates/header.php') ?>

<main>

    <section id="warning" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="img-warning col-12 col-sm-3">
                    <img src="res/img/warning.svg" alt="imagen de advertencia" class="img-fluid">
                </div>
                <div class="col-12 col-sm-6 align-items-center">
                    <h2>
                        ¡Hola! Todavía nuestro sitio está en construcción.
                    </h2>
                    <p>¡¡Pero no te preocupes!! Mientras avanzamos con esto, puedes empezas a gestionar tu perfil
                        haciendo click <a href="login.php"><b>aquí</b></a></p>
                    <p>O si eres nuevo, puedes crear tu usuario <a href="register.php"><b>aquí</b></a></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once('templates/footer.php') ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="res/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="res/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
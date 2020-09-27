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
    <section id="registro" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="redes col-12 col-sm-8 col-lg-8">
                    <h2>Registra tu usuario</h2>
                    <p>Puedes utilizar las siguientes redes sociales para iniciar sesión</p>
                    <ul>
                        <li><a href="#" class="social fb"></a></li>
                        <li><a href="#" class="social tw"></a></li>
                        <li><a href="#" class="social ig"></a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-8 col-lg-8">
                    <hr>
                    <p>O<br>Puedes completar el siguiente formulario.</p>

                    <form action="#">
                        <div class="form-group">
                            <label for="email">Ingresa tu correo</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="emailConfirm">Ingresa nuevamente tu correo</label>
                            <input type="email" class="form-control" id="emailConfirm">
                        </div>
                        <div class="form-group">
                            <label for="password">Ingrese su password</label>
                            <input type="password" class="form-control" id="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirm">Ingresa nuevamente su password</label>
                            <input type="password" class="form-control" id="passwordConfirm" placeholder="">
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-outline-primary">Identificarme</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-8 col-lg-8 my-2">
                    <hr>
                    <a href="index.php" class="btn">Volver a la página de incio</a>
                </div>
            </div>
        </div>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="res/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="res/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
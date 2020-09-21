<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="res/css/estilos.css">
    <title>Parcial de Programacion y Clientes Web</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="navbar-brand" href="#">Navbar</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section id="login" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <h2>Identificate para poder acceder</h2>
                    <form action="">
                        <div class="form-group">
                            <label for="username">Ingrese su usuario</label>
                            <input type="text" class="form-control" id="username" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="password">Ingrese su password</label>
                            <input type="password" class="form-control" id="password" placeholder="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="res/bootstrap/js/bootstrap.min.js"></script>
<script src="res/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
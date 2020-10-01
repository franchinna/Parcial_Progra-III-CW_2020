<section id="iniciarSesion" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="logo col-12">
                <a href="../index.php"><h1>addcar app</h1></a>
            </div>
            <div class="form col-12">
                <h2>Panel Administrativo</h2>
                <p>Identifícate para poder acceder</p>
                <form action="#" id="form-login">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Ingrese su password">
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-outline-primary">Identificarme</button>
                    </div>
                </form>

                <!--TODO: LOGIN CON REDES SOCIALES, FB, G+, ETC-->
            </div>

            <div class="col-12 text-center">
                <hr>
                <a href="index.php?s=registro" class="btn">¿No estás registrado?</a>
                <a href="index.php" class="btn">Volver a la página de inicio</a>
            </div>
        </div>
    </div>
</section>

<script src="api/js/auth.js"></script>
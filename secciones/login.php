<?php
if (isset($_SESSION['errores'])) {
    $errores = $_SESSION['errores'];
    unset($_SESSION['errores']);
} else {
    $errores = [];
}
if (isset($_SESSION['old_data'])) {
    $old_data = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
} else {
    $old_data = [];
}
?>

<section id="iniciarSesion" class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
            if (isset($errores['credenciales'])):
                ?>
                <div class="status-message status-error"><?= $errores['credenciales']; ?></div>
            <?php
            endif;
            ?>
            <div class="logo col-12">
                <a href="../index.php"><h1>addcar app</h1></a>
            </div>
            <div class="form col-12">
                <h2>Panel Administrativo</h2>
                <p>Identifícate para poder acceder</p>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
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
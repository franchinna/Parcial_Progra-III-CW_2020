

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><h1>Addcar App</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $seccion == 'perfil' ? 'active' : ''; ?>" data-ancla="true"
                       href="index.php?s=perfil">Mi Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $seccion == 'logout' ? 'active' : ''; ?>" data-ancla="true"
                       href="acciones/logout.php">Cerrar Sesión ()</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $seccion == 'login' ? ' active' : ''; ?>" href="index.php?s=login">Iniciar
                        Sesión</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $seccion == 'registro' ? ' active' : ''; ?>"
                                        href="index.php?s=registro">Registrarme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Configuración</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

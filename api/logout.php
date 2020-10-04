<?php
use Auth\Auth;
use Session\Session;

session_start();
require_once '../autoload.php';

// Lo podemos también simplificar a...
(new Auth)->logout();

$_SESSION['exito'] = "La sesión se cerró exitosamente.";
header("Location: ../index.php");

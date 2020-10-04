<?php
use Auth\Auth;
use Validation\Validator;

// Vamos a loguear al usuario con las credenciales provistas :D
session_start();
require_once '../../autoload.php';
$email = $_POST['email'];
$password = $_POST['password'];


$reglas = [
    'email' => ['required', 'min:6'],
];

// Instanciamos el Validator, pasándole en el constructor los campos a validar, y las reglas de validación.
$validator = new Validator($_POST, $reglas);

// Preguntamos si la validación tuvo éxito.
if (!$validator->passes()) {
    $_SESSION['old_data'] = $_POST;
    $_SESSION['errores'] = $validator->getErrores();
    echo json_encode([
        'success' => false,
        'error' => 'Los datos ingresados son incorrectos.'
    ]);
    exit;
}
$auth = new Auth;
if($auth->login($email, $password)) {
    header('Location: ../../index.php?s=panel-admin');
    exit;
}

$_SESSION['old_data'] = $_POST;
$_SESSION['error'] = "Las credenciales ingresadas no coinciden con nuestros registros.";
header('Location: ../../index.php?s=login');

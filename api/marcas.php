<?php
session_start();
require_once '../classes/DBConnection.php';
require_once 'funciones/marcas.php';

header('Content-Type: application/json; charset=UTF-8');

$db = mysqli_connect('localhost', 'root', '', 'db_addcar');
mysqli_set_charset($db, 'utf8mb4');

// Verificamos cuál es el método de la petición, y en base a eso actuamos.
// Para obtener el método de la petición, podemos ayudarnos con la súperglobal $_SERVER['REQUEST_METHOD'] .
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['id'])) {
            // Buscamos una categoria por su id.
        } else {
            $marcas = marcasTodas($db);
            echo json_encode([
                'data' => $marcas
            ]);
        }
        break;

    case 'POST':
        break;

    case 'PUT':
        break;

    case 'PATCH':
        break;

    case 'DELETE':
        break;

    default:
        die('No existe la acción que estás buscando >:(');
}
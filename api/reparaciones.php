<?php
session_start();
require_once '../classes/DBConnection.php';
require_once 'funciones/reparaciones.php';

header('Content-Type: application/json; charset=UTF-8');

$db = mysqli_connect('localhost', 'root', '', 'db_addcar');
mysqli_set_charset($db, 'utf8mb4');

switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['id'])) {
            // Buscamos un producto por su id.
        } else {
            $reparaciones = reparacionesTodos($db);
//            $productos = Producto::todos();
            echo json_encode([
                'data' => $reparaciones
            ]);
        }
        break;

    case 'POST':
        // Verificamos si el usuario está autenticado.
        if(!isset($_SESSION['id'])) {
            echo json_encode([
                'success' => false,
                'error' => 'Se requiere haber iniciado sesión para realizar esta acción.'
            ]);
            exit;
        }

//        require_once 'acciones/productos-crear.php';
        $contenidoPost = file_get_contents('php://input');
        $postData = json_decode($contenidoPost, true);
        $exito = productosCrear($db, $postData);
//        $prod = new Producto;
//        $exito = $prod->crear($postData);
        if($exito) {
            echo json_encode([
                'success' => true
            ]);
        } else {
            echo json_encode([
                'success' => false
            ]);
        }
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
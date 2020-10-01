<?php
session_start();
require '../../classes/DBConnection.php';
header("Content-Type: application/json");

$db = DBConnection::getConnection();

$json = file_get_contents('php://input');
$postData = json_decode($json, true);


$email = $postData['email'];
$password = $postData['password'];

$query = "SELECT * FROM usuarios
          WHERE email = :email";

$stmt = $db->prepare($query);

$stmt->execute([
    'email' => $email
]);

while($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if(password_verify($password, $fila['password'])){
        $_SESSION['id'] = $fila['id_usuario'];
        echo json_encode([
            'success' => true,
            'user' => [
                'id' => $fila['id_usuario'],
                'nombre' => $fila['nombre'],
                'email' => $fila['email'],
            ]
        ]);
        exit;
    }
}

echo json_encode([
    'success' => false,
    'error' => 'Las credenciales son incorrectas.'
]);
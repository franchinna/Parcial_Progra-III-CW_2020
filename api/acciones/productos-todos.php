<?php
$query = "SELECT * FROM productos";

$res = mysqli_query($db, $query);

$salida = [];

while($fila = mysqli_fetch_assoc($res)) {
    $salida[] = $fila;
}

echo json_encode([
    'data' => $salida
]);
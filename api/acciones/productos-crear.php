<?php
// $_POST se poblaba con los datos que llegan por POST con formato de formulario.
// Como acá no hay un formato de form, sino un JSON, $_POST va a estar y no nos sirve.
//echo "<pre>";
//print_r($_POST); // Imprime Array ()
//echo "</pre>";

// ¿Cómo hacemo' entonce'?
// Vamos a tener que laburarlo un toque más:
// Tenemos que leer el string que recibimos por POST (a través del "buffer de entrada de php"), parsearlo
// con el json_decode, y recién ahí usarlo.
// Leemos el "buffer de entrada" con la función file_get_contents.
// 'php://input' es el buffer de entrada del body de la petición en php.
$contenidoPost = file_get_contents('php://input');
//echo $contenidoPost;
$postData = json_decode($contenidoPost, true);

// Escapamos los datos.
$nombre         = mysqli_real_escape_string($db, $postData['nombre']);
$precio         = mysqli_real_escape_string($db, $postData['precio']);
$id_marca       = mysqli_real_escape_string($db, $postData['id_marca']);
$id_categoria   = mysqli_real_escape_string($db, $postData['id_categoria']);
$descripcion    = mysqli_real_escape_string($db, $postData['descripcion']);

$query = "INSERT INTO productos (nombre, precio, id_marca, id_categoria, descripcion, imagen)
          VALUES ('" . $nombre . "', '" . $precio . "', '" . $id_marca . "', '" . $id_categoria . "', '" . $descripcion . "', '')";

$exito = mysqli_query($db, $query);

if($exito) {
    echo json_encode([
        'success' => true,
        'msg' => "Producto insertado con éxito."
    ]);
} else {
    echo json_encode([
        'success' => false,
        'msg' => "Error al insertar el producto en la base de datos."
    ]);
}
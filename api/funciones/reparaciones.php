<?php
/**
 * Retorna un array con todos los productos.
 *
 * @param MySQLi $db
 * @return array
 */
function reparacionesTodos($db) {
    $query = "select reparaciones.id,
                     reparaciones.fecha,
                     reparaciones.reparacion,
                     reparaciones.patente,
                     autos_marcas.marca,
                     autos_modelos.modelo
                        from reparaciones
                        inner join autos_marcas on
                            reparaciones.id_marca = autos_marcas.id
                        inner join autos_modelos on
                            reparaciones.id_modelo = autos_modelos.id;";

    $res = mysqli_query($db, $query);

    $salida = [];

    while($fila = mysqli_fetch_assoc($res)) {
        $salida[] = $fila;
    }

    return $salida;
}

/**
 * Crea un nuevo producto con la $data proporcionada.
 *
 * @param MySQLi $db
 * @param array $data
 * @return bool
 */
function productosCrear($db, $data) {
    $nombre         = mysqli_real_escape_string($db, $data['nombre']);
    $precio         = mysqli_real_escape_string($db, $data['precio']);
    $id_marca       = mysqli_real_escape_string($db, $data['id_marca']);
    $id_categoria   = mysqli_real_escape_string($db, $data['id_categoria']);
    $descripcion    = mysqli_real_escape_string($db, $data['descripcion']);

    $query = "INSERT INTO productos (nombre, precio, id_marca, id_categoria, descripcion, imagen)
          VALUES ('" . $nombre . "', '" . $precio . "', '" . $id_marca . "', '" . $id_categoria . "', '" . $descripcion . "', '')";

    return mysqli_query($db, $query);
}
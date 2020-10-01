<?php
/**
 * Retorna un array con todos los productos.
 *
 * @param MySQLi $db
 * @return array
 */
function marcasTodas($db) {
    $query = "select *
                from autos_marcas";

    $res = mysqli_query($db, $query);

    $salida = [];

    while($fila = mysqli_fetch_assoc($res)) {
        $salida[] = $fila;
    }

    return $salida;
}
<?php
// Iniciamos la sesión.
session_start();

// Ocultamos los mensajes de error. Muy útil en producción.
//ini_set('display_errors', 'Off');

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_BASE = 'db_addcar';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);

if(!$db) {
    require 'mantenimiento.php';
    exit;
}

mysqli_set_charset($db, 'utf8mb4');






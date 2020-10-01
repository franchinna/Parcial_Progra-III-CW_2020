<?php
session_start();

if(isset($_SESSION['id'])) {
    echo json_encode([
        'success' => true
    ]);
} else {
    echo json_encode([
        'success' => false
    ]);
}

//echo json_encode([
//    'success' => isset($_SESSION['id'])
//]);
<?php
session_start();

unset($_SESSION['id']);

echo json_encode([
    'success' => true
]);
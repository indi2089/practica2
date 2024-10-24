<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/practica2/public/index.php/usuarios':
        require __DIR__ . '/usuarios.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(['message' => 'Endpoint no encontrado']);
        break;
}
?>

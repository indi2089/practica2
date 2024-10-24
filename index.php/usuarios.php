<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        echo json_encode(['message' => "El id del usuario es $id"]);
    } else {
        echo json_encode(['message' => 'Lista de todos los usuarios']);
    }
}
?>

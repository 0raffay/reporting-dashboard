<?php

//include the database connection config
include '../users/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'GET':
        try {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $users = $api->showUser($id);
                header('Content-Type: application/json');
                echo json_encode($users);
            } else {
                header("HTTP/1.1 400 Bad Request");
                echo json_encode(['error' => 'Missing parameter: id']);
            }
        } catch (Exception $e) {
            header("HTTP/1.1 500 Internal Server Error");
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

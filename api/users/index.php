<?php

//include the database connection config
include '../users/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'GET':
        try {
            $users = $api->indexUser();
            header('Content-Type: application/json');
            echo json_encode($users);
        } catch (Exception $e) {
            header("HTTP/1.1 500 Internal Server Error");
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

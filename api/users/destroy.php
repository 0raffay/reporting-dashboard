<?php

//include the database connection config
include '../users/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'POST':
        try {

            $userData = isset($_POST['id']) ? $_POST['id'] : null;
            if ($userData === null) {
                throw new Exception("Missing id");
            }
            $results = $api->destroyUser($userData);
            header('Content-Type: application/json');
            echo json_encode($results);
        } catch (Exception $e) {
            header("HTTP/1.1 500 Internal Server Error");
            echo json_encode(['error' => $e->getMessage()]);
        }
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

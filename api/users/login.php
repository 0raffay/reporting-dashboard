<?php

include "../users/Services.php";

$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'POST':
        try {
            $userData = $_POST;
            $results = $api->login($userData);

            if ($results) {
                header('Content-Type: application/json');
                echo json_encode($results);
            } else {
                header("HTTP/1.1 401 Unauthorized");
                echo json_encode(['error' => 'Invalid email or password']);
            }
        } catch (Exception $e) {
            header("HTTP/1.1 500 Internal Server Error");
            echo json_encode(['error' => $e->getMessage()]);
        }
}

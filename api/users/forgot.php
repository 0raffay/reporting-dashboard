<?php
// include_once "../config/Database.php"
include "../users/Services.php";

$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'POST':
        // print_r($_POST);
        $postData = $_POST;
        $results = $api->forgotPassword($postData);
        header('Content-Type: application/json');
        echo json_encode($results);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

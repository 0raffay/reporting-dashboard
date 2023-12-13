<?php
//include the database connection config
include '../clients/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'GET':
        print_r($_GET);
        $api->viewClient();
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//include the database connection config
include '../clients/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'POST':
        print_r($_POST);
        $api->insertClient($_POST);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

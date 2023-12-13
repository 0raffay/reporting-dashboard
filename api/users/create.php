<?php

//include the database connection config
include '../users/Services.php';
//creating instance of the class
$api = new Services();

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'POST':
        print_r($_POST);
        $api->createUser($_POST);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

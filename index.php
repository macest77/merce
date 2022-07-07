<?php
require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

$method = $_SERVER['REQUEST_METHOD'];
$_request_data = array();
$_code = 200;

switch($method)
{
    case 'GET': 
        $_request_data = $_GET;
        break;
    case 'POST':
        $_request_data = $_POST;
        break;
    case 'PATCH':
    case 'PUT':
    case 'DELETE': 
        parse_str(file_get_contents('php://input'), $_request_data);
        break;

    default:
        $_code = 404;
}
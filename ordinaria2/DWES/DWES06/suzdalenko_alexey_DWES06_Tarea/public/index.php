<?php
require '../vendor/autoload.php';

use GuzzleHttp\Client;
use Suzdalenko\Task06\Operaciones;
use Suzdalenko\Task06\Conexion;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE");
# header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");


$BASE_URI      = "/servicios/unidad06";
$parsed_URI    = parse_url($_SERVER["REQUEST_URI"]);
$endpointName  = str_replace($BASE_URI, "", $parsed_URI["path"]);

$uri = explode( '/', $endpointName);
$first_element  = null;
if(isset($uri[1])) $first_element  = $uri[1];
$second_element = null;
if(isset($uri[2])) $second_element = $uri[2];
$third_element  = null;
if(isset($uri[3])) $third_element  = $uri[3];

$operaciones = new Operaciones();
$operaciones->routing($_SERVER["REQUEST_METHOD"], $first_element, $second_element, $third_element);




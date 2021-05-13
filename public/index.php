<?php


require __DIR__ . '/../src/bootstrap.php';

use Paw\App\Controllers\PageController;
use Paw\App\Controllers\ErrorController;


$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$log->info("Peticion a: {$path}");

$controller = new PageController;



if ($path == '/') {
    $controller->index();
    $log->info("Respuesta exitosa: 200");
} else if ($path == '/profesionales') {
    $controller->profesionales();
} else if ($path == '/obrasSociales') {
    $controller->index();
} else if ($path == '/institucional') {
    $controller->index();
} else if ($path == '/noticias') {
    $controller->index();
} else if ($path == '/login') {
    $controller->index();
} else{
  $controller = new ErrorController;
  $controller->notFound();
}
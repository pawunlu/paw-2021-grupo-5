<?php 

namespace Paw\App\Controllers;

class ErrorController {
    public string $viewsDir;

    public function __construct() {

        $this->viewsDir = __DIR__ . "/../views/";

        $this->menu = [
            [
                "href" => "/",
                "name" => "Home"
            ],

            [
                "href" => "/profesionales",
                "name" => "Profesionales y Especialidades"
            ],

            [
                "href" => "/obrasSociales",
                "name" => "Obras Sociales"
            ],

            [
                "href" => "/institucional",
                "name" => "Institucional"
            ],

            [
                "href" => "/noticias",
                "name" => "Noticias"
            ],

            [
                "href" => "/login",
                "name" => "Iniciar Sesión"
            ],
        ];
    }

    public function notFound() {
        http_response_code(404);
        echo "Page not found";
    }
}
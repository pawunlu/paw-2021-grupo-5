<?php

namespace Paw\App\Controllers;

class PageController {
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

    public function index() {
        require $this->viewsDir . 'index.view.php';
    }

    public function profesionales() {
        require $this->viewsDir . 'profesionales.view.php';
    }
}
<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PageController {

    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function home(RequestInterface $request, ResponseInterface $response ) {

        $this->container->view->render($response, 'pages/home.twig');
    }

}
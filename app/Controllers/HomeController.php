<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController {
    
    public function home(Request $request, Response $response, array $args)
    {
        $response->getBody()->write($res);
        $res = print_r($args);
        return $response;
    }
}
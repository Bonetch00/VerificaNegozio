<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

function autoload($classname)
{
    $paths = ['/', '/src/', '/controllers/'];

    foreach ($paths as $path) {
        $filename = __DIR__ . $path . $classname . ".php";
        if (file_exists($filename)) {
            require_once $filename;
            return;
        }
    }
}

spl_autoload_register("autoload");

$app->get('/negozio', "NegozioController:index");
$app->get('/negozio/articoli',"NegozioController:articoli");
$app->get('/negozio/articoli/{id}',"NegozioController:articolo");
$app->get('/negozio/ordini',"NegozioController:ordini");


$app->run();

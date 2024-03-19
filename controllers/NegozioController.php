<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class NegozioController{
    public function index(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("GameStop", 33333,"via andreotti","GameStop.com",001, [], [],[]);
        $negozio->popola();
        $str = json_encode($negozio);
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }

    public function articoli(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("GameStop", 33333,"via andreotti","GameStop.com",001, [], [],[]);
        $negozio->popola();
        $str = json_encode($negozio->getArticoli());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }

    public function ordini(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("GameStop", 33333,"via andreotti","GameStop.com",001, [], [],[]);
        $negozio->popola();
        $str = json_encode($negozio->getOrdini());
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }

    public function articolo(Request $request, Response $response, $args)
    {
        $negozio = new Negozio("GameStop", 33333,"via andreotti","GameStop.com",001, [], [],[]);
        $negozio->popola();

        $identificativo = intval($args["id"]);
        $str = json_encode($impianto->getArticolo($identificativo));
        $response->getBody()->write($str);
        return $response->withHeader("Content-Type", "application/json");
    }



}

?>
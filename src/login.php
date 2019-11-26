<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->post('/login/', function (Request $request, Response $response, array $args) use ($container) {

        $parms = $request -> getparsedbody();
        $conexao - $container->get('pdo');


        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        $resultSet = $conexao->query("INSERT INTO usuario (email,senha) VALUES ('".$params['clienteEmail']."','" .$params['clienteSenha']."');");
        // Render index view
        return $container->get('renderer')->render($response, 'paginainformacoes.phtml', $args);



    });



};

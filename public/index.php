<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add routes
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('<a href="/hello/world">Try /hello/world</a>');
    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/api/ticket/{id}', function (Request $request, Response $response, $args) {

    $tickets = file_get_contents("../ticket.json");
    $ticketsjson = json_decode($tickets, true);
    $tickets = json_encode($ticketsjson);
    $response = $response->withHeader('Content-Type', 'application/json');
    $response->getBody()->write($tickets);
    return $response;

    });
   
$app->post('/api/ticket', function (Request $request, Response $response, $args) {

    $ticketslist = "../ticket.json";
    $addTickets = file_get_contents("../create-ticket.php");
    $addTicketsJson = json_encode($addTickets, true);
    file_put_contents($ticketslist, $addTicketsJson);
    $response = $response->withHeader('Content-Type', 'application/json');
    $response->getBody()->write($tickets);
    return $response;

    });


$app->run();
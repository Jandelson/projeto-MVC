<?php

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\UploadedFile;

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true
]];

$app = new \Slim\App($config);

$app->get('/', function (Request $request, Response $response) {
    $UsersController = (new \App\Controllers\UsersController())->index();
});

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    return $response->write("Hello " . $args['name']);
});

$app->post('/add', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $UsersController = (new \App\Controllers\UsersController())->store($data);
});

$app->delete('/delete/{id}', function (Request $request, Response $response, $args) {
    $UsersController = (new \App\Controllers\UsersController())->delete($args['id']);
});

$app->run();

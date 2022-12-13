<?php
require(__DIR__.'/../vendor/autoload.php');

use Unic\App;

$app = new App();

$app->get('/', function($req, $res) {
  $res->send('');
});

$app->get('/user/{id}', function($req, $res) {
  $res->send($req->params->id);
});

$app->post('/user', function($req, $res) {
  $res->send('');
});

$app->start();

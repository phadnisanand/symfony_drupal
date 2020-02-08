<?php
$loader = require '../vendor/autoload.php';
require 'lib/Framework/Core.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$app = new Framework\Core();
$response = $app->handle($request);
$response->send();
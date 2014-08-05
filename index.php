<?php
require_once __DIR__ . '/vendor/autoload.php';



$klein = new \Klein\Klein();

foreach (glob("api/*.php") as $filename)
{
    include $filename;
}

$klein->respond('/', function ($request, $response, $service) { $service->render('client/index.phtml'); });


$klein->dispatch();
?>
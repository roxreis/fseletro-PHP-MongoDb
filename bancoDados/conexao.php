<?php


    require_once __DIR__ . "/../vendor/autoload.php";

    $client = new MongoDB\Client("mongodb://localhost:27017");

    $collectionProduct = $client->fseletro->produtos;
    $collectionOrder = $client->fseletro->pedidos;







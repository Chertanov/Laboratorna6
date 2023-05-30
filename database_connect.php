<?php
require_once __DIR__."/vendor/autoload.php";
$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);
$client = new \MongoDB\Client('mongodb+srv://chertanovyaraslav:3UITYerqw4@cluster0.3j3rmk5.mongodb.net/?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
$collections = $client->dbforlab->items;
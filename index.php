<?php

require_once 'vendor/autoload.php';

$db = new PDO('mysql:host=db; dbname=dinosaurs', 'root', 'password');
$dinos = \DinoFinder\classes\Hydrators\DinoHydrator\DinoHydrator::getAllDinos($db);

var_dump($dinos);
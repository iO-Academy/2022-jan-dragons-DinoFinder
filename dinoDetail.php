<?php

require_once 'vendor/autoload.php';
$db = \DinoFinder\Classes\Utilities\Db::getConnection();
$id = $_GET['id'];
$singleDino = \DinoFinder\Classes\Hydrators\DinoHydrator::getDinoByID($db, $id);


var_dump($singleDino);
<?php

namespace DinoFinder\Classes\Utilities;

class Db {
    public static function getConnection(): \PDO
    {
        return new \PDO('mysql:host=db; dbname=dinosaurs', 'root', 'password');
    }
}
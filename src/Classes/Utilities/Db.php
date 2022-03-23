<?php

namespace DinoFinder\Classes\Utilities;

class Db {

    /**
     * Creates a PDO connection to an SQL database
     *
     * @return \PDO
     */
    public static function getConnection(): \PDO
    {
        return new \PDO('mysql:host=db; dbname=dinosaurs', 'root', 'password');
    }
}
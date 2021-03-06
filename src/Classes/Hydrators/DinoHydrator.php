<?php
namespace DinoFinder\Classes\Hydrators;

use DinoFinder\Classes\Entities\DinoEntity;

class DinoHydrator {

    /**
     * Executes a SQL query against the database and returns the count of items in the dinos table
     *
     * @param \PDO $db
     *
     * @return array
     */
    public static function getDinoCount(\PDO $db): array {
        $query = $db->prepare('SELECT COUNT(`id`) FROM `dinos`');
        $query->setFetchMode(\PDO::FETCH_NUM);
        $query->execute();
        return $query->fetch();
    }

    /**
     * Executes an SQL query against the database and fetches all matching entries
     *
     * @param \PDO $db
     *
     * @return array
     */
    public static function getAllDinos(\PDO $db): array
    {
        $query = $db->prepare('SELECT `dinos`.`species`,`dinos`.`id`, (`foodTypes`.`name`) AS `diet`, `dinos`.`imageUrl`, (`foodTypes`.`imageUrl`) AS `foodImage` FROM `dinos` LEFT JOIN `foodTypes` ON `foodTypes`.`id` = `dinos`.`foodType`;');
        $query->setFetchMode(\PDO::FETCH_CLASS, DinoEntity::class);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Executes an SQL query against the database that fetches an individual dinosaur based on a given id
     *
     * @param \PDO $db
     *
     * @param int $id of selected dinosaur
     *
     * @return object containing selected dinosaur info
     */
    public static function getDinoByID(\PDO $db, int $id): object
    {
        $query = $db->prepare('SELECT `species`,`dinos`.`id`, (`foodTypes`.`name`) AS `diet`, `dinos`.`imageUrl`, (`foodTypes`.`imageUrl`) AS `foodImage`, `height`, `weight`, `killerRating`, `intelligence`, `age`, `length`
    FROM `dinos` LEFT JOIN `foodTypes` ON `foodTypes`.`id` = `dinos`.`foodType` WHERE `dinos`.`id` =' . $id  .';');
        $query->setFetchMode(\PDO::FETCH_CLASS, DinoEntity::class);
        $query->execute();
        return $query->fetch();
    }

    /**
     * Executes an SQL query against the database that fetches results based on a given search query against species
     *
     * @param \PDO $db
     *
     * @param str $search Search query
     *
     * @return array containing search results
     */
    public static function getSearchResults(\PDO $db, string $search): array
    {
        $searchTerm = '%' . $search . '%';
        $query = $db->prepare("SELECT `dinos`.`species`,`dinos`.`id`, (`foodTypes`.`name`) AS `diet`, `dinos`.`imageUrl`, (`foodTypes`.`imageUrl`) AS `foodImage` FROM `dinos` LEFT JOIN `foodTypes` ON `foodTypes`.`id` = `dinos`.`foodType` WHERE `dinos`.`species` LIKE :search;");
        $query->bindParam(':search', $searchTerm);
        $query->setFetchMode(\PDO::FETCH_CLASS, DinoEntity::class);
        $query->execute();
        return $query->fetchAll();
    }
}
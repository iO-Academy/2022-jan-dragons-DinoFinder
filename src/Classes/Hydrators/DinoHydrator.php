<?php
namespace DinoFinder\Classes\Hydrators;

use DinoFinder\Classes\Entities\DinoEntity;

class DinoHydrator {

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
}
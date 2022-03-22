<?php
namespace DinoFinder\classes\Hydrators\DinoHydrator;

use DinoFinder\classes\Entities\DinoEntity;

class DinoHydrator {
    public static function getAllDinos(\PDO $db)
    {
        $query = $db->prepare('SELECT `dinos`.`species`,`dinos`.`id`, (`foodTypes`.`name`) AS `diet`, `dinos`.`imageUrl`, (`foodTypes`.`imageUrl`) AS `foodImage` FROM `dinos` LEFT JOIN `foodTypes` ON `foodTypes`.`id` = `dinos`.`foodType`;');
        $query->setFetchMode(\PDO::FETCH_CLASS, DinoEntity::class);
        $query->execute();
        return $query->fetchAll();
    }
}
<?php

namespace DinoFinder\Classes\ViewHelpers;

use DinoFinder\Classes\Entities\DinoEntity;

class DinoViewHelper {
    public static function displaySingleDino(DinoEntity $dinos) {
        $result = '<h2>' . $dinos->getSpecies() . '</h2>';
        $result .= '<div class="imageContainer">';
        $result .= '<img src= "' . $dinos->getImageUrl() . '"alt="An image of a' . $dinos->getSpecies() . '"/>';
        $result .= '</div>';
        $result .= '<h4>' . $dinos->getDiet() . '</h4>';
        return $result;
    }
    public static function displayMultipleDinos(array $dinos) {
        $result = '';
        foreach ($dinos as $dino) {
            $result .= self::displaySingleDino($dino);
        }
        return $result;
    }
}
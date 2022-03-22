<?php

namespace DinoFinder\Classes\ViewHelpers;

use DinoFinder\Classes\Entities\DinoEntity;

class DinoViewHelper {
    /**
     * displays a single dinosaur's image, name and diet
     *
     * @param DinoEntity $dinos
     * @return string - concatenated string of dinosaur image, name and diet
     */
    public static function displaySingleDino(DinoEntity $dinos) : string {

        $result = '<div class="imageContainer">';
        $result .= '<img src= "' . $dinos->getImageUrl() . '" alt="An image of a ' . $dinos->getSpecies() . '"/>';
        $result .= '</div>';
        $result .= '<h2>' . $dinos->getSpecies() . '</h2>';
        $result .= '<h4>' . $dinos->getDiet() . '</h4>';
        return $result;
    }

    /**
     * displays multiple dinosaur images, names and diets
     *
     * @param array $dinos
     * @return string - concatenated strings of multiple dinosaur images, names and diets
     */
    public static function displayMultipleDinos(array $dinos) : string {
        $result = '';
        foreach ($dinos as $dino) {
            $result .= self::displaySingleDino($dino);
        }
        return $result;
    }
}
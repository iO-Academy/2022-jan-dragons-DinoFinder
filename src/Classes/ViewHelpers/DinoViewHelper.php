<?php

namespace DinoFinder\Classes\ViewHelpers;

use DinoFinder\Classes\Entities\DinoEntity;

class DinoViewHelper {
    /**
     * displays a single dinosaur's image, name, diet and button to view single dino's details
     *
     * @param DinoEntity $dinos
     *
     * @return string - concatenated string of dinosaur image, name, diet and button to view single dino's details
     */
    public static function displaySingleDino(DinoEntity $dinos) : string {

        $result = '<div class="dinoCard">';
        $result .= '<h2>' . $dinos->getSpecies() . '</h2>';
        $result .= '<div class="imageContainer">';
        $result .= '<img src= "' . $dinos->getImageUrl() . '" alt="An image of a ' . $dinos->getSpecies() . '"/>';
        $result .= '</div>';
        $result .= '<div class="dietContainer">';
        $result .= '<h4>' . $dinos->getDiet() . '</h4>';
        $result .= '<img src= "assets/image/' . $dinos->getFoodImage() . '" alt="An image of a ' . $dinos->getDiet() . '"/>';
        $result .= '</div>';
        $result .='<form method="get" action="dinoDetail.php">';
        $result .='<input type="hidden" name="id" value="' . $dinos->getId() . '"/>';
        $result .='<button type="submit"> View Dino Details </button>';
        $result .='</form>';
        $result .= '</div>';
        return $result;
    }

    /**
     * displays multiple dinosaur images, names and diets
     *
     * @param array $dinos
     *
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
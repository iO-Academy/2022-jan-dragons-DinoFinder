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
    public static function displaySingleDino(DinoEntity $dinos): string {

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
    public static function displayMultipleDinos(array $dinos): string {
        $result = '';
        foreach ($dinos as $dino) {
            $result .= self::displaySingleDino($dino);
        }
        return $result;
    }


    /**
     * Displays a single dino with added detail of height, weight, killer rating, intelligence, and age
     *
     * @param DinoEntity $dino
     *
     * @return string concatenated string of single dinosaur containing information regarding species, diet, an image, and the above-mentioned statistics
     */
    public static function displaySingleDinoDetails(DinoEntity $dino): string {

            $result = '<div class="detailsCard">';
            $result .= '<h2>' . $dino->getSpecies() . '</h2>';
            $result .= '<div class="imageContainer">';
            $result .= '<img src= "' . $dino->getImageUrl() . '" alt="An image of a ' . $dino->getSpecies() . '"/>';
            $result .= '</div>';
            $result .= '<div class="dietContainer">';
            $result .= '<h4>' . $dino->getDiet() . '</h4>';
            $result .= '<img src= "assets/image/' . $dino->getFoodImage() . '" alt="An image of a ' . $dino->getDiet() . '"/>';
            $result .= '</div>';
            $result .= '<p>Height: ' . $dino->getHeight() . '</p>';
            $result .= '<p>Weight: ' . $dino->getWeight() . '</p>';
            $result .= '<p>Length: ' . $dino->getLength() . '</p>';
            $result .= '<p>Killer Rating: ' . $dino->getKillerRating() . '</p>';
            $result .= '<p>Intelligence: ' . $dino->getIntelligence() . '</p>';
            $result .= '<p>Age: ' . $dino->getAge() . '</p>';
            $result .= '</div>';
            return $result;
    }

    public static function displaySequentialDino(string $singleDinoDetail, int $id, int $dinoCount) : string
    {
        $prev = $id > 1 ?  $id - 1 : 1;
        $next = $id < $dinoCount ? $id + 1 : $dinoCount;

        $render = '';

        if($id < 0 || $id > $dinoCount){
            return '<p class="noticeMessage">you are out of range</p>';
        } else {
            if ($id > 1) {
                $render .= '<a href="?id=' . $prev . '" class="dinoFeet" title="Previous Dinosaur">
                    <img src="assets/image/DinoPrints.svg" class="flipY" /><p>Previous Dino</p></a>';
                $render .= $singleDinoDetail;
            } else {
                $render .= '<a class="dinoFeet" title="Previous Dinosaur">';
                $render .= '<img src="assets/image/DinoPrints.svg" class="flipY" /></a>';
                $render .= $singleDinoDetail;
            }

            if ($id < $dinoCount) {
                $render .= '<a href="?id=' . $next . '" class="dinoFeet" title="Next Dinosaur">';
                $render .= '<img src="assets/image/DinoPrints.svg" /><p>Next Dino</p></a>';
            } else {
                $render .= '<a class="dinoFeet" title="Next Dinosaur">';
                $render .= '<img src="assets/image/DinoPrints.svg" /></a>';
            }
        }
        return $render;
    }



}
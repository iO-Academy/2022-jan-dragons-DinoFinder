<?php

namespace DinoFinder\Classes\Entities;

class DinoEntity
{
    private $id;
    private $species;
    private $diet;
    private $height;
    private $weight;
    private $length;
    private $killerRating;
    private $intelligence;
    private $age;
    private $imageUrl;
    private $foodImage;

    /** Gets dino ID
     * @return string - string containing the ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /** Gets Dino's Species
     * @return string - String of species name
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /** Gets Dino's diet
     * @return string - String of diet
     */
    public function getDiet(): string
    {
        return $this->diet;
    }

    /** Gets Dino's height
     * @return float - float of height
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /** Gets Dino's weight
     * @return float - float of weight
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /** Gets Dino's length
     * @return float - float of length
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /** Gets Dino's Killer Rating
     * @return integer - Int of Killer Rating
     */
    public function getKillerRating(): int
    {
        return $this->killerRating;
    }

    /** Gets Dino's Intelligence
     * @return integer
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    /** Gets Dino's Age
     * @return integer - Int of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /** Gets Dino's Image
     * @return string - String of image src
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /** Gets Dino's food image
     * @return string - string of local image src
     */
    public function getFoodImage(): string
    {
        return $this->foodImage;
    }

}
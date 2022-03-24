<?php

use \PHPUnit\Framework\TestCase;

require_once '../../../vendor/autoload.php';

class DinoViewHelperTest extends TestCase
{
    public function testDisplaySingleDinoSuccess()
    {
        $DinoEntityMock = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock->method('getSpecies')->willReturn('trex');
        $DinoEntityMock->method('getImageUrl')->willReturn('image.jpeg');
        $DinoEntityMock->method('getDiet')->willReturn('lettuce');
        $DinoEntityMock->method('getId')->willReturn('15');

        $case = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDino($DinoEntityMock);
        $expected = '<div class="dinoCard"><h2>trex</h2><div class="imageContainer"><img src= "image.jpeg" alt="An image of a trex"/></div><div class="dietContainer"><h4>lettuce</h4><img src= "assets/image/" alt="An image of a lettuce"/></div><form method="get" action="dinoDetail.php"><input type="hidden" name="id" value="15"/><button type="submit"> View Dino Details </button></form></div>';
        $this->assertEquals($expected, $case);
    }

    public function testDisplayMultipleDinosSuccess()
    {
        $DinoEntityMock = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock->method('getSpecies')->willReturn('marcusaurusRex');
		$DinoEntityMock->method('getImageUrl')->willReturn('rex.jpeg');
		$DinoEntityMock->method('getDiet')->willReturn('cheese');
        $DinoEntityMock->method('getId')->willReturn('15');

		$DinoEntityMock2 = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock2->method('getSpecies')->willReturn('marcusaurusRex2');
		$DinoEntityMock2->method('getImageUrl')->willReturn('rex2.jpeg');
		$DinoEntityMock2->method('getDiet')->willReturn('cheese2');
        $DinoEntityMock2->method('getId')->willReturn('16');

		$case = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos([$DinoEntityMock, $DinoEntityMock2]);
		$expected = '<div class="dinoCard"><h2>marcusaurusRex</h2><div class="imageContainer"><img src= "rex.jpeg" alt="An image of a marcusaurusRex"/></div><div class="dietContainer"><h4>cheese</h4><img src= "assets/image/" alt="An image of a cheese"/></div><form method="get" action="dinoDetail.php"><input type="hidden" name="id" value="15"/><button type="submit"> View Dino Details </button></form></div><div class="dinoCard"><h2>marcusaurusRex2</h2><div class="imageContainer"><img src= "rex2.jpeg" alt="An image of a marcusaurusRex2"/></div><div class="dietContainer"><h4>cheese2</h4><img src= "assets/image/" alt="An image of a cheese2"/></div><form method="get" action="dinoDetail.php"><input type="hidden" name="id" value="16"/><button type="submit"> View Dino Details </button></form></div>';
        $this->assertEquals($expected, $case);
	}

    public function testDisplaySingleDinoMalformed()
    {
        $testString = 'I am a dino';

		$this->expectException(TypeError::class);
		\DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDino($testString);
	}

    public function testDisplayMultipleDinosMalformed()
    {
        $testArray = [];
        $testArray2 = [];

		$this->expectException(TypeError::class);
		\DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos([$testArray, $testArray2]);
	}

    public function testDisplaySoloDinoSuccess(){
        $DinoEntityMock = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock->method('getSpecies')->willReturn('marcusaurusRex2');
        $DinoEntityMock->method('getDiet')->willReturn('cheese');
        $DinoEntityMock->method('getHeight')->willReturn(10.9);
        $DinoEntityMock->method('getWeight')->willReturn(2000.0);
        $DinoEntityMock->method('getLength')->willReturn(22.5);
        $DinoEntityMock->method('getKillerRating')->willReturn(9);
        $DinoEntityMock->method('getIntelligence')->willReturn(8);
        $DinoEntityMock->method('getAge')->willReturn(69);
        $DinoEntityMock->method('getImageUrl')->willReturn('image.jpg');
        $DinoEntityMock->method('getFoodImage')->willReturn('food.jpg');

        $case = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDinoDetails($DinoEntityMock);
        $expected = '<div class="detailsCard"><h2>marcusaurusRex2</h2><div class="imageContainer"><img src= "image.jpg" alt="An image of a marcusaurusRex2"/></div><div class="dietContainer"><h4>cheese</h4><img src= "assets/image/food.jpg" alt="An image of a cheese"/></div><p>Height: 10.9</p><p>Weight: 2000</p><p>Length: 22.5</p><p>Killer Rating: 9</p><p>Intelligence: 8</p><p>Age: 69</p></div>';
        $this->assertEquals($expected, $case);
    }

    public function testDisplaySoloDinoMalformed(){
        $testString = 'I am a dino';

        $this->expectException(TypeError::class);
        \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDinoDetails($testString);
    }
}






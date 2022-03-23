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

        $case = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDino($DinoEntityMock);
        $expected = '<div class="dinoCard"><div class="imageContainer"><img src= "image.jpeg" alt="An image of a trex"/></div><h2>trex</h2><div class="dietContainer"><h4>lettuce</h4><img src= "assets/image/" alt="An image of a lettuce"/></div></div>';
        $this->assertEquals($expected, $case);
    }

    public function testDisplayMultipleDinosSuccess()
    {
        $DinoEntityMock = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock->method('getSpecies')->willReturn('marcusaurusRex');
		$DinoEntityMock->method('getImageUrl')->willReturn('rex.jpeg');
		$DinoEntityMock->method('getDiet')->willReturn('cheese');

		$DinoEntityMock2 = $this->createMock(\DinoFinder\Classes\Entities\DinoEntity::class);
        $DinoEntityMock2->method('getSpecies')->willReturn('marcusaurusRex2');
		$DinoEntityMock2->method('getImageUrl')->willReturn('rex2.jpeg');
		$DinoEntityMock2->method('getDiet')->willReturn('cheese2');

		$case = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos([$DinoEntityMock, $DinoEntityMock2]);
		$expected = '<div class="dinoCard"><div class="imageContainer"><img src= "rex.jpeg" alt="An image of a marcusaurusRex"/></div><h2>marcusaurusRex</h2><div class="dietContainer"><h4>cheese</h4><img src= "assets/image/" alt="An image of a cheese"/></div></div><div class="dinoCard"><div class="imageContainer"><img src= "rex2.jpeg" alt="An image of a marcusaurusRex2"/></div><h2>marcusaurusRex2</h2><div class="dietContainer"><h4>cheese2</h4><img src= "assets/image/" alt="An image of a cheese2"/></div></div>';
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
}






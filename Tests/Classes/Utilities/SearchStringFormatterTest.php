<?php

use \PHPUnit\Framework\TestCase;

require_once '../../../vendor/autoload.php';

class SearchStringFormatterTest extends TestCase {

    public function testSearchStringFormatterSuccess()
    {

        $input = 'hello';
        $case = \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($input);
        $expected = 'hello';
        $this->assertEquals($expected, $case);
    }

    public function testSearchStringFormatterFailure()
    {

        $input = '123';
        $case = \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($input);
        $expected = 'Please remove any numbers from your search';
        $this->assertEquals($expected, $case);
    }

    public function testDisplaySingleDinoMalformed()
    {
        $input = ['i','am', 'an', 'array'];
        $this->expectException(TypeError::class);
        \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($input);
    }
}





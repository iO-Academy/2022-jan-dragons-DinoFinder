<?php

use \PHPUnit\Framework\TestCase;

require_once '../../../vendor/autoload.php';

class SearchStringFormatterTest extends TestCase {

    public function testNotTooManyCharSuccess()
    {
        $input = 'hello';
        $case = \DinoFinder\Classes\Utilities\SearchStringFormatter::notTooManyChar($input);
        $expected = true;
        $this->assertEquals($expected, $case);
    }

    public function testNotTooManyCharFailure()
    {
        $input = '';
        $case = \DinoFinder\Classes\Utilities\SearchStringFormatter::notTooManyChar($input);
        $expected = false;
        $this->assertEquals($expected, $case);
    }

    public function testnotTooManyCharMalformed()
    {
        $input = ['i','am', 'an', 'array'];
        $this->expectException(TypeError::class);
        \DinoFinder\Classes\Utilities\SearchStringFormatter::notTooManyChar($input);
    }
}





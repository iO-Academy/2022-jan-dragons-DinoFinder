<?php

require_once 'vendor/autoload.php';

$testString = 'hello345';

$finalString = \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($testString);

echo $finalString;
<?php

require_once 'vendor/autoload.php';

$searchInput = 'pachy';
$sanitisedString = \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($searchInput);
//$displaySearchedResults = '';
if (\DinoFinder\Classes\Utilities\SearchStringFormatter::notTooManyChar($sanitisedString)) {
    $db = \DinoFinder\Classes\Utilities\Db::getConnection();
    $searchedResults = \DinoFinder\Classes\Hydrators\DinoHydrator::getSearchResults($db, $sanitisedString);
    $displaySearchedResults = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos($searchedResults);
}


echo $displaySearchedResults;
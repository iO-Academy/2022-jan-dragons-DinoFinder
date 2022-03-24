<?php

require_once 'vendor/autoload.php';

if (!isset($_GET['searchInput'])) {
    header('Location: index.php');
}

$displaySearchedResults = '';
$searchInput = $_GET['searchInput'];
$sanitisedString = \DinoFinder\Classes\Utilities\SearchStringFormatter::checkSpecialCharacters($searchInput);

if (\DinoFinder\Classes\Utilities\SearchStringFormatter::notTooManyChar($sanitisedString)) {
    $db = \DinoFinder\Classes\Utilities\Db::getConnection();
    $searchedResults = \DinoFinder\Classes\Hydrators\DinoHydrator::getSearchResults($db, $sanitisedString);
    if (count($searchedResults) === 0) {
        $displaySearchedResults = '<h2 class="noticeMessage">Sorry, no results found.</h2>';
    } else {

        $displaySearchedResults = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos($searchedResults);
    }
}

?>

<html lang="en">
<head>
    <title>Dino Finder</title>
    <link rel="shortcut icon" type="image/jpg" href="assets/image/favicon.png"/>
    <link href= "normalize.css" type="text/css" rel="stylesheet"/>
    <link href="http://fonts.cdnfonts.com/css/jurassic-park" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<header>
    <a href="./index.php"><h1>Dino Finder</h1></a>
    <a href="index.php" class="backLink"><img src="assets/image/DinoFoot.svg" /> Back</a>
</header>
<form action="searchResults.php" method="get" class="searchBar">
    <input type="text" name="searchInput" placeholder="Search..." required maxlength="255" value="<?php echo $sanitisedString ?>">
    <input type="submit" value="Search" class="searchButton">
</form>
<h3>Search Results for "<?php echo $sanitisedString ?>"</h3>
<section class="dinoGrid">
    <?php echo $displaySearchedResults; ?>
</section>

</body>
</html>

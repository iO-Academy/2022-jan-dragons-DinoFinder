<?php

require_once 'vendor/autoload.php';

$db = \DinoFinder\Classes\Utilities\Db::getConnection();
$dinos = \DinoFinder\Classes\Hydrators\DinoHydrator::getAllDinos($db);
$displayDinos = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos($dinos);

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
            <h1>Dino Finder</h1>
        </header>
        <form action="searchResults.php" method="get" class="searchBar">
            <input type="text" name="searchInput" placeholder="Search..." required maxlength="255">
            <input type="submit" value="Search" class="searchButton">
        </form>
        <section class="dinoGrid">
            <?php echo $displayDinos; ?>
        </section>

    </body>
</html>

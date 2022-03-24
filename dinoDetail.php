<?php

require_once 'vendor/autoload.php';
$db = \DinoFinder\Classes\Utilities\Db::getConnection();
$id = $_GET['id'];
$singleDino = \DinoFinder\Classes\Hydrators\DinoHydrator::getDinoByID($db, $id);
$singleDinoDetail = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDinoDetails($singleDino);
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
<main>
    <img src="assets/image/DinoPrints.svg" class="dinoFeet flipY" />
    <?php echo $singleDinoDetail; ?>
    <img src="assets/image/DinoPrints.svg" class="dinoFeet" />
</main>

</body>
</html>



<?php

require_once 'vendor/autoload.php';
$db = \DinoFinder\Classes\Utilities\Db::getConnection();
$id = $_GET['id'];
$singleDino = \DinoFinder\Classes\Hydrators\DinoHydrator::getDinoByID($db, $id);
$singleDinoDetail = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displaySingleDinoDetails($singleDino);
$dinoCount = \DinoFinder\Classes\Hydrators\DinoHydrator::getDinoCount($db)[0];
$prev = intval($id) > 1 ?  intval($id) - 1 : 1;
$next = intval($id) < intval($dinoCount) ? intval($id) + 1 : intval($dinoCount);
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
<main>
    <a href="?id=<?php echo $prev; ?>" class="dinoFeet" title="Previous Dinosaur"><img src="assets/image/DinoPrints.svg" class="flipY" /><p>Previous Dino</p></a>
    <?php echo $singleDinoDetail; ?>
    <a href="?id=<?php echo $next; ?>" class="dinoFeet" title="Next Dinosaur"><img src="assets/image/DinoPrints.svg" /><p>Next Dino</p></a>
</main>

</body>
</html>



<?php

require_once 'vendor/autoload.php';
$db = \DinoFinder\Classes\Utilities\Db::getConnection();
$dinoCount = \DinoFinder\Classes\Hydrators\DinoHydrator::getDinoCount($db)[0];


if (!isset($_GET['id']) || ($_GET['id'] < 1 || $_GET['id'] > intval($dinoCount))) {
    header('Location: index.php');
}

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
    <a href="./index.php"><h1>Dino Finder</h1></a>
    <a href="index.php" class="backLink"><img src="assets/image/DinoFoot.svg" /> Back</a>
</header>
<main>
    <?php echo $singleDinoDetail; ?>
</main>

</body>
</html>



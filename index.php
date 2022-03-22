<?php

require_once 'vendor/autoload.php';

$db = new \PDO('mysql:host=db; dbname=dinosaurs', 'root', 'password');
$dinos = \DinoFinder\Classes\Hydrators\DinoHydrator::getAllDinos($db);
$displayDinos = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos($dinos);

?>


<html lang="en">
<head>
    <title>Title</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
    <link href= "normalize.css" type="text/css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $displayDinos; ?>
</body>
</html>

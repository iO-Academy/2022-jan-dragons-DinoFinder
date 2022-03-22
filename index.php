<?php

require_once 'vendor/autoload.php';

$db = new \PDO('mysql:host=db; dbname=dinosaurs', 'root', 'password');
$dinos = \DinoFinder\Classes\Hydrators\DinoHydrator::getAllDinos($db);
$displayDinos = \DinoFinder\Classes\ViewHelpers\DinoViewHelper::displayMultipleDinos($dinos);

?>

<body>
<?php echo $displayDinos; ?>
</body>


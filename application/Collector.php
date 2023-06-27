<?php

require_once 'cranes/Cargoes.php';
require_once 'cranes/Dispatcher.php';

$cargoesList = new Cargoes();
$chooser = new Dispatcher();

foreach ($cargoesList->getCargoesList() as $cargo){
    $messages[] = $chooser->getRightCranes($cargo);
}
?>

<ul>
    <?php foreach ($messages as $message) : ?>
        <li><?= $message ?></li>
    <?php endforeach; ?>
</ul>




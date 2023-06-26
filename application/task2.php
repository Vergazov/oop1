<?php

require_once 'cranes/Cargoes.php';
require_once 'cranes/Dispatcher.php';

$cargoesList = new Cargoes();
$getRightCranes = new Dispatcher();

foreach ($cargoesList->cargoes as $cargo){
    $messages[] = $getRightCranes->getRightCranes($cargo);
}
?>

<ul>
    <?php foreach ($messages as $message) : ?>
        <li><?= $message ?></li>
    <?php endforeach; ?>
</ul>




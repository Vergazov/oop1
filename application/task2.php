<?php

require_once 'cranes/Cranes.php';
require_once 'cranes/Cargoes.php';
require_once 'cranes/craneSearcher.php';
require_once 'cranes/messageCreator.php';

$cranesList = new Cranes();
$cargoesList = new Cargoes();
$searchCrane = new craneSearcher();
$createMessage = new messageCreator();

foreach ($cargoesList->cargoes as $cargo) {
    $rightCranes = $searchCrane->find($cargo, $cranesList->cranes);
    $messages[] = $createMessage->create($rightCranes, $cargo);
}

?>

<ul>
    <?php foreach ($messages as $message) : ?>
        <li><?= $message ?></li>
    <?php endforeach; ?>
</ul>
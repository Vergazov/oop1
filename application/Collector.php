<?php

namespace App;

require_once 'vendor/autoload.php';

$cargoes= [
        new Cargo(15,20),
        new Cargo(20,15),
        new Cargo(60,5),
        new Cargo(35,10),
];

$chooser = new Dispatcher();

foreach ($cargoes as $cargo){
    $messages[] = $chooser->getRightCranes($cargo);
}
?>

<ul>
  <?php foreach ($messages as $message) : ?>
     <li><?= $message ?></li>
  <?php endforeach; ?>
</ul>




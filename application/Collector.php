<?php

namespace App;

require_once 'vendor/autoload.php';

$cargoes= [
        new Cargoes(15,20),
        new Cargoes(20,15),
        new Cargoes(60,5),
        new Cargoes(35,10),
];

$chooser = new Dispatcher();

foreach ($cargoes as $cargo){
    $messages[] = $chooser->getRightCranes( [$cargo->getWeight(),$cargo->getDistance()] );
//    echo'<pre>';
//    print_r($messages);
//    echo'</pre>';
}
?>

<ul>
  <?php foreach ($messages as $message) : ?>
     <li><?= $message ?></li>
  <?php endforeach; ?>
</ul>




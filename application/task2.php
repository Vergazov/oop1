<?php

 ini_set('display_errors', 'On'); // сообщения с ошибками будут показываться
 error_reporting(E_ALL); // E_ALL - отображаем ВСЕ ошибки

require_once 'cranes/Cargoes.php';
require_once 'cranes/Dispatcher.php';

$cargoesList = new Cargoes();
$getRightCranes = new Dispatcher();

foreach ($cargoesList->cargoes as $cargo){
    $messages[] = $getRightCranes->getRightCranes($cargo);
}
//echo '<pre>';
//print_r($messages);
//echo '</pre>';
?>

<ul>
    <?php foreach ($messages as $message) : ?>
        <li><?= $message ?></li>
    <?php endforeach; ?>
</ul>




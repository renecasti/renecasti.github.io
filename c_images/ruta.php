<?php
 
echo "\nEste script se ejecuta en: " . __DIR__;
$padre = dirname(__DIR__);
echo "\nLa ruta del padre es: $padre";
$masArriba = dirname($padre);
echo "\nUna ruta más arriba es: $masArriba";
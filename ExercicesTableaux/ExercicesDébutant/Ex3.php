<?php
$apprenants = ["Redouane", "Dimitri", "Samir", "Charlie", "Pierre"];
$num = 1;

foreach($apprenants as $p){
    echo strtoupper($p) . " est le numéro : {$num}" ."</br>";
    $num ++;
}
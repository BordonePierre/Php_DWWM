<?php
$jour = random_int(1, 8);
echo "Le jour est le numéro {$jour}" . "</br>";
switch($jour) {
    case 1;
        echo "Lundi";
        break;
    case 2;
        echo "Mardi";
        break;
    case 3;
        echo "Mercredi";
        break;
    case 4;
        echo "Jeudi";
        break;
    case 5;
        echo "Vendredi";
        break;
    case 6;
        echo "Samedi";
        break;
    case 7;
        echo "Dimanche";
        break;

    default:
        echo "Jour inconnu";
}
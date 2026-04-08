<?php
$minuscules = str_split('abcdefghijklmnopqrstuvwxyz');
$majuscules = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$chiffres   = str_split('0123456789');
$speciaux   = str_split('!@#$%&*?');

$tous = array_merge($minuscules, $majuscules, $chiffres, $speciaux);
shuffle($tous);
$mdp = implode('', array_slice($tous, 0, 12));

echo "Mot de passe : {$mdp}\n";
echo "Longueur     : " . strlen($mdp) . " caractères\n";
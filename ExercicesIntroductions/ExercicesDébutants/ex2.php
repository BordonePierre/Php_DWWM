<?php
$entier = 59;
$flottant = 5.9;
$chaine = "Pierre";
$booleen = true;
$rien = null;

echo gettype($entier) . "<br/>";
echo gettype($flottant) . "<br/>";
echo gettype($chaine) . "<br/>";
echo gettype($booleen) . "<br/>";
echo gettype($rien) . "<br/>";

var_dump($entier, $flottant, $chaine, $booleen, $rien);
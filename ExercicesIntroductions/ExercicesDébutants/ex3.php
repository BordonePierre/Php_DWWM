<?php
$prix_ttc = 49.90;
$taux_tva = 0.20;

$prix_ht = $prix_ttc / 1 + $taux_tva;

$montant_tva = $prix_ht - $prix_ttc;

echo "Prix HT : " . $prix_ht . "€" . "<br/>";
echo "Montant TVA : " . $montant_tva . "€" . "<br/>";
echo "prix ttc : " . $prix_ttc . "€";

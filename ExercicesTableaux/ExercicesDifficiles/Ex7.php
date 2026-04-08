<?php
$ventes = [
    'Janvier' => 12500, 
    'Février' => 9800,
    'Mars' => 15200, 
    'Avril' => 11300,
    'Mai' => 18900, 
    'Juin' => 14700,
];

$totalVentes = 0;
$meilleureVente = null;
$nomMeilleureVente = "";
$moinsBonneVente = null;
$nomMoinsBonneVente = "";
$moyenne = 0;

foreach($ventes as $mois => $total){
    $totalVentes += $total;
    if($meilleureVente < $total){
        $meilleureVente = $total;
        $nomMeilleureVente = $mois;
    }
    if($moinsBonneVente === null || $moinsBonneVente > $total){
        $moinsBonneVente = $total;
        $nomMoinsBonneVente = $mois;
    }
}

$moyenne = $totalVentes/count($ventes);

echo "Le total des ventes est de : {$totalVentes}" . "</br>";
echo "La meilleure vente est durant le mois de {$nomMeilleureVente} avec {$meilleureVente} ventes" . "</br>";
echo "La moins bonne vente est durant le mois de {$nomMoinsBonneVente} avec {$moinsBonneVente} ventes" . "</br>";
echo "La moyenne des ventes est de {$moyenne}" . "</br>";

foreach($ventes as $mois => $total){
    if($total > $moyenne){
        echo "Le mois de {$mois} est au dessus de la moyenne avec un nombre de {$total} ventes" . "</br>";
    }elseif($total < $moyenne){
        echo "Le mois de {$mois} est en dessous de la moyenne avec un nombre de {$total} ventes" . "</br>";
    }else{
        echo "Le mois de {$mois} est égal à la moyenne avec un nombre de {$total} ventes" . "</br>"; 
    }
}
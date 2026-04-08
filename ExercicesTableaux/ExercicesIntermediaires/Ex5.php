<?php
$produits = [
    ['nom' => 'Clavier', 'prix' => 49.90,  'qte' => 15],
    ['nom' => 'Souris',  'prix' => 29.90,  'qte' => 0],
    ['nom' => 'Écran',   'prix' => 299.00, 'qte' => 8],
];
$total = 0;

foreach($produits as $p){
    if($p['qte'] > 10){
        echo "{$p['nom']} En stock" . "</br>";
    }elseif($p['qte'] > 0 && $p['qte'] <= 10){
        echo "{$p['nom']} Stock faible" . "</br>";
    }else{
        echo "{$p['nom']} Rupture" . "</br>";
    }
    $total += $p['qte'];
}

echo "Le nombre total d'articles est de : {$total}";
<?php
$commande = [
    ['produit' => 'Clavier', 'prix' => 49.90,  'qte' => 2],
    ['produit' => 'Souris',  'prix' => 29.90,  'qte' => 1],
    ['produit' => 'Écran',   'prix' => 299.00, 'qte' => 1],
    ['produit' => 'Casque',  'prix' => 89.90,  'qte' => 3],
];

$sous_totaux = array_map(fn($p) => $p['prix'] * $p['qte'], $commande);
$total_ht    = array_sum($sous_totaux);
$tva         = $total_ht * 0.20;
$total_ttc   = $total_ht + $tva;


echo "\n";
echo "Total HT     = " . number_format($total_ht,  2, ',', ' ') . " €\n";
echo "TVA 20%      = " . number_format($tva,       2, ',', ' ') . " €\n";
echo "Total TTC    = " . number_format($total_ttc, 2, ',', ' ') . " €\n";
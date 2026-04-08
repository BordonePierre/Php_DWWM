<?php
$produit = [
    "nom" => "produit",
    "prix" => 99,
    "stock" => 99,
    "disponible" => true,
];

echo $produit['nom'] . "<br/>" . $produit['prix'] . "€" . "<br/>" . $produit['stock'] . " produits sont disponibles" . "<br/>";

if($produit['disponible']) {
    echo "Produit disponible" . "<br/>";
} else {
    echo "produit indisponible" . "<br/>";
}

$prix_ttc = $produit['prix'] * 1.20;

echo "Le prix TTC est de : " . $prix_ttc . "€";
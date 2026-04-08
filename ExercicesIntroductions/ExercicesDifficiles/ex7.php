<?php
$produit = [
    "nom" => "Produit",
    "description" => "Ce produit est en vente dès aujourd'hui",
    "prix_ht" => 99,
    "tva" => 20,
    "stock" => 99,
    "actif" => true,
];

$prix_ttc = $produit['prix_ht'] * (1 + $produit['tva'] / 100);
echo "le prix ttc est de : " . $prix_ttc . "€";

$slug = strtolower($produit['nom']);
$slug = str_replace(" ", "-", $slug);

echo "<h1>{$produit['nom']}</h1>";
echo "<p>{$produit['description']}</p>";
echo "<p>Prix HT : {$produit['prix_ht']} €</p>";
echo "<p>TVA : {$produit['tva']} %</p>";
echo "<p>Prix TTC : {$prix_ttc} €</p>";
echo "<p>Stock : {$produit['stock']}</p>";
echo "<p>Actif : " . ($produit['actif'] ? "Oui" : "Non") . "</p>";
echo "<p>Slug : {$slug}</p>";
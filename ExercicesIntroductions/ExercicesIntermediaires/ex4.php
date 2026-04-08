<?php
$fruits = ["pomme", "banane", "orange"];

echo "Premier fruit : " . $fruits[0] . "<br/>";
echo "Dernier fruit : " . $fruits[2] . "<br/>";
echo "Nombre de fruits : " . count($fruits) . "<br/>";

$fruits[] = "kiwi";

echo "Après ajout : " . count($fruits) . "<br/>";

print_r($fruits);

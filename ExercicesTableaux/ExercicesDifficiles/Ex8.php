<?php
$taches = [
    'Faire exercice 1' => true,
    'Faire exercice 2'  => true,
    'Apprendre SQL' => false,
    'Faire la bdd' => false,
];

$count = 0;

foreach($taches as $nom => $fait){
    $icone = $fait ? 'Faite' : 'En cours';
    echo "{$nom} {$icone}" . "</br>";
    if($fait){
        $count ++;
    }
}

echo "Il y a {$count} tâches faites" . "</br>";

if(array_key_exists("Faire exercice 1", $taches)){
    echo "Faire l'exercice 1 existe";
}else{
    echo "N'existe pas";
}
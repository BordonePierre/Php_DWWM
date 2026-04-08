<?php
$joueurs = [
    ['nom' => 'Maignan',  'note' => 5.5],
    ['nom' => 'Gusto','note' => 6.5],
    ['nom' => 'Konaté', 'note' => 5],
    ['nom' => 'Upamecano', 'note' => 3],
    ['nom' => 'Théo Hernandez', 'note' => 6],
    ['nom' => 'Tchouameni', 'note' => 6.5],
    ['nom' => 'Rabiot', 'note' => 6.5],
    ['nom' => 'Olise', 'note' => 7],
    ['nom' => 'Mbappe', 'note' => 6.5],
];

usort($joueurs, fn($a, $b) => $b['note'] <=> $a['note']);

$rang = 1;

echo "Classement :" . "</br>";

foreach($joueurs as $j){
    echo "Joueur N°{$rang} : {$j['nom']} - note : {$j['note']}" . "</br>";
    $rang ++;
}

$recherche = "Tchouameni";
for($i = 0; $i < 3; $i++){
    if($recherche === $joueurs[$i]['nom']){
        echo "Le joueur {$recherche} est dans le top 3 avec le rang de n°" . $i + 1;
    }
}
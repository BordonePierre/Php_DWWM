<?php
$note = random_int(0, 20);
$mention = "";

if($note >= 18){
    $mention = "Très bien";
}elseif($note >= 14 && $note <= 17){
    $mention = "Bien";
}elseif($note >= 10 && $note <= 13){
    $mention = "Passable";
}else{
    $mention = "Insuffisant";
}

echo "La note est de : {$note}/20 et la mention : {$mention}";
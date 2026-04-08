<?php
$count = 10;

while($count != -1){
    if($count === 0){
        echo "Décollage ! 🚀";
    }elseif($count % 2){
        echo "{$count} impair" . "</br>";
    }else{
        echo "{$count} PAIR" . "</br>";
    }
    $count --;
}
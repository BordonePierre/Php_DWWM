<?php
$nombre = random_int(1,9);
echo "La table de : {$nombre}" . "</br>";
for ($i = 1; $i < 11; $i++) {
    echo "{$i} x {$nombre} = " . $i * $nombre . "</br>";
}
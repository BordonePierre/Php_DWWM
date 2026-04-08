<?php
session_start();

if(!isset($_SESSION['totalVisites'])){
    $_SESSION['totalVisites'] = 0;
}

$_SESSION['totalVisites']++;

echo "Total de visites : {$_SESSION['totalVisites']}";
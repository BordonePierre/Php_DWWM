<?php
session_start();

if(!isset($_SESSION['nom'])){
    $_SESSION['nom'] = "Pierre";
}

if(!isset($_SESSION['visites'])){
    $_SESSION['visites'] = 0;
}

$_SESSION['visites']++;

echo "Bonjour {$_SESSION['nom']} tu as visité {$_SESSION['visites']} x la page";
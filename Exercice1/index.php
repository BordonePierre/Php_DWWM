<?php
// Inclure l'en-tête (charge aussi config.php)
require_once 'includes/header.php';

// Contenu de la page
$heure    = date('H');   // heure actuelle (0-23)
$message  = "Bonjour";

echo "<p>Il est " . date('H:i') . "</p>";
echo "<p>" . $message . " depuis " . AUTEUR . "</p>";
echo "<p>PHP version : " . phpversion() . "</p>";

// Inclure le pied de page
require_once 'includes/footer.php';
?>
<?php
$email = "  Thomas.Darras@Real-Conseil.FR  ";
$email_propre = trim($email);
$email_propre = strtolower($email_propre);

echo "Email nettoyé : " . $email_propre . "<br/>";
echo "Longueur : " . strlen($email_propre) . " caractères" . "<br/>";
echo strpos($email_propre,"@");
echo "<br/>";
echo substr($email_propre,7);
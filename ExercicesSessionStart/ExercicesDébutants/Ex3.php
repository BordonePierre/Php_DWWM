<?php
session_start();

if(!isset($_SESSION['totalVisites'])){
    $_SESSION['totalVisites'] = 0;
}

$_SESSION['totalVisites']++;

echo "Total de visites : {$_SESSION['totalVisites']}" . "</br>";

if (isset($_GET['reset'])) {
    $_SESSION['totalVisites'] = 0;
    header("Location: Ex3.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Total visites</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <a href="Ex3.php ? reset=1"><button class="border-2 border-black bg-red-500 text-white">Réinitialiser le compteur</button></a>
</body>
</html>
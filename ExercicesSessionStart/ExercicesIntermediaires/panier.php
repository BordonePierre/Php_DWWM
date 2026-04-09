<?php
session_start();
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = [];
}

if (isset($_GET['produit'])) {
    $_SESSION['panier'][] = $_GET['produit'];
    header("Location: panier.php");
    exit;
}

if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
    header("Location: panier.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class = "flex flex-col gap-2 m-5">
    <a href="panier.php?produit=Produit1"><button class="border-2 border-black bg-red-500 text-white p-1">Ajouter produit 1</button></a>
    <a href="panier.php?produit=Produit2"><button class="border-2 border-black bg-red-500 text-white p-1">Ajouter produit 2</button></a>
    <a href="panier.php?vider=0"><button class="border-2 border-black bg-red-500 text-white p-1">Supprimer panier</button></a>
</body>
</html>

<?php
echo "Nombre d'articles dans le panier : " . count($_SESSION['panier']);
foreach ($_SESSION['panier'] as $item) {
    echo "<li>" . $item . "</li>";
}
?>
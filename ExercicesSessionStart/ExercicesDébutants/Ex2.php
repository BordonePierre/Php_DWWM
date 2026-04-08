<?php
session_start();

function e($v): string {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); 
}

$couleur = $_SESSION['couleur'] ?? 'white';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix couleur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="<?= e('bg-' . $couleur . '-500') ?> p-5">

<form method="POST" action="traitement.php">
    <p>Choisissez une couleur de fond :</p>

    <div class="flex flex-col gap-2">
        <label>
            <input type="radio" name="couleur" value="red"
                <?= $couleur === 'rouge' ? 'checked' : '' ?>>
            Rouge
        </label>

        <label>
            <input type="radio" name="couleur" value="blue"
                <?= $couleur === 'bleu' ? 'checked' : '' ?>>
            Bleu
        </label>

        <label>
            <input type="radio" name="couleur" value="green"
                <?= $couleur === 'vert' ? 'checked' : '' ?>>
            Vert
        </label>
    </div>

    <button type="submit" class="bg-white border-2 mt-5">Envoyer</button>
</form>

</body>
</html>
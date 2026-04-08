<?php
function e($v): string {
     return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); 
}

$nom = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $message = $_POST['message'] ?? '';
    $resultat = "Bonjour {$nom}, tu as écrit : {$message}";
}
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <?php if ($resultat) echo "<p>{$resultat}</p>"; ?>

    <form method="post">
        <input name="nom" value="<?= e($nom) ?>">
        <textarea name="message"><?= e($message) ?></textarea>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>


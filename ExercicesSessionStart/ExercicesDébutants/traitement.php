<?php
session_start();

if (isset($_POST['couleur'])) {
    $_SESSION['couleur'] = $_POST['couleur'];
}

header("Location: Ex2.php");
exit;
<?php
require_once __DIR__ . '/../app/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'] ?? '';
    $contenu = $_POST['contenu'] ?? '';
    $utilisateur_id = $_POST['utilisateur_id'] ?? '';

if ($titre !== '' && $contenu !== '' && $utilisateur_id !== '') {
     $stmt = $pdo->prepare("INSERT INTO articles (titre, contenu, utilisateur_id) VALUES (:titre, :contenu, :utilisateur_id)");
        $stmt->execute([
            'titre' => $titre,
            'contenu' => $contenu,
            'utilisateur_id' => $utilisateur_id
    ]);
    header ('location: index.php');
    exit;


    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Forum Manchester United</h1>
    </header>
    <div class="container">
    <h2>Ajouter un article</h2>

    <form method="POST">
        <label>Titre :</label><br>
        <input type="text" name="titre" required><br><br>

        <label>Contenu :</label><br>
        <textarea name="contenu" required></textarea><br><br>

        <input type="hidden" name="utilisateur_id" value="1">

        <button type="submit" class="bout_creer">Publier</button>
    </form>

    <a href="index.php" class="bout_creer">Retour</a>
    </div>
    <footer>
        <p>Forum Manchester United 2026</p>
    </footer>
</body>
</html>


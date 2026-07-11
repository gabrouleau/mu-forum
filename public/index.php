<?php
require_once __DIR__ . '/../app/db.php';

$stm = $pdo->query("SELECT articles.*, utilisateur.nom FROM articles
JOIN utilisateur ON articles.utilisateur_id = utilisateur.id
ORDER BY date_publication DESC");

$articles = $stm->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester United Forum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Forum Manchester United</h1>
    </header>
    <a href="ajouter.php" class="bout_creer">Créer un article</a>

   <div class="container">
    <?php if (count($articles) === 0): ?>
        <p>Pas d'article de créer pour le moment.</p>
    <?php else: ?>
        <?php foreach ($articles as $article): ?>
        <div class="article">
            <h2><?= $article['titre'] ?></h2>
            <p><?= $article['contenu'] ?></p>
            <p><?= $article['nom'] ?></p>
            <p><?= $article['date_publication'] ?></p>
            <a href="supprimer.php?id=<?= $article['id'] ?>" class="bout_creer">Supprimer l'article</a>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
<footer>
    <p>Forum Manchester United 2026</p>
</footer>
</body>
</html>
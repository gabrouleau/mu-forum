<?php
require_once __DIR__ . '/../app/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

header('Location: index.php');
exit;


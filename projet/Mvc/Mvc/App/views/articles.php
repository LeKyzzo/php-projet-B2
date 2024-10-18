
<h1>Liste des articles</h1>

<?php foreach ($articles as $article): ?>
    <h2><?= htmlspecialchars($article->getTitre()); ?></h2>
    <p><?= htmlspecialchars($article->getContenu()); ?></p>
    <a href="index.php?controller=article&action=show&id=<?= $article->getId(); ?>">Lire plus</a>
<?php endforeach; ?>

<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
    <p><a href="/articles/<?= $article->getId() ?>/edit">Edit</a></p>
<?php include __DIR__ . '/../footer.php'; ?>
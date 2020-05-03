<?php include __DIR__ . '/../header.php'; ?>
    <h1>Article Editing</h1>
    <?php if(!empty($error)): ?>
        <div style="color: red;"><?= $error ?></div>
    <?php endif; ?>
    <form action="/articles/<?= $article->getId() ?>/edit" method="post">
        <label for="name">Name of Article</label><br>
        <input type="text" name="name" id="name" value="<?= $_POST['name'] ?? $article->getName() ?>" size="50"><br>
        <br>
        <label for="text">Article text here..</label><br>
        <textarea name="text" id="text" rows="10" cols="80"><?= $_POST['text'] ?? $article->getText() ?></textarea><br>
        <br>
        <input type="submit" value="Обновить">
    </form>
<?php include __DIR__ . '/../footer.php'; ?>
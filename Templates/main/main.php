<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>My blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            My Blog
        </td>
    </tr>
    <tr>
        <td>
            <?php foreach ($articles as $article): ?>
                <h2><?= $article['name'] ?></h2>
                <p><?= $article['text'] ?></p>
                <hr>
            <?php endforeach; ?>
        </td>

        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Menu</div>
            <ul>
                <li><a href="/">Main Page</a></li>
                <li><a href="/about-me">About</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">All rights reserved 2020</td>
    </tr>
</table>

</body>
</html>
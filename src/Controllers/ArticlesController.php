<?php

namespace Controllers;

use Models\Articles\Article;
use Models\Users\User;
use View\View;
use Exceptions\NotFoundException;

class ArticlesController
{
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        // $reflector = new \ReflectionObject($article);
        // $properties = $reflector->getProperties();
        // var_dump($properties);
        // return;

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article
        ]);
    }

    public function edit(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');

        $article->save();
    }

    public function add(): void
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');

        $article->save();
        $article->delete();

        var_dump($article);
    }

    // public function delete($articleId)
    // {
    //     $article = Article::getById($articleId);
    //     $article->delete();
    // }
}

<?php

namespace Controllers;

use Models\Articles\Article;
use Services\Db;
use View\View;

class MainController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = Db::getInstance();
    }

    public function main()
    {
        $articles = Article::findAll();
        // var_dump($articles);
        // return;    
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);

    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }
}
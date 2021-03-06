<?php

namespace Controllers;

use Models\Articles\Article;

class MainController extends AbstractController
{
    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    //my first function:)
    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }
    
}

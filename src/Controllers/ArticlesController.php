<?php

namespace Controllers;

use Services\Db;
use View\View;

class ArticlesController
{
    /** @var View */
    private $view;

    /** @var Db */
    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = new Db();
    }

    public function view()
    {
        echo 'Здесь будет получение статьи и рендеринг шаблона';
    }
}
<?php

namespace Controllers;

use View\View;
use Services\Db;

class MainController
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

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
}   

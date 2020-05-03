<?php

namespace Controllers;

class AboutController extends AbstractController
{
    public function about()
    {
        $this->view->renderHtml('main/about.php');
    }
}

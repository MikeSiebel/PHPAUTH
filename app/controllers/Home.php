<?php

namespace App\controllers;


use  App\core;

class Home extends core\Controller
{
    public function index()
    {
        $this->view->generate('home.phtml', 'template.phtml');
    }
}

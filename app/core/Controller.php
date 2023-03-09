<?php

namespace App\core;

class Controller
{
    protected  $view;

    public function __construct($model = null)
    {
        $this->view = new View();
    }
    public function index()
    {
        
    }

}

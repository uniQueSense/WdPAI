<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function login()
    {
        $this->render('login');
    }

    public function projects()
    {
        $this->render('projects');
    }

    public function register_0()
    {
        $this->render('register_0');
    }
}
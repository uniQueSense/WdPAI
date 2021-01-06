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

    public function register()
    {
        $this->render('register');
    }

    public function search()
    {
        $this->render('search');
    }

    public function aboute()
    {
        $this->render('aboute');
    }
    public function theatre()
    {
        $this->render('theatre');
    }
}
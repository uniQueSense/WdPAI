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
    public function booking()
    {
        $this->render('booking');
    }
    public function register_1()
    {
        $this->render('register_1');
    }
    public function register_2()
    {
        $this->render('register_2');
    }
    public function spectacl()
    {
        $this->render('spectacl');
    }
}
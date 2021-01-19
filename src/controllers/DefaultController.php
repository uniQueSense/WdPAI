<?php

require_once 'AppController.php';

class DefaultController extends AppController {



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

    public function spectacl()
    {
        $this->render('spectacl');
    }
    public function test()
    {
        $this->render('test');
    }
}
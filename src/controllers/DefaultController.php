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

    public function aboute()
    {
        $this->render('aboute');
    }


}
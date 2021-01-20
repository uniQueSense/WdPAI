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

    public function booking()
    {
        $this->render('booking');
    }

    public function spectacl()
    {
        $performencesRepository = new SearchRepository();
        $spectacle = $performencesRepository->getAllPerformances();
        var_dump($spectacle);

        $this->render('spectacl', ['spectacle'=>$spectacle]);
    }

    public function test()
    {
        $this->render('test');
    }
}
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
    {   if( !isset($_COOKIE['id']) ) {
        return $this->render('login');
    }
        $theatreID = $_GET['Tid'];
        $spectacleID = $_GET['Sid'];

        $repo = new SpectacleRepository();
        $seats = $repo->getSeats($spectacleID, $theatreID);
        $this->render('booking', ['seats' => $seats, 'id' => ['Sid' => $spectacleID, 'Tid' => $theatreID]]);
    }

    public function index() {
        $this->spectacl();
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
        $repo = new SpectacleRepository();
        $test = $repo->getSeats(1,1);
        var_dump($test);
        die();
    }
}
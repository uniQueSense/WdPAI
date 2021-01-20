<?php

require_once 'AppController.php';
require_once __DIR__."/../repository/TheatreRepository.php";

class TheatreController extends AppController {

    public function theatre() {

        $theatreRepository = new TheatreRepository();
        $theatre = $theatreRepository->getAllTheatres();

        $this->render('theatre', ['theatre'=>$theatre]);
    }
}
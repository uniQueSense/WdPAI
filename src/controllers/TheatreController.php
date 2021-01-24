<?php



class TheatreController extends AppController {

    public function theatre() {

        $theatreRepository = new TheatreRepository();
        $place = $theatreRepository->getAllTheatres();

        $this->render('theatre', ['theatre'=>$place]);
    }
}
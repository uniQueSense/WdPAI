<?php



class TheatreController extends AppController {

    public function theatre() {

        $theatreRepository = new TheatreRepository();
        $place = $theatreRepository->getAllTheatres();

        $this->render('theatre', ['theatre'=>$place]);
    }

    public function theatreDetails() {
        $id = $_GET['id'];
        $repo = new SpectacleRepository();
        $spectacles = $repo->getSpectaclesByTheatre($id);

        //TODO RENDER VIEW
    }
}
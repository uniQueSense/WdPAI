<?php


class SpectacleController extends AppController {

    public function recommendedSpectacle() {
        $spectacleRepository = new SpectacleRepository();
        $spectacle = $spectacleRepository->getRandomSpectacle();

        $this->render('projects', ['spectacle'=>$spectacle]);
    }

    public function chosenSpectacle() {
        $spectacleRepository = new SpectacleRepository();

        $id_spectacle = $_GET["id"];
        $thisSpectacle = $spectacleRepository->getOnceSpectacle($id_spectacle);
        $actors = $spectacleRepository->getSpectacleWithActors($id_spectacle);
       if (empty($thisSpectacle)) {
           return ;
       }

        $this->render('spectacle', ['spectacle'=>$thisSpectacle, 'actors' => $actors]);

    }

}
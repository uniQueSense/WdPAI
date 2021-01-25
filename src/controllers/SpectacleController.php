<?php


class SpectacleController extends AppController {

    public function recommendedSpectacle() {
        $spectacleRepository = new SpectacleRepository();
        $spectacle = $spectacleRepository->getRandomSpectacle();

        $this->render('projects', ['spectacle'=>$spectacle]);
    }

    public function chosenSpectacle() {
        $spectacleRepository = new SpectacleRepository();
        $thisSpectacle = $spectacleRepository->getOnceSpectacle(1);

        $this->render('spectacle', ['spectacle'=>$thisSpectacle]);
    }


}
<?php




class SpectacleController extends AppController {

    public function recommendedSpectacle() {
        $spectacleRepository = new SpectacleRepository();
        $spectacle = $spectacleRepository->getRandomSpectacle();
        $this->render('projects', ['spectacle'=>$spectacle]);
    }


}
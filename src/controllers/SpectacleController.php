<?php


class SpectacleController extends AppController {

    public function recommendedSpectacle() {
        $spectacleRepository = new SpectacleRepository();
        $spectacle = $spectacleRepository->getRandomSpectacle();

        $this->render('homepage', ['spectacle'=>$spectacle]);
    }

    public function chosenSpectacle() {
        $spectacleRepository = new SpectacleRepository();

        $id_spectacle = $_GET["id"];
        $thisSpectacle = $spectacleRepository->getOnceSpectacle($id_spectacle);
        $actors = $spectacleRepository->getSpectacleWithActors($id_spectacle);
        $theatres = $spectacleRepository->getTheatersWithSpectacle($id_spectacle); //teatry,miasta, nazwy etc.

        foreach ($theatres as $i => $theatre) {
            $seats = $spectacleRepository->getSeats($id_spectacle, $theatre['id_theatre']);
            if(! empty($seats)) {
                $freeSeats = $seats['seats_max'] - $seats['seats_occupied'];
                if($freeSeats == 0) {
                    unset($theatres[$i]);
                } else {
                    $theatres[$i]['free_seats'] = $freeSeats;
                }
            }
        }

        $this->render('spectacle', ['spectacle'=>$thisSpectacle, 'actors' => $actors, 'theatres' => $theatres]);
    }

}
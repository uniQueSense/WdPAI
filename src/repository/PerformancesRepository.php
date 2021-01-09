<?php

require_once "Repository.php";
require_once __DIR__."/../models/Performances.php";
class PerformancesRepository extends Repository
{
    public function getPerformances(int $id): ?Performances {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.performances WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $performances = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($performances == false) {
            // TODO napisac metode zwracajaca exception BAZA DANYCH W PHP 28:40
            return null;
        }

        return new Performances(
            $performances['title'],
            $performances['image'],
            $performances['description'],
            $performances['cast']
        );
    }

    //TODO PHP ORAZ INSERT STATEMENT 24:00
}
<?php

class TheatreRepository extends Repository {

    public function getAllTheatres(): array {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM theatre;
        ');
        $stmt->execute();

        $theatres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $array = [];

        foreach ($theatres as $theatre) {
            $array[] = new Theatres(
                $theatre['id_theatre'],
                $theatre['name'],
                $theatre['city'],
                $theatre['street'],
                $theatre['number']
            );
        }

        return $array;
    }
}
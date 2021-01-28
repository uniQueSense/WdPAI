<?php

class SearchRepository extends Repository
{
    public function getAllPerformances(): array {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM spectacle;
        ');
        $stmt->execute();

        $spectacles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $array = [];

        foreach ($spectacles as $spectacle){

            $array[] = new Performances(
                $spectacle['id_spectacle'],
                $spectacle['title'],
                $spectacle['description'],
                $spectacle['cost'],
                $spectacle['image']
            );
        }

        return $array;
    }

    public function getPerformancesByTittle(string $searchString): ?array {

        $searchString = '%'.strtolower($searchString).'%';
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM spectacle WHERE LOWER(title) LIKE :search');

        $stmt->bindParam(':search', $searchString);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?

require_once "Repository.php";
require_once  __DIR__.'/../models/Performances.php';

class SpectacleRepository extends Repository {

    public function getRandomSpectacle(): ?array {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM spectacle ORDER BY random() LIMIT 15
        ');

        $stmt->execute();

        $spectacles = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

    public function getOnceSpectacle($int): ?array {

        $stmt = $this->database->connect()->prepare('
        SELECT * FROM spectacle WHERE id_spectacle = ?');

        $stmt->execute([$int]);
        $spectacle = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $spectacle;

    }

}
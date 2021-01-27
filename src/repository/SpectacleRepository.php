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

    public function getSpectacleWithActors(int $spectacleID): ?array {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM actor_spectacle acsp LEFT JOIN actor ac on ac.id_actor = acsp.id_actor 
        WHERE acsp.id_spectacle = ?;
        ');

        $stmt->execute([$spectacleID]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getTheatersWithSpectacle(int $spectacleID): ?array {
        $stmt = $this->database->connect()->prepare('
        SELECT t.id_theatre, t.city, t.name FROM spectacle s
        LEFT JOIN spectacle_theatre st on s.id_spectacle = st.id_spectacle
        LEFT JOIN theatre t on st.id_theatre = t.id_theatre
        WHERE s.id_spectacle = ?
        ORDER BY t.city;
        ');

        $stmt->execute([$spectacleID]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSeats(int $spectacleID, int $theatreID): ?array {
        $stmt = $this->database->connect()->prepare('
       SELECT seats FROM spectacle_theatre WHERE id_theatre=? AND id_spectacle=?;
        ');

        $stmt->execute([$theatreID, $spectacleID]);
        $json = $stmt->fetchColumn(0);
        return json_decode($json, true);
    }

    public function updateSeats(string $seatJSON, int $spectacleID, int $theatreID): bool {
        $stmt = $this->database->connect()->prepare('
        UPDATE spectacle_theatre SET seats=? WHERE id_theatre=? AND id_spectacle=?;
        ');

        return $stmt->execute([$seatJSON, $theatreID, $spectacleID]);
    }

    public function getSpectaclesByTheatre(int $id)
    {
        $stmt = $this->database->connect()->prepare('
        SELECT s.id_spectacle, s.title, s.image FROM theatre t 
        LEFT JOIN spectacle_theatre st ON t.id_theatre = st.id_theatre
        LEFT JOIN spectacle s on s.id_spectacle = st.id_spectacle
        WHERE t.id_theatre = ?;
        ');

        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
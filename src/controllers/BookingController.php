<?php

require_once 'AppController.php';

class BookingController extends AppController {

    public function booking()
    {   if( !isset($_COOKIE['id']) ) {
        return $this->render('login');
    }
        $theatreID = $_GET['Tid'];
        $spectacleID = $_GET['Sid'];

        $repo = new SpectacleRepository();
        $seats = $repo->getSeats($spectacleID, $theatreID);

        $seatsMapped = $this->mapSeats($seats['seats']);
        for ($i =1; $i<=3; $i++){
            for ($j =1; $j<=3; $j++){
                if( $seatsMapped[$i][$j] === null) echo 'null ';
            }
        }
        $this->render('booking', ['seats' => $seatsMapped, 'id' => ['Sid' => $spectacleID, 'Tid' => $theatreID]]);
    }

    public function bookSeat() {
        if( !isset($_COOKIE['id'])) {
            return $this->render('login');
        }

        $seatRow = $_POST['seat_row'];
        $seatCol = $_POST['seat_col'];
        $Sid = $_POST['Sid'];
        $Tid = $_POST['Tid'];
        $password = $_POST['passwd'];
        $confirmPassword = $_POST['conf-passwd'];

        $repo = new UserRepository();
        $user = $repo->getUserById($_COOKIE['id']);

        if( ! $password === $confirmPassword) {
            return $this->render('aboute', ['messages'=> ['ZŁE HASŁO']]);
        } else {

            if(! password_verify($password, $user->getPassword())) {
                return $this->render('aboute', ['messages' => ['ZŁE HASŁO']]);
            }
        }

        $repo = new SpectacleRepository();
        $json = $repo->getSeats($Sid,$Tid);
        $updatedJson = $this->updateSeatJson($json, $seatCol, $seatRow);
        if(! $repo->updateSeats($updatedJson, $Sid, $Tid)) {
            return $this->render('aboute', ['messages' => ['PRZEPRASWZAMY! SPRÓBUJ PONOWNIE PÓŹNIEJ']]);
        }

        return Router::run('recommendedSpectacle');

    }

    private function mapSeats(array $array): array {
        $mapped = [];
        for ($i =1; $i<=3; $i++){
            for ($j =1; $j<=3; $j++){
                $mapped[$i][$j] = null;
            }
        }
        foreach ($array as $item){
            $col = $item['column'];
            $row = $item['row'];
            $mapped[$row][$col]= $item;
        }
        return $mapped;
    }

    private function updateSeatJson($json, $seatCol, $seatRow)
    {
        $newJson = [];
        $newJson['seats_max'] = (int)$json['seats_max'];
        $newJson['seats_occupied'] = $json['seats_occupied'] + 1;

        foreach ($json['seats'] as $seat){
            if($seat['row'] === $seatRow && $seat['column'] === $seatCol ) {
                continue;
            }
            $newJson['seats'][] = $seat;
        }
        return json_encode($newJson);

    }
}
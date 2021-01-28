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
                else echo $seatsMapped[$i][$j];
            }
            echo '<br>';
        }
        $this->render('booking', ['seats' => $seatsMapped, 'id' => ['Sid' => $spectacleID, 'Tid' => $theatreID]]);
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
}
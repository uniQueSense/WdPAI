<?php


class SecurityController extends AppController
{
    public function login() {
        $this->render('login');
    }

    public function logout() {
        setcookie("email",null,-1);
        setcookie("id",null,-1);
        Router::run('recommendedSpectacle');

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
            return $this->render('aboute', ['messages'=> ['error!']]);
        } else {
            if(!$this->checkPassword($password, $user->getPassword()))
                return $this->render('aboute', ['messages'=> ['error!']]);
        }

        $repo = new SpectacleRepository();
        $json = $repo->getSeats($Sid,$Tid);
        $updatedJson = $this->updateSeatJson($json, $seatCol, $seatRow);
        if(! $repo->updateSeats($updatedJson, $Sid, $Tid)) {
            echo 'xD';
            die();
        }
        //TODO check passwords
        //TODO assign booked seat to user!
        //TODO return view
        return Router::run('recommendedSpectacle');

    }

    public function loginForm()
    {

        if (!$this->isPost()) {
            return $this->login('login');
        }

        $userRepository = new UserRepository();

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user) {
            return $this->render('login', ['messages' => ['Nie znaleziono']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login',['messages' => ['Zły email!']]);
        }

        if ($this->checkPassword($password, $user->getPassword())) {
            return $this->render('login',['messages' => ['Złe hasło!']]);
        }

        setcookie("email",$email,time()+86000*30);
        setcookie("id",$user->getIdUser(),time()+86000*30);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/recommendedSpectacle");
    }

    private function updateSeatJson($json, $seatCol, $seatRow) {
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
    private function hashPasswd($passwd): string {
        return password_hash($passwd,PASSWORD_ARGON2ID);
    }

    private function checkPassword($passwd, $toCheck): bool {
        return password_verify($toCheck, $passwd);
    }
}
<?php



class RegisterController extends AppController
{
    public function register()
    {
        $this->render('register');
    }

    public function registerForm() {

        if (!$this->isPost()) {
            $this->render('register');
        }

        $userRepository = new UserRepository();

        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $city = $_POST["city"];
        $street = $_POST["street"];
        $home_number = $_POST["home_number"];
        $phone_number = $_POST["phone_number"];

        if ($repassword == $password){
            $user = $userRepository->setUser($name, $surname, $email, $password, $city, $street, $home_number, $phone_number);
        }
        else{
            return $this->render('register', ['messages' => ['Niepoprawne hasła!!']]);
        }

        if(!$user) {
            return $this->render('register', ['messages' => ['Nie udało się!']]);
        }


        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");

    }

}
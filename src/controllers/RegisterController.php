<?php

include_once 'AppController.php';
include_once __DIR__.'/../models/User.php';
include_once __DIR__.'/../repository/UserRepository.php';

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
        $number = $_POST["number"];
        $phone = $_POST["phone"];

        //var_dump($_POST);
        if ($repassword == $password){
            $user = $userRepository->setUser($name, $surname, $email, $password, $city, $street, $number, $phone);
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
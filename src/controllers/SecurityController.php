<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $userRepository = new UserRepository();

        if ($this->isPost()) {
            return $this->login('login');
        }


        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user){}
            return $this->render('login',['messages' => ['Nie znaleziono']]);

        if ($user->getEmail() !== $email) {
            return $this->render('login',['messages' => ['Zły email!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login',['messages' => ['Złe hasło!']]);
        }

        //return $this->render('projects');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/projects");
    }
}
<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $user = new User('tsoprano@gmial.com', 'admin', 'Anthony', 'Soprano');

        if ($this->isPost()) {
            return $this->login('login');
        }


        $email = $_POST["email"];
        $password = $_POST["password"];

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
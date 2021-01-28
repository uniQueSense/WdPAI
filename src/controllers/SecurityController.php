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

        if (password_verify($password, $user->getPassword())) {
            return $this->render('login',['messages' => ['Złe hasło!']]);
        }

        setcookie("email",$email,time()+86000*30);
        setcookie("id",$user->getIdUser(),time()+86000*30);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/recommendedSpectacle");
    }

}
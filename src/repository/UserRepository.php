<?php

require_once "Repository.php";
require_once __DIR__."/../models/User.php";
class UserRepository extends Repository
{
    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            // TODO napisac metode zwracajaca exception BAZA DANYCH W PHP 28:40
            return null;
        }

        return new User(
            $user['$email'],
            $user['$password'],
            $user['$name'],
            $user['$surname']
        );
    }

    public function setUser(string $name, string $surname, string $email, string $password, string $city, string $street, int $number) {

        $connection = $this->database->connect();
        if ($connection->beginTransaction()) {
            $stmt = $connection->prepare('
            INSERT INTO users (name, surname, email, password)
            VALUES (:name,:surname,:email,:password)
            ');

            if (! $stmt->execute([
                ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':password' => $password
            ])) {
                $connection->rollBack();
                return;
            }

            // TODO napisać zeby powstal nowy wiersz w users details
        }
    }


}
<?php

class UserRepository extends Repository
{
    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email;
        ');
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id_user'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function setUser(string $name, string $surname, string $email, string $password,
                            string $city, string $street, int $home_number, int $phone_number) :bool {

        $connection = $this->database->connect();

        if ($connection->beginTransaction()) {
            $stmt = $connection->prepare('
            INSERT INTO users (name, surname, email, password)
            VALUES (:name, :surname, :email, :password)');

            if (!$stmt->execute([
                ':name' => $name,
                ':surname' => $surname,
                ':email' => $email,
                ':password' => $password])) {

                $connection->rollBack();
                return false;
            }

            $stmt = $connection->prepare('
            INSERT INTO users_details (city, street, home_number, phone, id_user)
            VALUES (:city, :street, :home_number, :phone_number, :id_user)');

            if (!$stmt->execute([
                ':city' => $city,
                ':street' => $street,
                ':home_number' => $home_number,
                ':phone_number' => $phone_number,
                ':id_user' => $connection->lastInsertId()])) {

                $connection->rollBack();
                return false;
            }
            $connection->commit();

            return true;
        }

        return false;

    }

    public function getUserById(int $Id): ?User {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users WHERE id_user = :id;
        ');
        $stmt->bindParam(':id', $Id);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id_user'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }
}
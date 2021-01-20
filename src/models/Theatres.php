<?php

class Theatres {
    private $id_theatre;
    private $name;
    private $city;
    private $street;
    private $number;

    public function __construct($id_theatre, $name, $city, $number, $street) {

        $this->id_theatre = $id_theatre;
        $this->name = $name;
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    public function getIdTheatre()
    {
        return $this->id_theatre;
    }

    public function setIdTheatre($id_theatre): void
    {
        $this->id_theatre = $id_theatre;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }


}
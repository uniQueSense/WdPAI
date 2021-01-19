<?php

class Performances {
    private $id_spectacle;
    private $title;
    private $description;
    private $image;
    private $cost;

    public function __construct($id_spectacle, $title, $description, $cost, $image)
    {
        $this->id_spectacle = $id_spectacle;
        $this->title = $title;
        $this->description = $description;
        $this->cost = $cost;
        $this->image = $image;
    }


    public function getId()
    {
        return $this->id_spectacle;
    }


    public function setId($id_spectacle): void
    {
        $this->id_spectacle = $id_spectacle;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
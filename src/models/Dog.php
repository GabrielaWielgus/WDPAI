<?php

class Dog {
    private $dog_name;
    private $breed;
    private $gender;
    private $description;
    private $image;

    public function __construct($dog_name, $breed, $gender, $description, $image)
    {
        $this->dog_name = $dog_name;
        $this->breed = $breed;
        $this->gender = $gender;
        $this->description = $description;
        $this->image = $image;
    }

    public function getDogName()
    {
        return $this->dog_name;
    }

    public function setDogName($dog_name)
    {
        $this->dog_name = $dog_name;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
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
}
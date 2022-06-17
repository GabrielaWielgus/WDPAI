<?php

class Place
{
    private $title;
    private $description;
    private $coordinates;

    public function __construct($title, $description, $coordinates)
    {
        $this->title = $title;
        $this->description = $description;
        $this->coordinates = $coordinates;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getCoordinates()
    {
        return $this->coordinates;
    }

    public function setCoordinates($coordinates): void
    {
        $this->coordinates = $coordinates;
    }


}
<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Place.php';

class PlaceRepository extends Repository
{
    public function getPlaces(): array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM all_places
        ');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPlace(Place $place): void {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO places (title,description,coordinates)
            VALUES (?,?,?)
        ');
        $stmt->execute([
            $place->getTitle(),
            $place->getDescription(),
            $place->getCoordinates()
        ]);
    }
}
<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Dog.php';

class DogRepository extends Repository
{
    public function getDog(string $id): ?Dog
    {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM dogs WHERE id = :id
      ');
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();

        $dog = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$dog){
            return null;
        }
        return new Dog(
            $dog['dog_name'],
            $dog['breed'],
            $dog['gender'],
            $dog['description'],
            $dog['image']
        );
    }

    public function addDog(Dog $dog): void {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO dogs (dog_name,breed,gender,description,id_assigned_by,image)
            VALUES (?,?,?,?,?,?)
        ');
        $assignedById = 1;
        $stmt->execute([
            $dog->getDogName(),
            $dog->getBreed(),
            $dog->getGender(),
            $dog->getDescription(),
            $assignedById,
            $dog->getImage()
        ]);
    }
}
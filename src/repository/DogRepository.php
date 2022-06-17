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
    public function getDogs(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM all_dogs;
        ');
        $stmt->execute();
        $dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dogs as $dog) {
            $result[] = new Dog(
                $dog['dog_name'],
                $dog['breed'],
                $dog['gender'],
                $dog['description'],
                $dog['image']
            );
        }
        return $result;
    }
    public function getDogByNameByDescription(string $searchString){
        $searchString = '%'.strtolower($searchString).'%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM dogs WHERE LOWER(dog_name) OR LOWER(description) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Dog.php';
require_once __DIR__.'/../repository/DogRepository.php';


class AddDogController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $dogRepository;

    public function __construct()
    {
        parent::__construct();
        $this->dogRepository = new DogRepository();
    }

    public function search(){
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if($contentType === "application/json"){
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content,true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->dogRepository->getDogByNameByDescription($decoded['search']));
        }
    }

    public function dogs(){
        $dogs = $this->dogRepository->getDogs();
        $this->render('dogs',['dogs'=>$dogs]);
    }

    public function addDog()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $dog = new Dog($_POST['dog_name'], $_POST['breed'], $_POST['gender'],$_POST['description'], $_FILES['file']['name']);
            $this->dogRepository->addDog($dog);
            return $this->render('dogs', [
                'dogs' =>$this->dogRepository->getDogs(),
                'messages' => $this->message]);
        }
        return $this->render('addDog', ['messages' => $this->message]);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}
